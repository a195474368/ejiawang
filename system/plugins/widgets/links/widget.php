<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author shzhrui<anhuike@gmail.com>
 * $Id: widget.php 2034 2013-12-07 03:08:33Z langzhong $
 */

class Widget_Links extends Model
{

	public function index(&$params)
	{
		$params['tpl'] = 'default.html';
		$links = array();
		if($items = K::M('market/links')->fetch_all()){
			foreach($items as $k=>$v){
				if($params['city_id']){
					if(!is_array($v['city_ids'])){
						$v['city_ids'] = explode(',', $v['city_ids']);
					}
					if(!in_array($params['city_id'], (array)$v['city_ids'])){
						continue;
					}
				}
				$links[$k] = $v;
			}
		}
		return $links;
	}
        public function news(&$params)
	{
		$params['tpl'] = 'new.html';
		$links = array();
		if($items = K::M('market/links')->fetch_all()){
			foreach($items as $k=>$v){
				if($params['city_id']){
					if(!is_array($v['city_ids'])){
						$v['city_ids'] = explode(',', $v['city_ids']);
					}
					if(!in_array($params['city_id'], (array)$v['city_ids'])){
						continue;
					}
				}
				$links[$k] = $v;
			}
		}
		return $links;
	}
}