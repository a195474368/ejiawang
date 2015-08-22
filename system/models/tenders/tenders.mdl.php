<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: tenders.mdl.php 3158 2014-01-21 15:30:47Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Tenders_Tenders extends Mdl_Table
{   
  
    protected $_table = 'tenders';
    protected $_pk = 'id';
    protected $_cols = 'id,title,city_id,area_id,type_id,style_id,budget_id,service_id,house_type_id,way_id,uid,name,mobile,home_id,home_name,addr,demand,feedback,start_time,area,gold,num,num2,pv_num,status,sign_company_id,sign_time,audit,create_ip,dateline,area_space0,area_space1,area_space2,area_space3,area_space4,area_space5,area_level,house_type,area_name,city_name,zhuantai,zhonglei,';
    protected $_orderby = array('id'=>'DESC');
    protected $_hot_orderby = array('sign_time'=>'DESC');
    protected $_hot_filter = array('audit'=>1, 'status'=>1);
    protected $_new_orderby = array('id'=>'DESC');
    protected $_new_filter = array('audit'=>1);
    
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

    public function update_sign($tenders_id, $company_id)
    {
        if(!($tenders_id = (int)$tenders_id) || !($company_id = (int)$company_id)){
            return false;
        }
        return $this->update($tenders_id, array('status'=>1,'sign_company_id'=>$company_id, 'sign_time'=>__CFG::TIME), true);
    }

    public function format_items_ext($items)
    {
        
        if(empty($items)){
            return false;
        }
        $home_ids = $company_ids = array();
        foreach((array)$items as $k=>$v){
            $home_ids[$v['home_id']] = $v['home_id'];
            $company_ids[$v['sign_company_id']] = $v['sign_company_id'];
        }
        $company_list = $tenders_list = array();
        if($home_ids){
            $home_list = K::M('home/main')->items_by_ids($home_ids);
        }
        if($company_ids){
            $company_list = K::M('company/company')->items_by_ids($company_ids);
        }        
       
        foreach((array)$items as $k=>$v){
            if(!$company = $company_list[$v['sign_company_id']]){
                $company = array();
            }
            if(!$home = $home_list[$v['home_id']]){
                $tenders = array();
            }
            $v['ext'] = array('company'=>$company, 'home'=>$home);
            $items[$k] = $v;
        }
        return $items;
    }    

    protected function _format_row($row)
    {
        static $tenders_attrs = null;
        if($tenders_attrs === null){
            $tenders_attrs = K::M('tenders/setting')->fetch_all();
        }
        if($types = K::M('tenders/setting')->get_type()){
            foreach($types as $k=>$v){
                if($type = $tenders_attrs[$row[$k.'_id']]){
                    $row[$k.'_title'] = $type['name'];
                }                
            }
        }
        return $row;                           
    }
}