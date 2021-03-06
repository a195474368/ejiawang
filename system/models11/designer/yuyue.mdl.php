<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: yuyue.mdl.php 2727 2014-01-03 10:15:18Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Designer_Yuyue extends Mdl_Table
{   
  
    protected $_table = 'designer_yuyue';
    protected $_pk = 'yuyue_id';
    protected $_cols = 'yuyue_id,uid,designer_id,company_id,mobile,cantact,content,dateline,create_ip';

    protected $_orderby = array('yuyue_id'=>'DESC');
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