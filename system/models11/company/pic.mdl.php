<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: pic.mdl.php 2727 2014-01-03 10:15:18Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Company_Pic extends Mdl_Table
{   
  
    protected $_table = 'company_pic';
    protected $_pk = 'pic_id';
    protected $_cols = 'pic_id,company_id,type,title,pic';
    
    protected $_type_means = array(1=>'企业资质',2=>'企业荣誉');
    
    protected $_type = array('qualification'=>1,'honor'=>2);
    
    protected $_orderby = array('pic_id'=>'DESC');
    
    public function get_type_means(){
        
        return $this->_type_means;
    }
    public function get_type(){
        
        return $this->_type;
    }
    
    public function create($data, $checked=false)
    {
        if(!$checked && !$data = $this->_check_schema($data)){
            return false;
        }
        return $this->db->insert($this->_table, $data, true);
    }

    public function update($pk, $data, $checked=false)
    {
        $this->_checkpk();
        if(!$checked && !$data = $this->_check_schema($data,  $pk)){
            return false;
        }
        return $this->db->update($this->_table, $data, $this->field($this->_pk, $pk));
    }
}