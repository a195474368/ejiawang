<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: sign.mdl.php 2034 2013-12-07 03:08:33Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Activity_Sign extends Mdl_Table
{   
  
    protected $_table = 'activity_sign';
    protected $_pk = 'id';
    protected $_cols = 'id,activity_id,uid,name,addr,tel,email,qq,num,ip,dateline';

    
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
    
    public function items_by_activity_id($activityId,$num=2000)
    {
       $filter['activity_id'] = (int)$activityId;
        
       if($items = $this->items($filter,null,1,$num)){
           foreach($items as $k=>$v){
               $items[$k]['ip'] = $v['ip'].'('. K::M("misc/location")->location($v['ip']) .')';
               $items[$k]['dateline'] = date('Y-m-d H:i:s',$v['dateline']) ;            
           }         
       }
       return $items;
    }
}