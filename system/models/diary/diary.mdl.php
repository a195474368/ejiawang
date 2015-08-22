<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: diary.mdl.php 2726 2014-01-03 10:11:58Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Diary_Diary extends Mdl_Table
{   
  
    protected $_table = 'diary';
    protected $_pk = 'diary_id';
    protected $_cols = 'diary_id,uid,title,home_id,city_id,face_pic,company_id,type_id,way_id,total_price,start_date,end_date,content_num,pv_num,ping_num,status,create_ip,dateline,audit';
    
    protected $_orderby = array('diary_id'=>'desc');
    
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