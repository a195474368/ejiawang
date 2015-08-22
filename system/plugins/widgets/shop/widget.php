<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: widget.php 3028 2014-01-11 08:33:54Z youyi $
 */

class Widget_Shop extends Model
{

    public function index(&$params)
    {
        
    }

	public function updateviews(&$params)
	{	
		if($shop_id = (int)$params['shop_id']){
			K::M('shop/shop')->update_count($shop_id, 'views', 1);
		}
		return false;
	}

    public function attr(&$params)
    {
        if(!$cat_id = (int)$params['cat_id']){
            return false;
        }
        $params['tpl'] = $params['tpl'] ? $params['tpl'] : ($params['type']=='filter' ? 'attr-filter.html' : 'attr-form.html');
        $data['value'] = array();
        if($params['value']){
            if(!is_array($params['value'])){
                $data['value'] = explode(',', $params['value']);
            }
            $data['value'] = $params['value'];
        }
        $attrs = array();
        if($cat_id = (int)$params['cat_id']){
            $brand_ids = array();
            if($parents = K::M('shop/cate')->parents($cat_id)){
                $parents = array_reverse($parents, true);
                foreach((array)$parents as $v){
                    if($attrs = K::M('shop/attr')->attrs_by_cat($v['cat_id'])){
                        break;
                    }
                }
            }
        }        
        $data['attrs'] = $attrs;
        return $data;       
    }

    public function from(&$params)
    {
		if(!$params['tpl']){
			if(!in_array($params['type'], array('label', 'checkbox', 'radio', 'option'))){
				$params['type'] = 'option';
			}
			$params['tpl'] = 'widget:default/'.$params['type'].'.html';
		}        $data['value'] = $params['value'] ? $params['value'] : 0;
        $data['options'] = K::M('shop/view')->from_list();
        return $data;           
    }

    public function cate(&$params)
    {
		if(!$params['tpl']){
			if(!in_array($params['type'], array('label', 'checkbox', 'radio', 'option'))){
				$params['type'] = 'option';
			}
			$params['tpl'] = 'widget:default/'.$params['type'].'.html';
		}
        if(in_array($params['type'], array('label', 'checkbox'))){
            if(is_array($params['value'])){
                $data['value'] = $params['value'];
            }else{
                $data['value'] = explode(',', $params['value']);
            }
        }else{
            $data['value'] = $params['value'] ? $params['value'] : 0;
        }
        $data['name'] = $params['name'] ? $params['name'] : '';  
        $data['separator'] = $params['separator'] ? $params['separator'] : ',&nbsp;';           
        $data['options'] = K::M('shop/cate')->options();
        return $data;  
    }

    public function catenav(&$params)
    {
        $items = array();
        if($cates = K::M('shop/cate')->childrens()){
            $brand_list = K::M('shop/brand')->fetch_all();
            foreach($cates as $k=>$v){
                if(empty($v['parnt_id'])){
                    if($ids = explode(',', $v['brand_ids'])){
                        foreach($ids as $id){
                            if($a = $brand_list[$id]){
                                $v['brands'][$id] = $a;
                            }
                        }
                    }
                    $v['childrens'] = K::M('shop/cate')->childrens($v['cat_id']);
                    $items[$k] = $v;
                }
            }
        }
        $data['items'] = $items;
        return $data;
    }

    public function vcate(&$params)
    {
        if(!$shop_id = (int)$params['shop_id']){
            return false;
        }
		if(!$params['tpl']){
			if(!in_array($params['type'], array('label', 'checkbox', 'radio', 'option'))){
				$params['type'] = 'option';
			}
			$params['tpl'] = 'widget:default/'.$params['type'].'.html';
		}
        if(in_array($params['type'], array('label', 'checkbox'))){
            if(is_array($params['value'])){
                $data['value'] = $params['value'];
            }else{
                $data['value'] = explode(',', $params['value']);
            }
        }else{
            $data['value'] = $params['value'] ? $params['value'] : 0;
        }
        $data['name'] = $params['name'] ? $params['name'] : '';  
        $data['separator'] = $params['separator'] ? $params['separator'] : ',&nbsp;';           
        $data['options'] = K::M('shop/vcate')->options($shop_id);
        return $data;  
    }

    public function brand(&$params)
    {
		if(!$params['tpl']){
			if(!in_array($params['type'], array('label', 'checkbox', 'radio', 'option'))){
				$params['type'] = 'option';
			}
			$params['tpl'] = 'widget:default/'.$params['type'].'.html';
		}
        if(in_array($params['type'], array('label', 'checkbox'))){
            if(is_array($params['value'])){
                $data['value'] = $params['value'];
            }else{
                $data['value'] = explode(',', $params['value']);
            }
        }else{
            $data['value'] = $params['value'] ? $params['value'] : 0;
        }
        $data['name'] = $params['name'] ? $params['name'] : '';
        $data['separator'] = $params['separator'] ? $params['separator'] : ',&nbsp;';
        $options = K::M('shop/brand')->options();      
        if($cat_id = (int)$params['cat_id']){
            $brand_ids = array();
            if($parents = K::M('shop/cate')->parents($cat_id)){
                foreach((array)$parents as $v){
                    if($v['brand_ids']){
                        $brand_ids = explode(',', $v['brand_ids']);
                    }
                }
            }
            foreach((array)$options as $k=>$v){
                if(!in_array($k, $brand_ids)){
                    unset($options[$k]);
                }
            }            
        }
        $data['options'] = $options;
        return $data;
    }

    public function info(&$params)
    {
        return true;
    }

    public function saletop(&$params)
    {
        if(!$shop_id = ($params['shop_id'])){
            return false;
        }        
		if(!$params['tpl']){
			if(!in_array($params['type'], array('label', 'checkbox', 'radio', 'option'))){
				$params['type'] = 'option';
			}
			$params['tpl'] = 'widget:default/'.$params['type'].'.html';
		}
        $data = $params;
        $limit = $params['limit'] ? $params['limit'] : 4;
        if($items = K::M('product/product')->items_by_hot(array('shop_id'=>$shop_id), $limit)){
            $data['items'] = $items;
        }
        return $data;
    }
}