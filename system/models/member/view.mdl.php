<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: view.mdl.php 3909 2014-03-17 03:08:57Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

Import::M('member/base');
class Mdl_member_View extends Mdl_member_Base
{   
  
    
    public function member($u, $l='uid')
    {
    	$l = strtolower($l);
    	switch($l){
    		case 'uid':
    			$field = 'uid'; break;
    		case 'name' : case 'uname':
    			$field = 'uname'; break;
    		case 'mail': case 'email':
    			$field = 'mail'; break;
            case 'mobile':
                $field = 'mobile';
    		default:
    			return false;
    	}
    	$sql = "SELECT * FROM ".$this->table($this->_table)." WHERE ".$this->field($field, $u);
    	if($row = $this->db->GetRow($sql)){
            $row = $this->_format_row($row);
        }
        return $row;
    }

    public function detail($uid, $closed=fasle)
    {
    	if(!$uid = (int)$uid){
    		return false;
    	}
        $where = $closed ? " AND m.closed !=3 " : "";
    	$sql = "SELECT f.*,m.* FROM ".$this->table($this->_table)." m LEFT JOIN ".$this->table('member_fields')." f ON m.uid=f.uid WHERE m.uid='$uid' $where";
    	if($row = $this->db->GetRow($sql)){
            $row = $this->_format_row($row);
        }
        return $row;
    }

    public function max_uid()
    {
        $sql = "SELECT MAX(uid) FROM ".$this->table($this->_table);
        return $this->db->GetOne($sql);
    }

    public function member_by_uc($uid)
    {
        if(!$uid = (int)$uid){
            return false;
        }
        $sql = "SELECT * FROM ".$this->table($this->_table)." WHERE uc_uid='$uid'";
        return $this->db->GetRow($sql);
    }

    protected function _format_row($row)
    {
        static $gender = array('man'=>'男','woman'=>'女');
        $row['format_regdate'] = date("Y-m-d",$row['regdate']);          
        $row['format_gender'] = $gender[$row['gender']] ? $gender[$row['gender']] : '保密';
        $row['face'] = !empty($row['face']) ? $row['face'] : 'face/face.jpg';
        $row['face_80'] = !empty($row['face_80']) ? $row['face_80'] : 'face/face_80.jpg';
        $row['face_32'] = !empty($row['face_32']) ? $row['face_32'] : 'face/face_32.jpg';
        $row['realname'] = empty($row['realname']) ? $row['uname'] : $row['realname'];
        $row['verify_mail'] = $row['verify'] & self::VERIFY_MAIL ? true :false;
        $row['verify_mobile'] = $row['verify'] & self::VERIFY_MOBILE ? true :false;
        $row['verify_name'] = $row['verify'] & self::VERIFY_NAME ? true :false;
        if($row['verify_name']){
            if($row['from'] == 'member' || $row['from'] == 'designer' ||  $row['from'] == 'mechanic'){
                $row['uname_v'] = $row['uname'].'<i class="rz_v_hy"></i>';
            }else{
                $row['uname_v'] = $row['uname'].'<i class="rz_v_qy"></i>';
            }
        }else{
            $row['uname_v'] = $row['uname'];
        }
        $row['from_title'] = $this->_from_list[$row['from']];
        return $row;
    }

    /**
     * 外部连表查询的时候用
     */
    public function format_row($row)
    {
        return $this->_format_row($row);
    }  

    public function guest()
    {
        static $guest = array('uid'=>0, 'uname'=>'');
        return $this->_format_row($guest);
    }
}