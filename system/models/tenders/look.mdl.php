<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: look.mdl.php 4414 2014-04-08 08:36:05Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Tenders_Look extends Mdl_Table
{   
  
    protected $_table = 'tenders_look';
    protected $_pk = 'look_id';
    protected $_cols = 'look_id,tenders_id,company_id,create_ip,dateline,is_signed';
    protected $_orderby = array('look_id'=>'DESC');
    
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
    
    
    public function tongji($company_id = 0,$bg_time = null,$end_time = null,$city_id = 0){
        $local = array();
        if(!empty($company_id)){
            $company_id = (int)$company_id;
            $local[] = " company_id = {$company_id}";
        }
        if(!empty($bg_time)){
            $bg_time = (int)$bg_time;
            $local[] = " dateline >= {$bg_time}";
        }
        if(!empty($end_time)){
            $end_time = (int)$end_time;
            $local[] = " dateline <= {$end_time}";
        }
     
        $where  = '';
        if(!empty($local)){
            $where = " WHERE  ".join(' AND ',$local);
        }
        $where2 = '';
        if(!empty($city_id)){
            $city_id = (int)$city_id; 
            $where2 = " b.city_id = {$city_id} ";
        }
        
		$items = array();
        $sql = "SELECT a.num,b.company_id,b.name,b.logo FROM  (SELECT count(1) as num , company_id  FROM ".$this->table($this->_table)." {$where}  group by company_id)a join  ".$this->table('company')." b  ON a.company_id  = b.company_id    ";
       // echo $sql;die;
        if($rs = $this->db->query($sql)){
            while($row = $rs->fetch()){
                $row = $this->_format_row($row);
                $items[] = $row;
            }
        }
		
		return $items;
    }
    
}