<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: news.mdl.php 2727 2014-01-03 10:15:18Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Company_News extends Mdl_Table
{   
  
    protected $_table = 'company_news';
    protected $_pk = 'news_id';
    protected $_cols = 'news_id,company_id,title,content,dateline,create_ip,audit';

    protected $_orderby = array('news_id'=>'DESC');
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
    
    public function get_count_by_company_id($company_id){
        $company_id = (int)$company_id;
        return $this->count(" company_id = {$company_id} ");
    }    
}