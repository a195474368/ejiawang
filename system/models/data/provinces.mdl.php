
<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: city.mdl.php 3159 2014-01-22 01:54:39Z youyi $
 */

class Mdl_Data_Provinces extends Mdl_Table
{   
  
    protected $_table = 'data_provinces';
    protected $_pk = 'id';
    protected $_cols = 'id,name';
    protected $_orderby = array( 'id'=>'ASC');
    //protected $_pre_cache_key = 'data-city-list';
    
      public function create($data)
    {
       // if(!$data = $this->_check_schema($data)){
         //   return false;
       // }
        //$data['dateline'] = __CFG::TIME;
        if($id = $this->db->insert($this->_table, $data, true)){
            $this->flush();
        }
        return $id;
    }
    public function update($pk, $data, $checked=false)
    {
        $this->_checkpk();
        if(!$data = $this->_check_schema($data,  $pk)){
            return false;
        }
        unset($data['id']);
        if($this->db->update($this->_table, $data, $this->field($this->_pk, $pk))){
            $this->flush();
        }
        return true;
    }
     protected function _check($data, $city_id=null)
    {
        if(isset($data['pinyin'])){
            if($city = $this->city_by_pinyin($data['pinyin'])){
                if(!$city_id || ($city['city_id'] != $city_id)){
                    $this->err->add('........', 455);
                    return false;
                }
            }
        }
        return parent::_check($data, $city_id);
    }
  
    
    public function options()
    {
    	$options = array();
    	if($provinces = $this->fetch_all()){
    		foreach($provinces as $k=>$v){
    			$options[$k] = $v['name'];
    		}
    	}
    	return $options;
    }
}
