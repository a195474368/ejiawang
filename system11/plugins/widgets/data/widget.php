<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: widget.php 2750 2014-01-04 10:20:09Z youyi $
 */

class Widget_Data extends Model
{

    public function index(&$params)
    {
        
    }

    public function city(&$params)
    {
		if(!$params['tpl']){
			if(!in_array($params['type'], array('label', 'checkbox', 'radio', 'option'))){
				$params['type'] = 'option';
			}
			$params['tpl'] = 'widget:default/'.$params['type'].'.html';
		}
		$data = $params;
		if($params['type'] == 'checkbox' || $params['type'] == 'label'){
			$data['value'] = array();
			if($params['value']){
				if(!is_array($params['value'])){
					$data['value'] = explode(',', $params['value']);
				}else{
					$data['value'] = $params['value'];
				}
			}
		}else{
			$data['value'] = $params['value'] ? $params['value'] : 0;
		}
		$data['style'] = 'width:80px;';
		$data['name'] = $params['name'] ? $params['name'] : 'city_id';
		$data['separator'] = $params['separator'] ? $params['separator'] : '';
    	$data['options'] = K::M('data/city')->options();
    	return $data;		
    }

    public function citynav(&$params)
    {
    	$site = K::$system->config->get('site');
		$data = array();
    	if(!$site['multi_city']){
    		return false;
    	}else if($city_list = K::M('data/city')->fetch_all()){
    		$data['limit'] = $params['limit'] ? $params['limit'] : 5;
    		$data['citys'] = $city_list;
    		$py_list = array();
    		foreach($city_list as $k=>$v){
    			if($v['pinyin']){
    				$py = strtoupper(substr($v['pinyin'], 0, 1));
    				$py_list[$py][$k] = $v;
    			}
    		}
    		ksort($py_list);
    		$data['py_list'] = $py_list;
    		$params['tpl'] = 'citynav.html';
    	}
    	return $data;
    }

    public function area(&$params)
    {
		if(!$params['tpl']){
			if(!in_array($params['type'], array('label', 'checkbox', 'radio', 'option'))){
				$params['type'] = 'option';
			}
			$params['tpl'] = 'widget:default/'.$params['type'].'.html';
		}
		$data['value'] = $params['value'] ? $params['value'] : 0;
		$city_id = $params['city_id'] ? $params['city_id'] : null;
    	$data['options'] = K::M('data/area')->options($city_id);
    	return $data;	
    }

    public function attr(&$params)
    {
		$params['tpl'] = $params['tpl'] ? $params['tpl'] : ($params['type']=='filter' ? 'attr-filter.html' : 'attr-form.html');
		$data['value'] = array();
		if($params['value']){
			if(!is_array($params['value'])){
				$data['value'] = explode(',', $params['value']);
			}
			$data['value'] = $params['value'];
		}
        $data['attrs'] = K::M('data/attr')->attrs_by_from($params['from']);
        return $data;           
    }

	public function ttl(&$params)
	{
		static $options = array('600'=>'10分钟','900'=>'15分钟','1800'=>'30分钟',
			'3600'=>'1小时', '21600'=>'6小时', '43200'=>'12小时','86400'=>'24小时','0'=>'永不过期','-1'=>'不缓存');
		$params['tpl'] = 'widget:default/option.html';
        $data['options'] = $options;
		$data['value'] = $params['value'] ? $params['value'] : '86400';
        return $data;    
		
	}

	public function choose(&$params)
	{
		$params['tpl'] = $params['tpl'] ? $params['tpl'] : 'choose.html';
		$from = $params['from'];
		$from_list = K::M('data/attr')->from_list();
		if(in_array($from, $from_list)){
			return false;
		}
		$city_id = (int)$params['city_id'];
		$area_id = (int)$params['area_id'];
		$attr_values = (array)$params['attr_values'];

		$area_list = K::M('data/area')->areas_by_city($city_id);
		$from_attrs= K::M('data/attr')->attrs_by_from($from);
        $values = array();
        foreach($from_attrs as $k=>$v){
            foreach($attr_values as $kk=>$vv){
                if($v['values'][$vv]){
                    $values[$k] = $vv;
                }
            }
        }
        $attr_values = $values;
		$oLink = K::M('helper/link');
		$areas = array();
		$areas['city_id'] = $city_id;
		$filter = $attr_values ? (implode('-', $attr_values).'-') : '';
		$areas['link'] = $oLink->mklink("{$from}:items", "0-{$filter}1");
		$checked = false;
    	foreach($area_list as $k=>$v){
			$args = "{$v[area_id]}-{$filter}1";
			$v['link'] = $oLink->mklink("{$from}:items", $args);
			if($v['area_id'] == $area_id){
				$v['checked'] = $checked = true;
			}
    		$areas['items'][$k] = $v;
    	}
		$areas['checked'] = $checked;

    	foreach($from_attrs as $k=>$v){
            $checked = false;
    		foreach((array)$v['values'] as $kk=>$vv){
                if(in_array($vv['attr_value_id'], $attr_values)){
                    $vv['checked'] = $checked = true;
                }else{
                    $a = $attr_values;
    	    		$a[$vv['attr_id']] = $vv['attr_value_id'];
					$vv['link'] = $oLink->mklink("{$from}:items", "{$area_id}-".implode('-', $a).'-1');
                }
                $v['checked'] = $checked;
                $a = $attr_values;
                unset($a[$k]);
                $v['link'] = $oLink->mklink("{$from}:items", "{$area_id}-".implode('-', $a).'-1');
	    		$v['values'][$kk] = $vv;
	    	}
    		$from_attrs[$k] = $v;
    	}
		$data = array();
		$data['city_id'] = $city_id;
		$data['area_id'] = $area_id;
		$data['areas'] = $areas;
		$data['attrs'] = $from_attrs;
		return $data;
	}

	public function mapmarker(&$params)
	{
		$params['tpl'] = 'mapmarker.html';
		//117.332856,31.898782
		$data['map_x'] = $params['map_x'];
		$data['map_y'] = $params['map_y'];
		return $data;
	}
}