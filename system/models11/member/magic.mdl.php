<?php
/**
 * Copy Right TTPET.COM
 * Each engineer has a duty to keep the code elegant
 * $Id verify.mdl.php shzhrui<anhuike@gmail.com>$
 */

Import::M('member/base');
class Mdl_Member_Magic extends Mdl_Member_Base
{
    
    public function verify_name($uids, $verify=true)
    {
        if(!$uids = K::M('verify/check')->ids($uids)){
            return false;
        }else if(!$member_list = K::M('member/view')->items_by_ids($uids)){
            return false;
        }
        $company_uids = $shop_uids = array();
        foreach($member_list as $v){
            if($v['from'] == 'shop'){
                $shop_uids[$v['uid']] = $v['uid'];
            }else if($v['from'] == 'company'){
                $company_uids[$v['uid']] = $v['uid'];
            }
        }
        $a = "(`verify`|".self::VERIFY_NAME.")";
        if(empty($verify)){
            $a = $a.'^'.self::VERIFY_NAME;
        }
        $sql = "UPDATE ".$this->table($this->_table)." SET `verify`=$a WHERE ".self::field($this->_pk, $uids);
        if($this->db->Execute($sql)){
            if($this->db->affected_rows()){
                $this->clear_cache($uid);
            }
            if($company_uids){
                K::M('company/company')->verify_name($company_uids, $verify);
            }
            if($shop_uids){
                K::M('shop/shop')->verify_name($shop_uids, $verify);
            }           
            return true;
        }
        return false;
    }
    
    public function verify_mobile($uid, $code, $verify=true){
        if(!$member = K::M('member/view')->member($uid)){
            $this->err->add('要验证用户不存在或已经删除',411);
        }else if($verify){
            if(!$member['mobile']){
                $this->err->add('该用户的手机号码不存在',411);
            }elseif($member['verify'] & self::VERIFY_MOBILE){
                $this->err->add('已经通过验证过了',411);
            }else{
                $session =K::M('system/session')->start();
                $scode =  $session->get('MOBILECODE');
                if($code == $scode){
                    $sql = "UPDATE ".$this->table($this->_table)." SET `verify`=`verify` | " .self::VERIFY_MOBILE." WHERE uid='$uid'";
                    if($this->db->Execute($sql)){
                        if($this->db->affected_rows()){
                            $this->clear_cache($uid);
                        }
                         $this->err->add('验证成功',411);
                        return true;
                    }else{
                        $this->err->add('更新数据失败',411);
                    }                    
                }else{
                     $this->err->add('验证码不正确',411);
                }
            }
        }else{
            $sql = "UPDATE ".$this->table($this->_table)." SET (`verify`=`verify` | " .self::VERIFY_MOBILE.")^".self::VERIFY_MOBILE." WHERE uid='$uid'";
            if($this->db->Execute($sql)){
                if($this->db->affected_rows()){
                    $this->clear_cache($uid);
                }
                 $this->err->add('验证成功',411);
                return true;
            }else{
                $this->err->add('更新数据失败',411);
            }
        }
        return false;
    }
    
    public function sendmsg($uid)
    {   
        if(!$member = K::M('member/view')->member($uid)){
            $this->err->add('要验证用户不存在或已经删除',411);
        }elseif(!$member['mobile']){
            $this->err->add('该用户的手机号码不存在',411);
        }elseif($member['verify'] & self::VERIFY_MOBILE){
            $this->err->add('已经通过验证过了',411);
        }else{
            $code = K::M('content/string')->Random(6, 1);
            $session =K::M('system/session')->start();
            $session->set('MOBILECODE',$code,1800); //30分钟有效
            K::M('sms/sms')->send($member['mobile'],'sms_mobile',array('code'=>$code));
           // echo $code;die;
        } 
    }

