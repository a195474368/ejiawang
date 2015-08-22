<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: company.mdl.php 2633 2013-12-30 08:17:25Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Company_Company extends Mdl_Table
{   
  
    protected $_table = 'company';
    protected $_pk = 'company_id';
    protected $_cols = 'company_id,uid,city_id,views,answer_num,verify_name,is_vip,qq,case_time,site_time,site_num,mobile,area_id,name,sort_name,slogan,logo,square_logo,contact,tel,addr,security,scores,score1,score2,score3,score4,score5,score_num,audit,orderby,lng,lat,closed,case_num,tenders_num';
    protected $_orderby = array('orderby'=>'ASC','company_id'=>'DESC');

    protected $_hot_orderby = array('scores'=>'DESC','orderby'=>'ASC');
    protected $_hot_filter = array('audit'=>'1', 'closed'=>'0');
    protected $_new_orderby = array('company_id'=>'DESC');
    protected $_new_filter = array('audit'=>'1', 'closed'=>'0');

    public function detail($company_id, $closed=false)
    {
        if(!$company_id = (int)$company_id){
            return false;
        }
        $where = "c.company_id='$company_id'";
        if($closed){
            $where .= " AND closed='0'";
        }
        $sql = "SELECT ex.*,c.* FROM ".$this->table($this->_table)." c LEFT JOIN ".$this->table('company_ex')." ex ON c.company_id=ex.company_id WHERE $where";
        if($detail = $this->db->GetRow($sql)){
            $detail = $this->_format_row($detail);
        }
        return $detail;
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

    /**
     * 根据用户UID取装修公司
     */
    public function company_by_uid($uid, $closed=false)
    {
        if(!$uid = (int)$uid){
            return false;
        }else if($closed){
            $where = " c.uid='$uid' AND c.closed=0";
        }else{
            $where = "c.uid='$uid'";
        }
        $sql = "SELECT ex.*,c.* FROM ".$this->table($this->_table)." c LEFT JOIN ".$this->table('company_ex')." ex ON c.company_id=ex.company_id WHERE $where";
        if($row = $this->db->GetRow($sql)){
            $row = $this->_format_row($row);
        }
        return $row;
    }

    public function verify_name($uids, $verify=true)
    {
        if(!$uids = K::M('verify/check')->ids($uids)){
            return false;
        }
        $verify = $verify ? 1 : 0;
        return $this->db->update($this->_table, array('verify_name'=>$verify), "uid IN($uids)");
    }    

    protected function _check($data, $company_id=null)
    {
        if($uid = (int)$data['uid']){
            if($member = K::M('member/view')->detail($uid)){
                if($member['from'] != 'company'){
                    $this->err->add("所属会员必须为装修公司类型", 451);
                    return false;
                }else if($company = $this->company_by_uid($uid)){
                    if(empty($company_id)){
                        $this->err->add("该用户已经隶属于:{$company['name']}(ID:{$company['company_id']})，不能重复关联", 452);
                        return false;
                    }else if($company_id != $company['company_id']){
                        $this->err->add("该用户已经隶属于:{$company['name']}(ID:{$company['company_id']})，不能重复关联", 453);
                        return false;
                    }
                }
            }else{
                $data['uid'] = 0;
            }
        }
        return parent::_check($data, $company_id);
    }

    public function format_items_ext($items)
    {
        if(empty($items)){
            return false;
        }
        $uids = $company_ids = array();
        foreach((array)$items as $k=>$v){
            if($v['uid']){
                $uids[$v['uid']] = $v['uid'];
            }
            $company_ids[$v['company_id']] = $v['company_id'];
        }
        if($uids){
            $member_list = K::M('member/view')->items_by_ids($uids);
        }
        foreach((array)$items as $k=>$v){
            $member = array();
            if(!$member = $member_list[$v['uid']]){
                $member = array();
            }
            $v['ext'] = array('member'=>$member);
            $items[$k] = $v;            
        }
        return $items;
    }
}