<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: sign.mdl.php 2034 2013-12-07 03:08:33Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Company_Sign extends Mdl_Table
{   
  
    protected $_table = 'company_youhui_sign';
    protected $_pk = 'sign_id';
    protected $_cols = 'sign_id,youhui_id,uid,mobile,cantact,dateline,create_ip';

    
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