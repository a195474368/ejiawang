<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: city.mdl.php 3159 2014-01-22 01:54:39Z youyi $
 */

class Mdl_Data_City extends Mdl_Table
{   
  
    protected $_table = 'data_city';
    protected $_pk = 'city_id';
    protected $_cols = 'city_id,city_name,pinyin,theme_id,seo_title,seo_keywords,seo_description,orderby,audit,dateline';
    protected $_orderby = array('orderby'=>'ASC', 'city_id'=>'ASC');
    protected $_pre_cache_key = 'data-city-list';
    
    public function create($data)
    {
        if(!$data = $this->_check_schema($data)){
            return false;
        }
        $data['dateline'] = __CFG::TIME;
        if($city_id = $this->db->insert($this->_table, $data, true)){
            $this->flush();
        }
        return $city_id;
    }

    public function update($pk, $data, $checked=false)
    {
        $this->_checkpk();
        if(!$data = $this->_check_schema($data,  $pk)){
            return false;
        }
        unset($data['city_id'], $data['dateline']);
        if($this->db->update($this->_table, $data, $this->field($this->_pk, $pk))){
            $this->flush();
        }
        return true;
    }

    public function fetch_all()
    {
    	if(!$citys = $this->cache->get($this->_pre_cache_key)){
    		$sql = "SELECT * FROM ".$this->table($this->_table)." ORDER BY orderby ASC";
    		if($rs = $this->db->Execute($sql)){
                $site = K::$system->config->get('site');
    			while($row = $rs->fetch()){
                    if($site['city_domain']){
                        $row['domain'] = $row['pinyin'].'.'.$site['city_domain'];
                        $row['siteurl'] = 'http://'.$row['domain'];
                    }
    				$citys[$row[$this->_pk]] = $row;
    			}
    		}
    		$this->cache->set($this->_pre_cache_key, $citys, $this->_cache_ttl);
    	}
    	return $citys;
    }
	
    public function options()
    {
    	$options = array();
    	if($citys = $this->fetch_all()){
    		foreach($citys as $k=>$v){
    			$options[$k] = $v['city_name'];
    		}
    	}
    	return $options;
    }

    public function city($city_id)
    {
        if(!$city_id = intval($city_id)){
            return false;
        }else if($items = $this->fetch_all()){
            return $items[$city_id];
        }
        return false;
    }
    
    
    
    public function city_by_pinyin($py)
    {
        if($citys = $this->fetch_all()){
            foreach($citys as $v){
                if($py == $v['pinyin']){
                    return $v;
                }
            }
        }
        return false;
    }

    public function city_by_ip($ip)
    {
        if($loc = K::M('misc/location')->location($ip)){
            if($citys = $this->fetch_all()){
                foreach($citys as $city){
                    if(strpos($loc, $city['city_name'])){
                        return $city;
                    }
                }
            }
        }
        return false;
    }

    protected function _check($data, $city_id=null)
    {
        if(isset($data['pinyin'])){
            if($city = $this->city_by_pinyin($data['pinyin'])){
                if(!$city_id || ($city['city_id'] != $city_id)){
                    $this->err->add('城市拼音不能重复', 455);
                    return false;
                }
            }
        }
        return parent::_check($data, $city_id);
    }
}