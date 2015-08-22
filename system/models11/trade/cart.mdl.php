<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: cart.mdl.php 3138 2014-01-20 07:54:27Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Trade_Cart extends Model 
{
    
    public $cart = array();

    public function __construct(&$system)
    {
        parent::__construct($system);
        $this->uid = $system->uid;
        if($this->uid){
            $cart = $system->MEMBER['cart'];
        }else{
            $cart = $system->cookie->get('CART');
        }
        $this->cart = $this->unpack($cart);
        if($this->uid){
            $this->merge_cart();
        }
        register_shutdown_function(array(&$this, 'save_cart'));
    }

    //添加到购车
    public function add($pid, $num=1)
    {
        if(isset($this->cart[$pid])){
            $this->cart[$pid] += intval($num); 
        }else{
            $this->cart[$pid] = intval($num);
        }
        return true;
    }

    public function update($pid, $num=1)
    {
        if(isset($this->cart[$pid])){
            $this->cart[$pid] = intval($num);
        }
    }

    //删除
    public function delete($pid)
    {
        unset($this->cart[$pid]);
        return true;
    }

    //清空购物车
    public function clean()
    {
        $this->cart= array();
        return true;
    }

    public function merge_cart()
    {
        if($cart = $this->cookie->get('CART')){
            $cart = $this->unpack($cart);
            foreach($cart as $k=>$v){
                if($v = intval($v)){
                    if(isset($this->cart[$k])){
                        $this->cart[$k] += intval($v);
                    }else{
                        $this->cart[$k] = intval($v);
                    }
                }
            }
            if($this->uid){
                $this->cookie->delete('CART');
            }
            //$this->save_cart();
        }
    }

    public function pack($cart)
    {
        $ars = array();
        foreach($this->cart as $k=>$v){
            if($v = intval($v)){
                $ars[] = "{$k}:{$v}";
            }
        }
        $ars = $ars ? implode(';', $ars) : '';
        return $ars;
    }

    public function unpack($cart)
    {
        $ars = array();
        if($a = explode(';', $cart)){
            foreach($a as $v){
                $b = explode(':', $v);
                if($v = intval($v)){
                    $ars[$b[0]] = $b[1];
                }
            }
        }
        return $ars;
    }   

    public function save_cart()
    {
        $ars = array();
        $number = $count = 0;
        foreach($this->cart as $k=>$v){
            if($v = intval($v)){
                $ars[] = "{$k}:{$v}";
                $count += $v;
            }
            $number ++;
        }
        $ars = $ars ? implode(';', $ars) : '';
        if($this->uid){
            K::M('member/handler')->update($this->uid, array('cart'=>$ars), true);
        }else{
            $this->cookie->set('CART', $ars);
        }
        $this->cookie->set('CART_NUMBER', $number);
        $this->cookie->set('CART_COUNT', $count);
    }

    public function detail()
    {
        $shop_ids = $product_ids = $items = array();
        $total_amount = $product_amount = $shop_fee = $product_count = $product_number = 0;
        foreach($this->cart as $pid=>$num){
            $product_ids[$pid] = $pid;
            
        }
        if($product_ids){
            if($product_list = K::M('product/product')->items_by_ids($product_ids)){
                $unpids = array();
                $cart = $this->cart;
                foreach($cart as $pid=>$num){
                    if(($num = (int)$num) && ($item = $product_list[$pid])){
                        $product_count += $num;
                        $product_number ++;
                        $product_amount += $item['price'] * $num;
                        $ship_fee += $item['freight'];
                        $shop_ids[$item['product_id']] = $item['product_id'];
                        $item['num'] = $num;
                        $items[$pid] = $item;
                    }else{
                        $this->delete($pid);
                    }
                }
            }
        }
        $detail = array('items'=>$items, 'shop_ids'=>$shop_ids, 'product_ids'=>$product_ids);
        $detail['total_amount'] = $product_amount + $ship_fee;
        $detail['product_amount'] = $product_amount;
        $detail['ship_fee'] = $ship_fee;
        $detail['product_count'] = $product_count;
        $detail['product_number'] = $product_number;
        return $detail;
    }
       
}