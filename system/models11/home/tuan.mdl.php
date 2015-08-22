<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: tuan.mdl.php 3053 2014-01-15 02:00:13Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Home_Tuan extends Mdl_Table
{   
    protected $_orderby = array('tuan_id'=>'DESC');
    protected $_table = 'home_tuan';
    protected $_pk = 'tuan_id';
    protected $_cols = 'tuan_id,details,title,city_id,area_id,home_id,company_id,jieyue,sign_num,qy_num,sg_num,end_time,audit,dateline';

    
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
    
    public function detail_by_home_id($home_id){
       
        $home_id = (int) $home_id;
        $today = date('Y-m-d',__TIME);
		$sql = "SELECT * FROM ".$this->table($this->_table)." WHERE   home_id = '{$home_id}' AND audit=1 AND end_time > '{$today}' ";

		if($detail = $this->db->GetRow($sql)){
			$detail = $this->_format_row($detail);
		}
		return $detail;
       
    }
    
}