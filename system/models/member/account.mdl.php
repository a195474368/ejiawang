<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: account.mdl.php 3909 2014-03-17 03:08:57Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Member_Account extends Model
{   

    public function create($data)
    {
        if(!$uname = $this->check_uname($data['uname'])){
            return false;
        }else if(!$mail = $this->check_mail($data['mail'])){
            return false;
        }else if(!$passwd = $this->check_passwd($data['passwd'])){
            return false;
        }
        $gender = strtolower($data['gender']) == 'man' ? 'man' : 'woman';
        $a = array('uname'=>$uname, 'mail'=>$mail, 'passwd'=>md5($passwd), 'gender'=>$gender);    
        $a['from'] = in_array($data['from'], array('member', 'designer', 'company', 'shop','mechanic')) ? $data['from'] : 'member';
        if($data['city_id']){
            $a['city_id'] = intval($data['city_id']);
        }else{
            $site = K::$system->config->get('site');
            $a['city_id'] = (int)$site['city_id'];
        }
        if(defined('UC_OPEN') && UC_OPEN){
            if($uid = K::M('member/ucenter')->create($uname, $passwd, $mail)){
                $maxuid = K::M('member/view')->max_uid();
                $a['uc_uid'] = $uid;
                if($uid > $maxuid){
                    $a['uid'] = $uid;
                }
            }
        }
    	if(!$uid = K::M('member/handler')->create($a, true)){
    		return false;
    	}
        //初始设计师表
        if($a['from'] == 'designer'){
            K::M('designer/designer')->create(array('uid'=>$uid), null, true);
        }
        if(!defined('IN_ADMIN')){
    	   K::$system->auth->login($uname, $passwd, 'uname');
        }
        return $uid;
    }

    public function check_uname($uname)
    {
		$uname = K::M('content/html')->encode($uname);
		if(!preg_match('/^[\x{4e00}-\x{9fa5}\w\-]{2,16}$/u', $uname) || strlen($uname)>24 || strlen($uname)<3){
			$this->err->add('用户名只包含(数字,大小写字母,下划线,中文)长度2~16字符',401);
		}else if(!defined('IN_ADMIN') && $this->_check_retain_uname($uname)){
			$this->err->add('系统保留用户名，请重新填写',401);
		}else if(K::M('member/view')->member($uname,'uname')){
            $this->err->add('此用户名太受欢迎，已有人抢注啦',401);
		}else if(defined('UC_OPEN') && UC_OPEN){
            return K::M('member/ucenter')->check_uname($uname);
        }else{
			return $uname;
		}
		return false;
    }

    public function _check_retain_uname($uname)
    {
    	return false;
    }

    public function check_shop_title($title)
    {
		$title = K::M('content/html')->encode($title);
        if(!preg_match('/^[\x{4e00}-\x{9fa5}\w\-]{2,80}$/u', $title) || strlen($title)>80 || strlen($title)<2){
            $this->err->add('用户名只包含(数字,大小写字母,下划线,中文)长度2~80字符'.$title,411);
            return false;
        }
        return $title;
    }

    public function check_mail($mail)
    {
    	if(!K::M('verify/check')->mail($mail)){
    		$this->err->add('邮箱格式不正确', 511);
            return false;
    	}else if($member = K::M('member/view')->member($mail, 'mail')){
    		$this->err->add('此邮箱已被占用', 512);
            return false;
    	}else if(defined('UC_OPEN') && UC_OPEN){
            return K::M('member/ucenter')->check_mail($mail);
        }
    	return $mail;
    }

    public function check_passwd($passwd)
    {
       if(!preg_match('/^[\x21-\x7E]{6,15}$/', $passwd)){
            $this->err->add('用户密码只包含(数字,大小写字母,特殊符号,不含空格)长度6~15字符', 401);
            return false;
        }
        return $passwd;
    }

    //passwd 为明文的密码,非MD5后的。
    public function update_passwd($uid, $passwd)
    {
        if(!$uid = (int)$uid){
            return false;
        }else if(!$passwd = $this->check_passwd($passwd)){
            return false;
        }else if(!$member = K::M('member/view')->member($uid)){
            return false;
        }else if(defined('UC_OPEN') && UC_OPEN){
            if(!K::M('member/ucenter')->update($member['uname'], '', $passwd, '', 1)){
                return false;
            }
        }
        return K::M('member/handler')->update($uid, array('passwd'=>md5($passwd)), true);
    }

    public function update_mail($uid, $mail)
    {
        if(!$uid = (int)$uid){
            return false;
        }else if(!$mail = $this->check_mail($mail)){
            return false;
        }else if(!$member = K::M('member/view')->member($uid)){
            return false;
        }else if(defined('UC_OPEN') && UC_OPEN){
            if(!K::M('member/ucenter')->update($member['uname'], '', '', $mail, 1)){
                return false;
            }
        }
        return K::M('member/handler')->update($uid, array('mail'=>$mail), true);        
    }
}
