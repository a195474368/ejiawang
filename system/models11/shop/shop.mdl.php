<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: shop.mdl.php 3874 2014-03-15 03:26:57Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Shop_Shop extends Mdl_Table
{   
  
    protected $_table = 'shop';
    protected $_pk = 'shop_id';
    protected $_cols = 'shop_id,uid,money,cat_id,city_id,area_id,verify_name,is_vip,title,name,logo,contact,phone,xiaobao,views,credit,score,comments,products,lng,lat,orderby,audit,closed,dateline';
    protected $_orderby = array('orderby'=>'ASC', 'shop_id'=>'DESC');

    protected $_hot_orderby = array('score'=>'DESC','views'=>'ASC');
    protected $_hot_filter = array('audit'=>'1', 'closed'=>0);
    protected $_new_orderby = array('shop_id'=>'DESC');
    protected $_new_filter = array('audit'=>'1', 'closed'=>0);    

    public function detail($shop_id, $closed=false)
    {
        if(!$shop_id = (int)$shop_id){
            return false;
        }
        $sql = "SELECT f.*,s.* FROM ".$this->table($this->_table)." s LEFT JOIN ".$this->table('shop_fields')." f ON s.shop_id=f.shop_id WHERE s.shop_id='$shop_id'";
        if($row = $this->db->GetRow($sql)){
            $row = $this->_format_row($row);
        }
        return $row;
    }

    public function shop_by_uid($uid)
    {
        if(!$uid = (int)$uid){
            return false;
        }
        $sql = "SELECT f.*,s.* FROM ".$this->table($this->_table)." s LEFT JOIN ".$this->table('shop_fields')." f ON s.shop_id=f.shop_id WHERE s.uid='$uid'";
        if($row = $this->db->GetRow($sql)){
            $row = $this->_format_row($row);
        }
        return $row;        
    }
    
    public function create($data, $checked=false)
    {
        if(!$checked && !$data = $this->_check_schema($data)){
            return false;
        }
        if($shop_id = $this->db->insert($this->_table, $data, true)){
            K::M('shop/fields')->create(array('shop_id'=>$shop_id), true);
        }
        return $shop_id;
    }

    public function update($shop_id, $data, $checked=false)
    {
        $this->_checkpk();
        if(!$checked && !$data = $this->_check_schema($data,  $shop_id)){
            return false;
        }
        return $this->db->update($this->_table, $data, $this->field($this->_pk, $shop_id));
    }

    public function update_money($shop_id, $money, $log)
    {
        if(!$shop_id = (int)$shop_id){
            return false;
        }else if(!is_numeric($money)){
            $this->err->add('金额不合法', 213);
            return false;
        }else if(empty($log)){
            $this->err->add('日志不能空', 213);
            return false;
        }
        $sql = "UPDATE ".$this->table($this->_table)." SET `money`=`money`+{$money} WHERE shop_id='$shop_id'";
        if($res = $this->db->Execute($sql)){
            $audit = $money > 0 ? 1 : 0;
            $a = array('shop_id'=>$shop_id, 'money'=>$money, 'audit'=>$audit, 'log'=>$log);
            K::M('shop/money')->create($a);
        }
        return $res;        
    }

    public function update_score($shop_id, $score=3, $count=1)
    {
        $shop_id = (int)$shop_id;
        $score = (int)$score;
        $count = (int)$count;
        $this->update($shop_id, array('score'=>'`score`+$score', 'comments'=>'`comments`+1'), true);        
    }

    public function verify_name($uids, $verify=true)
    {
        if(!$uids = K::M('verify/check')->ids($uids)){
            return false;
        }
        $verify = $verify ? 1 : 0;
        return $this->db->update($this->_table, array('verify_name'=>$verify), "uid IN($uids)");
    }

    protected function _format_row($row)
    {
        if($city_id = $row['city_id']){
            if($city = K::M('data/city')->city($city_id)){
                $row['city_name'] = $city['city_name'];
            }
        }
        if($area_id = $row['area_id']){
            if($city = K::M('data/area')->area($area_id)){
                $row['area_name'] = $city['area_name'];
            }
        }
        if($cat_id = $row['cat_id']){
            if($cate = K::M('shop/cate')->cate($cat_id)){
                $row['cat_title'] = $cate['title'];
            }
        }
        if(isset($row['logo']) && empty($row['logo'])){
            $row['logo'] = 'default/shop_logo.jpg';
        }
        if(isset($row['banner']) && empty($row['banner'])){
            $row['banner'] = 'default/shop_banner.jpg';
        }        
        return $row;
    }

    protected function _check($data, $shop_id=null)
    {
        if($uid = (int)$data['uid']){
            if($member = K::M('member/view')->detail($uid)){
                if($member['from'] != 'shop'){
                    $this->err->add("所属会员必须为商家类型", 451);
                    return false;
                }else if($shop = $this->shop_by_uid($uid)){
                    if(empty($shop_id)){
                        $this->err->add("该用户已经隶属于:{$shop['title']}(ID:{$shop['shop_id']})，不能重复关联", 452);
                        return false;
                    }else if($shop_id != $shop['shop_id']){
                        $this->err->add("该用户已经隶属于:{$shop['title']}(ID:{$shop['shop_id']})，不能重复关联", 453);
                        return false;
                    }
                }
            }else{
                $data['uid'] = 0;
            }
        }
        return parent::_check($data, $shop_id);  
    }
}