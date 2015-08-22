<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: handler.mdl.php 4187 2014-03-26 09:04:27Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

Import::M('member/base');
class Mdl_member_Handler extends Mdl_member_Base
{   
    
    public function create($data, $checked=false)
    {
        if(!$checked && !($data = $this->_check($data))){
            return false;
        }
        $data['regip'] == $data['regip'] ? $data['regip'] : __IP;
        $data['dateline'] = __CFG::TIME;
        if($uid = $this->db->insert($this->_table, $data, true)){
            $this->db->Execute("INSERT INTO ".$this->table('member_fields')."(uid) VALUES('$uid')");
        }
        return $uid;
    }

    public function update($pk, $data, $checked=false)
    {
        unset($data['uname']);
        if(!$checked && !($data = $this->_check($data,  $pk))){
            return false;
        }
        return $this->db->update($this->_table, $data, $this->field($this->_pk, $pk));
    }

    public function delete($val, $force=false)
    {
        $ret = false;
        if(!empty($val)) {
            $this->_checkpk();
            if(is_array($val)){
                $val = implode(',', $val);
            }
            if(!K::M('verify/check')->ids($val)){
                return false;
            }
            $val = explode(',', $val);
            if(!$force){
                $ret = $this->db->update($this->_table, array('closed'=>3), self::field($this->_pk, $val));
            }else{
                $sql = "DELETE FROM ".$this->table($this->_table)." WHERE " . self::field($this->_pk, $val);
                $ret = $this->db->Execute($sql);                
            }
            $this->clear_cache($val);
        }
        return $ret;
    }

    public function regain($val)
    {
        $ret = false;
        if(!empty($val)) {
            if(is_array($val)){
                $val = implode(',', $val);
            }
            if(!K::M('verify/check')->ids($val)){
                return false;
            }
            $val = explode(',', $val);
            $ret = $this->db->update($this->_table, array('closed'=>0), self::field($this->_pk, $val));
            $this->clear_cache($val);
        }
        return $ret;        
    }

    protected function _check($data, $uid=null)
    {
        unset($data['uid'], $data['gold'], $data['regip'], $data['dateline']);
        if($uid = (int)$uid){
            if($member = K::M('member/view')->detail($uid)){
                if(isset($data['uname']) && $data['uname'] == $member['uname']){
                    unset($data['uname']);
                }
                if(isset($data['mail']) && $data['mail'] == $member['mail']){
                    unset($data['mail']);
                }
            }
        }
        if(empty($uid) && isset($data['from'])){
            if(!$this->_from_list[$data['from']]){
                $data['from'] = 'member';
            }
        }
        if(empty($uid) || isset($data['uname'])){
            if(!$uname = K::M('member/account')->check_uname($data['uname'])){
                return false;
            }
        }
        if(empty($uid) || isset($data['mail'])){
            if(!$uname = K::M('member/account')->check_mail($data['mail'])){
                return false;
            }
        }
        if(empty($uid) || isset($data['passwd'])){
            if(!preg_match('/[0-9a-f]{32}/i', $data['passwd'])){
                if(!$passwd = K::M('member/account')->check_passwd($data['passwd'])){
                    return false;
                }
                $data['passwd'] = md5($passwd);
            }
        }        
        if($data['mobile']){
            if(!K::M('verify/check')->mobile($data['mobile'])){
                $this->err->add('很抱歉，手机格式不正确!', 454);
                return false;
            }
        }
        if(isset($data['uc_uid'])){
            $data['uc_uid'] = (int)$data['uc_uid'];
        }
        if(isset($data['gender'])){
            $data['gender'] = strtolower($data['gender']) == 'man' ? 'man' : 'woman';
        }
        if(isset($data['verify_mail']) || isset($data['verify_mobile']) || isset($data['verify_name'])){
            $verify = 0;
            if($uid && empty($member)){
                if($member = K::M('member/view')->detail($uid)){
                    $verify = $member['verify'];
                }
            }
            if(isset($data['verify_mail'])){
                $verify = $data['verify_mail'] ? ($verify | self::VERIFY_MAIL) : (($verify | self::VERIFY_MAIL) ^ self::VERIFY_MAIL);
            }
            if(isset($data['verify_mobile'])){
                $verify = $data['verify_mobile'] ? ($verify | self::VERIFY_MOBILE) : (($verify | self::VERIFY_MOBILE) ^ self::VERIFY_MOBILE);
            }
            if(isset($data['verify_name'])){
                $verify = $data['verify_name'] ? ($verify | self::VERIFY_NAME) : (($verify | self::VERIFY_NAME) ^ self::VERIFY_NAME);
            }
            $data['verify'] = $verify;
        }
        return parent::_check($data);
    }
}