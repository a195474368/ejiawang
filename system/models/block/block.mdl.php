<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: block.mdl.php 3240 2014-02-11 07:14:10Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Block_Block extends Mdl_Table
{   
  
    protected $_table = 'block';
    protected $_pk = 'block_id';
    protected $_cols = 'block_id,title,page_id,from,type,desc,config,ttl,orderby,dateline';
    protected $_orderby = array('orderby'=>'ASC', 'block_id'=>'ASC');
    protected $_pre_cache_key = 'block-block-list';

    protected static $_allow_from = array('member'=>'网站会员','article'=>'文章内容','company'=>'装修公司', 'designer'=>'设计师','home'=>'我爱我家','huxing'=>'户型图', 'case'=>'装修案例', 'shop'=>'商城商家', 'product'=>'商城商品');


    public function create($data, $checked=false)
    {
        if(!$checked && !$data = $this->_check($data)){
            return false;
        }
        $data['dateline'] = __CFG::TIME;
        if($block_id = $this->db->insert($this->_table, $data, true)){
            $this->flush();
        }
        return $block_id;
    }

    public function update($block_id, $data, $checked=false)
    {
        if(!$block_id = (int)$block_id){
            return false;
        }else if(!$checked && !$data = $this->_check($data,  $block_id)){
            return false;
        } 
        if($ret = $this->db->update($this->_table, $data, $this->field($this->_pk, $block_id))){
            $this->flush();
        }
        return $ret;
    }

    public function items_by_page($page_id)
    {
        $blocks = array();
        if($items = $this->fetch_all()){
            if($from){
                foreach($items as $k=>$v){
                    if($v['page_id'] == $page_id){
                        $blocks[$k] = $v;
                    }
                }
            }else{
                $blocks = $items;
            }
        }
        return $blocks;        
    }

    public function items_by_from($from=null)
    {
        $blocks = array();
        if($items = $this->fetch_all()){
            if($from){
                foreach($items as $k=>$v){
                    if($v['from'] == $from){
                        $blocks[$k] = $v;
                    }
                }
            }else{
                $blocks = $items;
            }
        }
        return $blocks;
    }

    public function block_by_id($id)
    {
        if($items = $this->fetch_all()){
            return $items[$id];
        }
        return false;        
    }

    public function block_by_name($name)
    {
        if($items = $this->fetch_all()){
            foreach($items as $v){
                if($v['title'] == $name){
                    return $v;
                }
            }
        }
        return false;
    }

    public function from_list()
    {
        return self::$_allow_from;
    }

    public function load_mdl($from)
    {
        static $_allow_mdl = array('member'=>'member/view','designer'=>'designer/designer','home'=>'home/main','huxing'=>'home/pics','company'=>'company/company', 'case'=>'case/case', 'shop'=>'shop/shop', 'brand'=>'shop/brand', 'product'=>'product/product','coupon'=>'shop/coupon','article'=>'article/view');
        if($mdl = $_allow_mdl[$from]){
            return K::M($mdl);
        }
        return false;
    }

    public function format_item($row, $from='product')
    {
        static $oLink = null;
        static $site = null;
        if($oLink === null){
            $oLink = K::M('helper/link');
            $site = K::$system->config->get('site');
        }
        if(in_array($from, array('member', 'designer'))){
            $row['itemId'] = $row['uid'];
            $row['title'] = $row['uname'];
            $row['thumb'] = $row['face'];
        }else if('article' == $from){
            $row['itemId'] = $row['article_id'];
        }else if('home' == $from){
            $row['itemId'] = $row['id'];
            $row['title'] = $row['name'];
            $row['thumb'] = $row['face_pic'];
        }else if('huxing' == $from){
            $row['itemId'] = $row['id'];
            $row['thumb'] = $row['pic'];
        }else if('case' == $from){
            $row['itemId'] = $row['case_id'];
            $row['thumb'] = $row['photo'];
        }else if('company' == $from){
            $row['itemId'] = $row['company_id'];
            $row['title'] = $row['name'];
            $row['thumb'] = $row['logo'];            
        }else if('shop' == $from){
            $row['itemId'] = $row['shop_id'];
            $row['thumb'] = $row['logo'];
        }else if('product' == $from){
            $row['itemId'] = $row['product_id'];
            $row['thumb'] = $row['photo'].'_thumb.jpg';
        }else if('coupon' == $from){
            $row['itemId'] = $row['coupon_id'];
            $row['thumb'] = $row['photo'];
        }
        //$link todo
        //$row['link'] = '';

        return $row;
    }

    protected function _check($data, $block_id=null)
    {
        unset($data['block_id'], $data['dateline']);
        if(!$block_id || isset($data['title'])){
            if(empty($data['title'])){
                $this->err->add('推荐位名称不能为空', 401);
                return false;
            }else if($block = $this->block_by_name($data['title'])){
                if(!$block_id || ($block['block_id'] != $block_id)){
                    $this->err->add('该推荐位称已经存在', 402);
                    return false;
                }
            }
        }
        if(!$block_id || isset($data['from'])){
            if(!self::$_allow_from[$data['from']]){
                $data['from'] = 'data';
            }          
        }
        if(isset($data['ttl'])){
            $data['ttl'] = (int)$data['ttl'];
        }        
        if(isset($data['orderby'])){
            $data['orderby'] = (int)$data['orderby'];
        }
        return parent::_check($data);
    }

    public function block_city_items($block, $city_id=0, $limit=null)
    {
        $block_id = $block['block_id'];
        $limit = (int)$limit ? (int)$limit : $block['limit'];
        $cache_key =$this->_pre_cache_key."-items-{$block_id}-{$city_id}-{$limit}";
        if(!$block_items = $this->cache->get($cache_key, $block['ttl'])){
            $block_items = array();
            if(!$mdl = $this->load_mdl($block['from'])){
                return false;
            }
            if($items = K::M('block/item')->items_by_block($block_id,1, 5000)){
                $iids = array();
                $time = __CFG::TIME - 86400;
                $has_expire = false;
                $count = 0;
                foreach($items as $k=>$v){
                    if(empty($v['expire_time']) || $v['expire_time'] > $time){
                        if($city_id){
                            if(in_array($city_id, $v['city_ids'])){
                                $iids[$v['itemId']] = $v['itemId'];
                                $block_items[$k] = $v;
                                if( ++$count >= $limit){
                                    break;
                                }                                
                            }
                        }else{
                            $iids[$v['itemId']] = $v['itemId'];
                            $block_items[$k] = $v;
                            if( ++$count >= $limit){
                                break;
                            }                           
                        }                    
                    }else{
                        $has_expire = true;
                    }
                }
                if($has_expire){
                    K::M('block/item')->update_expire();
                }
                if($iids){
                    if($item_list = $mdl->items_by_ids($iids)){
                        foreach($block_items as $k=>$v){
                            if($a = $item_list[$v['itemId']]){
                                $v = array_merge($a, $v);
                            }
                            $block_items[$k] = $v;
                        }
                    }
                }
            }
            $count = count($block_items);
            if($limit > $count){
                $mothed = $params['order'] == 'hot' ? 'items_by_hot' : 'items_by_new';
                $filter = $city_id ? array('city_id'=>$city_id) : null;
                if($item_list = $mdl->$mothed($filter, $limit)){
                    foreach($item_list as $k=>$v){
                        if($count >= $limit){
                            break;
                        }else if($block_items[$k]){
                            break;
                        }
                        $block_items[$k] = $this->format_item($v, $block['from']);
                        $count ++ ;
                    }
                }
            }
            $block_items = $mdl->format_items_ext($block_items);
            $this->cache->set($cache_key, $block_items, $block['ttl']);
        }
        return $block_items;
    }

    public function block($params, $content, $smarty)
    {
        if($block_id = $params['id']){
            if(!$block = $this->block_by_id($block_id)){
                return false;
            }
        }else if($block_name = $params['name']){
            if(!$block = $this->block_by_name($block_name)){
                return false;
            }
        }else{
            return false;
        }
        //if(!$block_items = K::M('block/item')->items_by_block($block['block_id'], $block['from'], $block['ttl'])){
        //    return false;
        //}
        $limit = $params['limit'] ? (int)$params['limit'] : $block['limit'];
        $city_id = $params['city_id'] ? (int)$params['city_id'] : 0;        
        if(!$items = $this->block_city_items($block, $city_id, $limit)){
            return false;
        }
        $data = '';
        $index = 0;
        $iteration = 1;
        $count = count($items);
        $smarty->assign('count', $count);
        $smarty->assign('limit', $limit);
        $smarty->assign('first', true);
        foreach($items as $item){
            $smarty->assign('index', $index++);
            $smarty->assign('iteration', $iteration++);
            if($count>$index){
                $smarty->assign('last', false);
            }else{
               $smarty->assign('last', true); 
            }
            $smarty->assign('item', $item);
            $data .= $smarty->fetch("string:{$content}");
            $smarty->assign('first', false);
        }
        return $data;
    }

    public function calldata($params, $content, $smarty)
    {
        if($model = $params['mdl']){
            if(!$mdl = K::M($model)){
                return false;
            }
        }else if($from = $params['from']){
            if(!$mdl = $this->load_mdl($from)){
                return false;
            }
        }else{
            return false;
        }
        $hash = $params['hash'] ? $params['hash'] : md5(var_export($params, true));
        $ttl = $params['ttl'] ? $params['ttl'] : 3600;
        $nocache = isset($params['nocache']) ? $params['nocache'] : ($ttl < 0 ? true : false);
        $noext = isset($params['noext']) ? $params['noext'] : false;
        if(!$nocache && !$items = $this->cache->get($hash)){
            $limit = $params['limit'] ? (int)$params['limit'] : 10;
            $filter = $params;
            unset($filter['mdl'], $filter['order'], $filter['limit'], $filter['hash'], $filter['ttl'], $filter['nocache']);
            if(!empty($from)) unset($filter['from']); //有地方需要用到 from
            $items = array();
            if('hot' == $params['order']){
                $items = $mdl->items_by_hot($filter, $limit);
            }else if('new' == $params['order']){
                $items = $mdl->items_by_new($filter, $limit);
            }else{
                $filter['closed'] = 0;
                $filter['audit'] = 1;
                $order = $this->_parse_orderby($params['order']);
                $items = $mdl->items($filter, $order, 1, $limit);
            }
            if(empty($noext)){
                $items = $mdl->format_items_ext($items);
            }
            if(empty($nocache)){
                $this->cache->set($hash, $items, $ttl);
            }
        }
        if($items){
            $data = '';
            $index = 0;
            $iteration = 1;
            $count = count($items);
            $smarty->assign('count', $count);
            $smarty->assign('limit', $limit);
            $smarty->assign('first', true);
            foreach($items as $item){
                $smarty->assign('index', $index++);
                $smarty->assign('iteration', $iteration++);
                if($count>$index){
                    $smarty->assign('last', false);
                }else{
                   $smarty->assign('last', true); 
                }
                $smarty->assign('item', $item);
                $data .= $smarty->fetch("string:{$content}");
                $smarty->assign('first', false);
            }
            return $data;
        }
        return false;
    }

    protected function _parse_orderby($order=null)
    {
        $orderby = array();
        if(is_array($order)){
            return $order;
        }else if($order && is_string($order)){
            foreach(explode(',', $order) as $v){
                if(strpos($v, ':')){
                    if(list($key, $val) = explode(':', $v)){
                        $val = strtoupper($val);
                        if(in_array($val, array('ASC', 'DESC'))){
                            $orderby[$key] = $val;
                        }
                    }
                }
            }
        }
        return $orderby;      
    }
}