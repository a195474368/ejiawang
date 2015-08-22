<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author shzhrui<anhuike@gmail.com>
 * $Id: widget.php 3981 2014-03-19 06:30:05Z langzhong $
 */

class Widget_Adv extends Model
{

	public function index(&$params)
	{
		$data = $params;
		if($adv_id = intval($params['adv_id'])){
			if(!$detail = K::M('adv/adv')->detail($adv_id)){
				return false;
			}
		}else if($params['key']){
			if(!$adv = K::M('adv/adv')->adv_by_key($params['key'])){
				return false;
			}else if(!$detail = K::M('adv/adv')->detail($adv['adv_id'])){
				return false;
			}
		}else if($params['name']){
			if(!$adv = K::M('adv/adv')->adv_by_name($params['name'])){
				return false;
			}else if(!$detail = K::M('adv/adv')->detail($adv['adv_id'])){
				return false;
			}			
		}else{
			return false;
		}
		$data['adv'] = $adv;
		if(empty($params['tpl'])){
			$params['tpl'] = "adv_{$adv['from']}.html";
		}
		$nums = intval($params['limit']);
		$order = strtolower($params['order']);
		$order = in_array($order,array('asc','desc','rand')) ? $order : "asc";
		if($items = $detail['items']){
			$item_list = array();
			foreach($items as $k=>$v){
				if($params['city_id']){
					if(!is_array($v['city_ids'])){
						$v['city_ids'] = explode(',', $v['city_ids']);
					}
					if(!in_array($params['city_id'], (array)$v['city_ids'])){
						continue;
					}
				}
				$item_list[$k] = $v;
			}
			if(empty($item_list)){
				return false;
			}
			$item_list = array_values($item_list);
			if('desc' == $order){
				$item_list = array_reverse($item_list);
			}else if('rand' == $order){
				shuffle($item_list);
			}
			if($nums > 0){
				$item_list = array_slice($item_list,0,$nums);
			}
			$data['items'] = $item_list;
		}
		return $data;
	}
}