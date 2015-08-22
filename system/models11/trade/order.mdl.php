<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: order.mdl.php 2686 2014-01-02 06:54:50Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Trade_Order extends Mdl_Table
{   
  
    protected $_table = 'order';
    protected $_pk = 'order_id';
    protected $_cols = 'order_id,order_no,uid,shop_id,product_count,product_number,product_amount,freight,amount,contact,mobile,address,note,pay_status,order_status,audit,closed,clientip,dateline';
    protected $_orderby = array('order_id'=>'DESC');
    
    public function create($data, $checked=false)
    {
        if(!$checked && !$data = $this->_check_schema($data)){
            return false;
        }
        return $this->db->insert($this->_table, $data, true);
    }

    public function create_by_cart($cart, $data)
    {
        $orders = array();
        if(empty($cart['items'])){
            $this->err->add('购物车不能为空', 211);
            return false;
        }
        foreach($cart['items'] as $item){
            $orders[$item['shop_id']][$item['product_id']] = $item;
        }
        foreach($orders as $shop_id=>$items){
            $product_amount = $shop_fee = $product_count = $product_number = 0;
            $products = $sale_counts = array();
            foreach($items as $item){
                $product = array();
                $product_count += $item['num'];
                $product_number ++;
                $product_amount += $item['price'] * $item['num'];
                $freight += $item['freight'];
                $product['product_id'] = $item['product_id'];
                $product['title'] = $item['title'];
                $product['price'] = $item['price'];
                $product['number'] = $item['num'];
                $prodcut['freight'] =$item['freight'];
                $product['amount'] = $product['price'] * $item['num'] + $product['freight'];
                $products[$item['product_id']] = $product;
				if($item['sale_type'] == 1){
					$sale_counts[$item['product_id']] = $item['num'];
				}
            }
            $order = array();
            $order['uid'] = $data['uid'];
            $order['shop_id'] = $shop_id;
            $order['contact'] = $data['contact'];
            $order['mobile'] = $data['mobile'];
            $order['address'] = $data['address'];
            $order['note'] = $data['note'];
            $order['product_count'] = $product_count;
            $order['product_number'] = $product_number;
            $order['product_price'] = $product_amount;
            $order['freight'] = $freight;
            $order['amount'] = $product_amount + $freight;
            $order['order_no'] = $this->create_order_no();
            if(!$order_id = $this->create($order)){
                return false;
            }
            foreach($products as $product){
                $product['order_id'] = $order_id;
                K::M('trade/product')->create($product, true);
				K::M('product/product')->update_count($product['product_id'], 'buys', $product['number']);
            }
			foreach($sale_counts as $pid=>$count){
				K::M('product/product')->update_count($pid, 'sale_count', $count);
			}
        }
        return $order;
    }

    public function create_order_no()
    {
        $i = rand(0, 9999);
        do {
            if (9999 == $i) {
                $i = 0;
            } 
            ++$i;
            $no = date("ymd") . str_pad($i, 4, "0", STR_PAD_LEFT);
            $order_no = $this->db->GetRow("SELECT order_no FROM ".$this->table($this->_table)." WHERE order_no='{$no}'");
        } while ($order_no);
        return $no;
    }

    public function update($pk, $data, $checked=false)
    {
        $this->_checkpk();
        if(!$checked && !$data = $this->_check_schema($data,  $pk)){
            return false;
        }
        return $this->db->update($this->_table, $data, $this->field($this->_pk, $pk));
    }

    public function detail($order_id, $closed=false)
    {
        if($row = parent::detail($order_id, $closed)){
            $row['products'] = K::M('trade/product')->order_products($row['order_id']);
        }
        return $row;
    }

    public function detail_by_no($no)
    {
        if($no = (int)$no){
            $where = "order_no=$no";
        }else{
            return false;
        }
        $sql = "SELECT * FROM ".$this->table($this->_table)." WHERE order_no='$no' AND closed=0";
        if($row = $this->db->GetRow($sql)){
            $row = $this->_format_row($row);
            $row['products'] = K::M('trade/product')->order_products($row['order_id']);
        }
        return $row;
    }

    public function set_payed($no)
    {
        if(!$order = $this->detail_by_no($no)){
            return false;
        }
        $a = array('pay_status'=>1, 'audit'=>1);
        return $this->update($order['order_id'], $a, true);
    }
}