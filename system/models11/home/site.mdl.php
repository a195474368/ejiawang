<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: site.mdl.php 2196 2013-12-14 11:19:20Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Home_Site extends Mdl_Table
{   
  
    protected $_table = 'home_site';
    protected $_pk = 'site_id';
    protected $_cols = 'site_id,city_id,area_id,home_id,title,company_id,face_pic,addr,status,audit,intro,dateline,create_ip';

    protected $_orderby = array('site_id'=>'DESC');

    
    protected $_status = array(1=>'开工大吉',2=>'水电改造',3=>'泥瓦工阶段',4=>'木工阶段',5=>'油漆阶段',6=>'安装',7=>'验收完成');
    
    public function get_status(){
        
        return $this->_status;
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

    protected function _format_row($row)
    {
        $row['status_title'] = $this->_status[$row['status']];
        return $row;
    }
}