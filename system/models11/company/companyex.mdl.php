<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: companyex.mdl.php 2246 2013-12-17 03:04:21Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Company_Companyex extends Mdl_Table
{   
  
    protected $_table = 'company_ex';
    protected $_pk = 'company_id';
    protected $_cols = 'company_id,intro,template_id';

    
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
        if($result = $this->detail($pk)){
         
             return $this->db->update($this->_table, $data, $this->field($this->_pk, $pk));
        }
        $data[$this->_pk] = $pk;

        return $this->create($data);
    }
    
   
}