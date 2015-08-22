<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: main.mdl.php 2098 2013-12-11 03:11:52Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Home_Main extends Mdl_Table
{   
  
    protected $_table = 'home';
    protected $_pk = 'id';
    protected $_cols = 'id,city_id,area_id,name,site_num,price,addr,tel,qq_qun,face_pic,jf,kp,kf,lng,lat,details,pv_num,case_num,last_case_company_id';
    protected $_orderby = array('id'=>'DESC');

    protected $_hot_orderby = array('pv_name'=>'DESC');
    protected $_hot_filter = array();
    protected $_new_orderby = array('id'=>'DESC');
    protected $_new_filter = array();
    
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