    public function verify_mail($uid, $token, $verify=true)
    {

        if(!$member = K::M('member/view')->member($uid)){
            $this->err->add('要验证用户不存在或已经删除',411);
        }else if($verify){
            if($member['verify'] & self::VERIFY_MAIL){
                $this->err->add('您已经验证过邮箱了,请勿重复验证',412);
            }else if(($hash = $this->_create_hash($uid, $member['mail'])) && !($token = explode(',',K::M('secure/crypt')->decode($token, $hash)))){
                $this->err->add('无效的验证链接',413);
            }else if($hash != $token[1]){
                $this->err->add('无效的验证链接',414);
            }else if($token[0] != $uid){
                $this->err->add('无效的验证链接',415);
            }else if((intval($token[2])+86400) < __CFG::TIME){
                $this->err->add('验证连接已经过期,有效性为24小时',415);
            }else{
                $sql = "UPDATE ".$this->table($this->_table)." SET `verify`=`verify` | " .self::VERIFY_MAIL." WHERE uid='$uid'";
                if($this->db->Execute($sql)){
                    if($this->db->affected_rows()){
                        $this->clear_cache($uid);
                    }
                    return true;
                }
            }
        }else{
            $sql = "UPDATE ".$this->table($this->_table)." SET (`verify`=`verify` | " .self::VERIFY_MAIL.")^.".self::VERIFY_MAIL." WHERE uid='$uid'";
            if($this->db->Execute($sql)){
                if($this->db->affected_rows()){
                    $this->clear_cache($uid);
                }
                return true;
            }            
        }
        return false;
    }

    public function create_token($uid, $mail)
    {
        $oCrypt = K::M('secure/crypt');
        $hash = $this->_create_hash($uid ,$mail);
        $time = microtime(true);
        return $oCrypt->encode("{$uid},{$hash},{$time}", $hash);
    }


    public function sendmail($uid)
    {
        if($member = K::M('member/view')->member($uid)){
            $token = $this->create_token($uid, $member['mail']);
            $site = K::$system->config->get('site');
            $title = "感谢您使用{$site[title]}，请完成邮箱验证";
            $verifyLink = $site['siteurl'].'/'.K::M('helper/link')->mklink('passport:verfiy', "mail-{$member['uid']}-{$token}");
            return K::M('helper/mail')->sendmail($member['mail'],$title,'email_rz', array('link'=>$verifyLink,'uname'=>$member['uname']));
            $objctl = K::$system->ctl;
        }
        return false;
    }
    
    //通知用户邮件通知接口
    public function email_tongzhi($uid = 0,$key = null,$data = array()){
        
        if(empty($uid)) return false; 
        
        if(!$member = K::M('member/view')->member($uid)) return false;
        
        if($member['verify'] & self::VERIFY_MAIL) { //通过了邮件认证的才能接受到通知邮件
            $site = K::$system->config->get('site');
            $title = "{$site['title']}邮件通知";
            return K::M('helper/mail')->sendmail($member['mail'],$title,$key,$data);
        }
        return false;
    }


    public function verify_forgot($uid, $token)
    {
        if(!$member = K::M('member/view')->member($uid)){
            $this->err->add('要验证用户不存在或已经删除',411);
        }else if(($hash = $this->_create_hash($uid, $member['mail'])) && !($token = explode(',', K::M('secure/crypt')->decode($token, $hash)))){
            $this->err->add('无效的找回密码链接',413);
        }else if($token[0] != $uid){
            $this->err->add('无效的找回密码链接',415);
        }else if((intval($token[2])+86400) < __CFG::TIME){
            $this->err->add('找回密码连接已经过期,有效性为24小时',415);
        }else if($this->_create_hash($uid, $member['mail']) == $token[1]){
            return $member;
        }
        return false;
    }

    public function send_forgot($mail)
    {
        if(!K::M('verify/check')->mail($mail)){
            $this->err->add('邮箱格式不正确',411);
        }else if(!$member = K::M('member/view')->member($mail, 'mail')){
            $this->err->add('该邮箱不存在',411);
        }else{
            $token = $this->create_token($member['uid'], $mail);
            $site = K::$system->config->get('site');            
            $title = $site['title'].'找回密码邮件';
            $verifyLink = $site['siteurl'] . '/'.K::M('helper/link')->mklink('passport:forgot', "reset-{$member['uid']}-{$token}", '', null, true);
            return K::M('helper/mail')->sendmail($mail,$title,'email_password',array('link'=>$verifyLink,'uname'=>$member['uname']));       
        }
        return false;
    }


    protected function _create_hash($uid, $mail)
    {
        return strtoupper(md5($uid.__CFG::SECRET_KEY.$mail));
    }
}