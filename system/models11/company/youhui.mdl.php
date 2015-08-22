<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: youhui.mdl.php 2267 2013-12-17 08:13:00Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Company_Youhui extends Mdl_Table
{   
  
    protected $_table = 'company_youhui';
    protected $_pk = 'youhui_id';
    protected $_cols = 'youhui_id,city_id,area_id,company_id,title,bg_date,end_date,face_pic,content,dateline,create_ip,audit,sign_num';
    protected $_orderby = array('youhui_id'=>'DESC');

    protected $_hot_orderby = array('sign_num'=>'DESC','youhui_id'=>'DESC');
    protected $_hot_filter = array('audit'=>'1');
    protected $_new_orderby = array('company_id'=>'DESC');
    protected $_new_filter = array('audit'=>'1');
    
    public function create($data, $checked=false)
    {
        if(!$checked && !$data = $this->_check_schema($data)){
            return false;
        }
        return $this->db->insert($this->_table, $data, true);
    }
    
    public function get_last_by_company_id($company_id){
        $company_id = (int)$company_id;
        
		$where =" company_id = {$company_id} AND audit = 1 ";
		
		$sql = "SELECT * FROM ".$this->table($this->_table)." WHERE $where order by youhui_id desc limit 1 ";
		if($detail = $this->db->GetRow($sql)){
			$detail = $this->_format_row($detail);
		}
        return $detail;
    }
    
    
    
    public function update($pk, $data, $checked=false)
    {
        $this->_checkpk();
        if(!$checked && !$data = $this->_check_schema($data,  $pk)){
            return false;
        }
        return $this->db->update($this->_table, $data, $this->field($this->_pk, $pk));
    }

    public function items_by_new($filter=array(), $limit=20)
    {
        $date = date('Y-m-d', __CFG::TIME);
        $filter['end_date'] = ">:$date";
        return parent::items_by_new($filter, $limit);
    }

    public function items_by_hot($filter=array(), $limit=20)
    {
        $date = date('Y-m-d', __CFG::TIME);
        $filter['bg_date'] = "<:$date";
        $filter['end_date'] = ">:$date";
        return parent::items_by_hot($filter, $limit);
    }

    protected function _format_row($row)
    {
        if(strtotime($row['bg_date']) > __CFG::TIME){
            $row['status'] = 'wait';
            $row['last_date'] = ceil((strtotime($row['end_date'])+86399 - __CFG::TIME)/86400);
        }else if((strtotime($row['end_date'])+86400) < __CFG::TIME){
            $row['status'] = 'finish';
        }else{
            $row['status'] = 'process';
            $row['last_date'] = ceil((strtotime($row['end_date'])+86399 - __CFG::TIME)/86400);
        }
        return $row;
    }
}