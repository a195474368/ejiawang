<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: banner.mdl.php 2034 2013-12-07 03:08:33Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Company_Banner extends Mdl_Table
{   
  
    protected $_table = 'company_banner';
    protected $_pk = 'banner_id';
    protected $_cols = 'banner_id,company_id,title,pic,link,orderby';
    
    public function get_count_by_company_id($company_id){
        $company_id = (int)$company_id;
        $where = " company_id = {$company_id} ";
        return $this->count($where);
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
}