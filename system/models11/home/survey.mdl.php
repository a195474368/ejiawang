<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: survey.mdl.php 2727 2014-01-03 10:15:18Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Home_Survey extends Mdl_Table
{   
  
    protected $_table = 'home_survey';
    protected $_pk = 'survey_id';
    protected $_cols = 'survey_id,city_id,area_id,uid,home_name,name,tel,create_ip,dateline';
    
    protected $_orderby = array('survey_id'=>'DESC');
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