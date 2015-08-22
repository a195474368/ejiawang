<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author shzhrui<anhuike@gmail.com>
 * $Id: auth.mdl.php 3959 2014-03-18 11:34:29Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Member_Auth extends Model
{   
    public $uid = 0;
    public $uname = '';
    public $member = array();
    
    public function token()
    {
        if($token = $this->cookie->get('TOKEN')){
            if($this->_check_token($token)){
                $a = array('TOKEN'=>$token,'AGENT'=>$_SERVER['HTTP_USER_AGENT']);
                K::$system->OTOKEN = K::M('secure/crypt')->arrhex($a);
                return true;
            }
            $this->cookie->delete('TOKEN');
        }
        $this->member = K::M('member/view')->guest();
        return false;
    }

    /**
     * 用户登录
     * @param   $u  用户名/邮箱
     * @param   $p  密码{明文密码}
     */
    public function login($u, $p, $l='uname', $ismd5=false, $keep=false)
    {
        $passwd =$ismd5 ? $p : md5($p);
        if(defined('UC_OPEN') && UC_OPEN){
            $isuid = ($l == 'uid' ? 1 : (($l == 'mail' || $l == 'email') ? 2 : 3));
            $uc = K::M('member/ucenter')->login($u, $passwd, $isuid);
            if($uc['uid'] > 0){
                if(!$m = K::M('member/view')->member($uc['uname'], 'uname')){
                    $uc['uc_uid'] = $uc['uid'];
                    $max_uid = K::M('member/view')->max_uid();
                    if($max_uid >= $m['uid']){
                        $uc['uid'] = $max_uid + 1;
                    }
                    $m = $uc;
                    K::M('member/handler')->create($uc, true);
                }else if(($uc['passwd'] != $m['passwd']) || ($m['uc_uid'] != $uc['uid'])){
                    $m['passwd'] = $uc['passwd'];
                    $m['uc_uid'] = $uc['uid'];
                    K::M('member/handler')->update($uid, array('passwd'=>$uc['passwd'], 'uc_uid'=>$uc['uid']), true);
                }
                $this->uid = $m['uid'];
                $this->uname = $m['uname'];
                $this->member = $m;
                $token = $this->create_token($this->uid, $passwd);
                $this->cookie->set('TOKEN', $token, 0);
                $this->cookie->set('UNAME', $this->uname, NULL);
                return $m;          
            }else if($uc['uid'] < 1){
                $this->err->add('登录名或密码不正确!!', 121);
                return false;
            }
        }
        if(!$m = K::M('member/view')->member($u, $l)){
            $this->err->add('登录名或密码不正确!!',111);
        }else if($m['passwd'] != $passwd){
            $this->err->add('登录名或密码不正确!!',112);
        }else if($m['closed'] == 3){
            $this->err->add('很抱歉,访用户已经删除!!',112);
        }else if($m['closed'] == 2){
            $this->err->add('很抱歉,该用户已锁定不能登录',113);
        }else{
            if(defined('UC_OPEN') && UC_OPEN){
                if($uc_uid = K::M('member/ucenter')->create($m['uname'], $p, $m['mail'])){
                    K::M('member/handler')->update($m['uid'], array('uc_uid'=>$uc_uid));
                }
            }
            $this->uid = $m['uid'];
            $this->uname = $m['uname'];
            $this->member = $m;
            $expire = $keep ? 2592000 : 0;
            $token = $this->create_token($this->uid, $passwd);
            $this->cookie->set('TOKEN', $token, $expire);
            $this->cookie->set('UNAME', $this->uname, NULL);
            return $m;
        }
        return false;       
    }

    public function loginout()
    {
        $this->cookie->delete('TOKEN');
        return true;            
    }
    
    public function manager($uid){
        $uid = (int)$uid;
        if(!$member = K::M('member/view')->detail($uid)){
           return false;
        }else{
            $token = $this->create_token($uid, $member['passwd']);
            $this->cookie->set('TOKEN', $token, 0);
            $this->cookie->set('UNAME', $member['uname'], NULL);
            return true;
        }
    }
    
    //生成TOKEN
    public function create_token($uid, $pwd)
    {
        $s = strtoupper(md5($_SERVER['HTTP_USER_AGENT'].$uid.md5(__CFG::SECRET_KEY.$pwd.__IP,true)));
        $token = "{$uid}-KT{$s}";
        return $token;
    }

    public function update_passwd($pwd, $ismd5=true)
    {
        $pwd = trim($pwd);
        if(!$this->uid){
             $this->err->add("你没有权限修改密码",401);
        }else if($ismd5 && !preg_match("/^[0-9a-f]{32}$/i", $pwd)){
            $this->err->add("密码的格式不正确",402);
        }else if(!$ismd5 && !preg_match('/^[\x20-\x7E]{6,16}$/',$pwd)){
            $this->err->add("密码的格式不正确",403);
        }else if(K::M('member/account')->update_passwd($this->uid, $pwd)){
            $this->passwd = md5($pwd);
            $cookie = self::$system->cookie;
            $expire = $cookie->get('TOKEN-KEEP') ? NULL : 86400;
            $token = $this->create_token($this->uid, $this->passwd);
            $cookie->set('TOKEN', $token, $expire);  
            return true;          
        }
        return false;
    }

    public function update_mail($mail)
    {
        if($mail == $this->member['mail']){
            return true;
        }
        return K::M('member/account')->update_mail($this->uid, $mail);
    }

    protected function _check_token($token)
    {
        $a = explode('-',$token);
        if(!$uid = intval($a[0])){
            return false;
        }
        if(!$m = K::M('member/view')->member($uid)){
            return false;
        }else if($this->create_token($m['uid'],$m['passwd']) != $token){
            return false;
        }else if(!in_array($m['closed'],array(0,1))){
            return false;
        }
        $this->uid = $m['uid'];
        $this->uname = $m['uname'];
        $this->member = $m;
        return true;    
    }
}