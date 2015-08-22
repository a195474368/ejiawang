<?php
/**
 * Copy Right Anuike.com
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: widget.php 3906 2014-03-17 02:21:43Z youyi $
 */

class Widget_Product extends Model
{

    public function filter(&$params)
    {
        if(!$cat_id = (int)$params['cat_id']){
        	return false;
        }else if(!$top_cate = K::M('shop/cate')->top_cate($cat_id)){
        	return false;
        }
        $brand_id = (int)$params['brand_id'];
        $attr_ids = '0';
        if($attr_values = (array)$params['attr_values']){
        	$attr_ids = implode('-', $attr_values);
        }        
        $order = (int)$params['order'];
        $oLink = K::M('helper/link');
        $ctl = $params['ctl'] ? $params['ctl'] : 'mall/product';
        if($cates = K::M('shop/cate')->childrens($top_cate['cat_id'])){
            foreach($cates as $k=>$v){
                $v['link'] = $oLink->mklink($ctl, array($k, $brand_id, $attr_ids, $order, 1), null, true);
                $cates[$k] = $v;
            }
        }
        $cate_all_link = $oLink->mklink($ctl, array($top_cate['cat_id'], $brand_id, $attr_ids, $order, 1), null, true);
        if($brand_ids = $top_cate['brand_ids']){
            if($brands = K::M('shop/brand')->items_by_ids($brand_ids)){
                foreach($brands as $k=>$v){
                    $v['link'] = $oLink->mklink($ctl, array($cat_id, $k, $attr_ids, $order, 1), null, true);
                    $brands[$k] = $v;
                }
            }
        }
        $brand_all_link = $oLink->mklink($ctl, array($cat_id, 0, $attr_ids, $order, 1), null, true);
        if($attrs = K::M('shop/attr')->attrs_by_cat($top_cate['cat_id'])){
            $values = array();
            foreach($attrs as $k=>$v){
                foreach($attr_values as $kk=>$vv){
                    if($v['values'][$vv]){
                        $values[$k] = $vv;
                    }
                }
            }
            $attr_values = $values;
            foreach($attrs as $k=>$v){
                $checked = false;
                foreach((array)$v['values'] as $kk=>$vv){
                    if(in_array($vv['attr_value_id'], $attr_values)){
                        $vv['checked'] = $checked = true;
                    }else{
                        $a = $attr_values;
                        $a[$vv['attr_id']] = $vv['attr_value_id'];
                        $vv['link'] = $oLink->mklink($ctl, array($cat_id, $brand_id, implode('-', $a), $order, 1), null, true);
                    }
                    $v['checked'] = $checked;
                    $a = $attr_values;
                    unset($a[$k]);
                    $v['link'] = $oLink->mklink($ctl, array($cat_id, $brand_id, implode('-', $a), $order, 1), null, true);
                    $v['values'][$kk] = $vv;
                }
                $attrs[$k] = $v;
            }            
        }
        $data = array('top_cate'=>$top_cate, 'cates'=>$cates, 'brands'=>$brands, 'attrs'=>$attrs);
        $data['cat_id'] = $cat_id;
        $data['brand_id'] = $brand_id;
        $data['cate_all_link'] = $cate_all_link;
        $data['brand_all_link'] = $brand_all_link;
        $data['attr_values'] = (array)$attr_values;
        $data['order'] = $order;
        return $data;
    }
}