<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: designer.mdl.php 3836 2014-03-14 01:36:12Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Designer_Designer extends Mdl_Table
{   
  
    protected $_table = 'designer';
    protected $_pk = 'uid';
    protected $_cols = 'uid,company_id,city_id,area_id,school,qq,case_num,about,audit,orderby,closed';
    protected $_orderby = array('orderby'=>'ASC', 'uid'=>'DESC');

    public function create($data, $account=null, $checked=false)
    {

        if(!$checked && !$data = $this->_check_schema($data)){
            return false;
        }else if($uid = $data['uid']){
            $this->db->insert($this->_table, $data);
            return $uid;
        }else if($account){
            $account['from'] = 'designer';
            if($uid = K::M('member/account')->create($account)){
                $this->update($uid, $data, true);
                return $uid;
            }
        }
        return false;   
    }

    public function update($uid, $data, $checked=false)
    {
        $this->_checkpk();
        if(!$checked && !$data = $this->_check_schema($data,  $uid)){
            return false;
        }
        return $this->db->update($this->_table, $data, $this->field($this->_pk, $uid));
    }
    
    
    public function items_by_attr($filter=array(), $orderby=null, $p=1, $l=20, &$count=0)
    {
        if($attrs = $filter['attrs']){
            $attr_ids = join(',',$attrs);
            $attr_count = array_sum($attrs);
            $attr_sql = "SELECT uid FROM ".$this->table('designer_attr')." WHERE attr_value_id IN($attr_ids) GROUP BY uid HAVING SUM(attr_value_id)=$attr_count";
        }
      
        unset($filter['attrs']);
        $where = $this->where($filter);
        if($attr_sql){
            $where .= " AND uid IN($attr_sql)";
        }
        $orderby = $this->order($orderby, null);
        $limit = $this->limit($p, $l);
        $items = array();
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM ".$this->table($this->_table)."  WHERE $where $orderby $limit";
        if($rs = $this->db->query($sql)){
            while($row = $rs->fetch()){
                $row = $this->_format_row($row);
                if($this->_pk){
                    $items[$row[$this->_pk]] = $row;
                }else{
                    $items[] = $row;
                }
            }
            $count = $this->db->GetOne("SELECT FOUND_ROWS()");
        }
        return $items;
    }
    
    public function items($filter=array(), $orderby=null, $p=1, $l=50, &$count=0)
    {
        $member_filter = array();
        foreach($filter as $k=>$v){
          
            if(substr($k, 0, 7) == 'member.'){
                $member_filter[substr($k, 7)] = $v;
                unset($filter[$k]);
            }
        }

        $where = $this->where($filter,'d.');
        if($member_filter){
            $member_where = K::M('member/view')->where($member_filter, 'm.');
            if(!empty($where)){
                $where .= " AND {$member_where}";
            }else{
                $where = $member_where;
            }
            $count_sql = "SELECT COUNT(1) FROM ".$this->table($this->_table)." d LEFT JOIN ".$this->table('member')." m ON m.uid=d.uid WHERE $where";
        }else{
            $count_sql = "SELECT COUNT(1) FROM ".$this->table($this->_table)." d WHERE $where";
        }
    
        $orderby = $orderby ? $orderby : $this->_orderby;  
        $orderby = $this->order($orderby, null, 'd.');
        $limit = $this->limit($p, $l);
        $items = array();
        if($count = $this->db->GetOne($count_sql)){
            $sql = "SELECT m.*,d.* FROM ".$this->table($this->_table)." d LEFT JOIN ".$this->table('member')." m ON m.uid=d.uid WHERE $where $orderby $limit";
            if($rs = $this->db->Execute($sql)){
                while($row = $rs->fetch()){
                    $row = $this->_format_row($row);
                     $items[$row[$this->_pk]] = $row;
                }
            }
        }
        return $items;        
    }

    public function detail($uid, $closed=false)
    {
        if(!$uid = (int)$uid){
            return false;
        }
        $where = "d.uid='$uid'";
        if($closed){
            $where .= " AND d.closed='0'";
        }        
        $sql = "SELECT m.*,d.* FROM ".$this->table($this->_table)." d LEFT JOIN ".$this->table('member')." m ON m.uid=d.uid WHERE $where";
        if($row = $this->db->GetRow($sql)){
            $row = $this->_format_row($row);
        }
        return $row;
    }

    public function items_by_ids($uids)
    {
        $filter['uid'] = $uids;
        return $this->items($uids, null, 1, 500);
    }
    
    public function get_count_by_company_id($company_id){
        $company_id = (int)$company_id;
        return $this->count(" company_id = {$company_id} ");
    }
    
    protected function _format_row($row)
    {
        $row = K::M('member/view')->format_row($row);
        if(empty($row['realname'])) $row['realname'] = $row['uname'];
        return $row;        
    }
    
    public function format_items_ext($items)
	{
        foreach($items  as $k=>$v){
            if(empty($v['realname'])) $items[$k]['realname'] = $v['uname'];
        }
		return $items;
	}

    
}