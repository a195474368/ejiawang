<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: passport.ctl.php 3450 2014-02-24 09:08:51Z langzhong $
 */

class Ctl_Passport extends Ctl
{
    
    public function index()
    {
        $this->tmpl = 'passport/login.html';
    }

    public function login()
    {
        if(!$this->checksubmit('account')){
            header('Location:'.K::M('helper/link')->mklink('passport'));
            exit();
        }else if(!$account = $this->GP('account')){
            $this->err->add('非法的数据提交', 212);
        }else if(!$verifycode = $this->GP('verifycode')){
            $this->err->add('验证码不正确', 212);
        }else if(!K::M('magic/verify')->check($verifycode)){
            $this->err->add('验证码不正确', 212);
        }else if(!$uname = $account['uname']){
             $this->err->add('用户名不正确', 213);
        }else if(!$passwd = $account['passwd']){
             $this->err->add('登录密码不下确', 214);
        }else{
            $keep = $this->GP('keep') ? true : false;
            $a = K::M('verify/check')->mail($uname) ? 'mail' : 'uname';
            if($member = $this->auth->login($uname, $passwd, $a, false, $keep)){
                $this->err->add("{$member[uname]}，欢迎您回来!");
                if(!$forward = $this->request['forward']){
                    $forward = K::M('helper/link')->mklink('index');
                }else if(strpos($forward, 'passport') !== false){
                    $forward = K::M('helper/link')->mklink('ucenter/member:index');
                }
                $this->err->set_data('forward', $forward);
            }
        }
    }
    
    //QQ 联合登录
    public function qqlogin(){
        
        if($url = K::M('member/qqlogin')->qqloign_url()){
            header("Location: {$url}");
            die;
        }
        
    }
    
    public function qqcallback(){
        if(!$code = $this->GP('code')){
            die('回传地址有问题2');
        }elseif(!$state = $this->GP('state')){
            die('回传地址有问题1');
        }elseif(true == K::M('member/qqlogin')->qqcallback($code,$state)){
        
            $forward = K::M('helper/link')->mklink('ucenter/member:index');
           header("Location: {$forward}");
           die;
        }     
    }
    
    
    public function weibo(){
        if($url = K::M('member/weibo')->weibo_url()){
            header("Location: {$url}");
            die;
        }
        
    }
    public function weibocallback(){
        if(!$code = $this->GP('code')){
            die('回传地址有问题2');
        }if(true == K::M('member/weibo')->weibocallback($code)){
        
            $forward = K::M('helper/link')->mklink('ucenter/member:index');
            header("Location: {$forward}");
           die;
        }     
    }
    
    
    
    public function minilogin()
    {
        $this->tmpl = 'view:passport/minilogin.html';
    }

    public function check()
    {
        if($clientid = $this->GP('clientid')){
            $account = $this->GP('account');
            $obj = K::M('member/account');
            $oString = K::M('content/string');
            if($clientid == 'uname' && isset($account['uname'])){
                if($obj->check_uname($oString->unescape($account['uname']))){
                    $this->err->add("用户可以使用");
                }
            }else if($clientid == 'mail' && isset($account['mail'])){
                if($obj->check_mail($oString->unescape($account['mail']))){
                    $this->err->add('邮箱可以使用');
                }
            }else if($clientid == 'mobile' && isset($account['mobile'])){
                if($obj->check_mobile($oString->unescape($account['mobile']))){
                    $this->err->add('手机可以使用');
                }
            }else{
                $this->err->add('非法的数据提交', 211);
            }
        }else{
            $this->err->add('非法的数据提交', 211);
        }
    }

    public function signup()
    {
    	$this->tmpl = 'passport/signup.html';
    }
    public function msignup()
    { 
    	$this->tmpl = 'passport/dsignup.html';
    }
    

    public function loginout()
    {
		@header("Expires: -1");
		@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
		@header("Pragma: no-cache");
        $this->auth->loginout();
        $url = $this->request['forward'];
        if(empty($url) || strpos($url,'loginout') !== false){
            $cfg = $this->system->config->get('site');
            $url = $cfg['siteurl'];
        }
        $this->err->redirect($url, 200);
    }

    public function forgot($loc=null)
    {
        if('success' == $loc){
            if($forgotmail = $this->cookie->get('forgotmail')){
                if(K::M('verify/check')->mail($forgotmail)){
                    $this->pagedata['forgotmail'] = $forgotmail;
                    $this->pagedata['mailLogin'] = K::M('mail/view')->weblogin($forgotmail);
                    $this->tmpl = 'passport/forgot-mail.html';
                    $this->output();
                }
            }
            header("Location:".K::M('helper/link')->mklink('passport:forgot'));
            exit();
        }else if('reset' == $loc){
            $uri = $this->request['uri'];
            if(preg_match('/reset-(\d+)-([0-9A-Z]+)(\.html)?$/', $uri, $match)){
                if($member = K::M('member/magic')->verify_forgot($match[1], $match[2])){
                    if($this->checksubmit()){
                        $passwd = $this->GP('passwd');
                        $confirmpwd = $this->GP('confirmpwd');
                        if($passwd != $confirmpwd){
                            $this->err->add('两次输入的密码不相同',212);
                        }else if(K::M('member/account')->update_passwd($member['uid'], $passwd)){
                            $this->err->set_data('forward', K::M('helper/link')->mklink('passport'));
                            $this->err->add("重新设置密码成功");
                        }
                    }else{
                        $this->pagedata['token'] = "{$match[1]}-{$match[2]}";
                        $this->tmpl = 'passport/forgot-passwd.html';
                    }
                }
            }else{
                $this->error(404);
            }
        }else if($this->checksubmit()){
            if(!$mail = $this->GP('forgotmail')){
                $this->err->add('找回密码邮箱不正确', 211);
            }else if(K::M('member/magic')->send_forgot($mail)){
                $this->cookie->set('forgotmail', $mail);
                $this->err->set_data('forward', K::M('helper/link')->mklink('passport:forgot', 'success'));
                $this->err->add('邮件发布成功');
            }
        }else{
            $this->tmpl = 'passport/forgot.html';
        }
    }

    public function create()
    {

    	if(!$this->checksubmit('account')){
    		$this->err->add('非法的数据提交', 211);
    	}else if(!$account = $this->GP('account')){
            $this->err->add('非法的数据提交', 212);
        }
        else if(!$verifycode = $this->GP('verifycode')){
            $this->err->add('验证码不正确', 212);
       }else if(!K::M('magic/verify')->check($verifycode)){
            $this->err->add('验证码不正确', 212);
       }
        else if($account['passwd'] != $this->GP('confirmpasswd')){
            $this->err->add('两次输入的密码不相同', 213);
        }else if($uid = K::M('member/account')->create($account)){
            
            $this->err->add('恭喜您，注册成功');
            $forward = K::M('helper/link')->mklink('ucenter/member:index');
            $this->err->set_data('forward', $forward);
        }
        K::M('magic/verify')->reset();
    }
     public function dcreate()
    {
    	if(!$this->checksubmit('account')){
    		$this->err->add('非法的数据提交', 211);
    	}else if(!$account = $this->GP('account')){
            $this->err->add('非法的数据提交', 212);
        }
     
        else if($account['passwd'] != $this->GP('confirmpasswd')){
            $this->err->add('两次输入的密码不相同', 213);
        }else if($uid = K::M('member/account')->create($account)){
            
            K::M('designer/designer')->update($uid,array('company_id'=>  $account['company_id']),true);//绑定设计师到公司团队
            $this->err->add('恭喜您，添加成功');
            $forward = K::M('helper/link')->mklink('ucenter/member:index');
           $this->err->set_data('forward', $forward);
        }
       K::M('magic/verify')->reset();
    }
    /**
     * 第三方登录
     */
    public function sso($from='qq')
    {
        echo "success";
        exit;
    }
    
    
    public function verfiy($type = 'mail',$uid = 0 ,$token = null){
  
        if(!($uid=(int)$uid) || empty($token)){
            $this->err->add('参数有误', 211);
        }else{
            if(!$member = K::M('member/view')->member($uid)){
                $this->err->add('用户ID不存在！', 201);
            }
            elseif (K::M('system/integral')->check('email',$member) === false) {
                $this->err->add('很抱歉您的账户余额不足！', 201);
            }else{   
                if(K::M('member/magic')->verify_mail($uid,$token)){
                       K::M('system/integral')->commit('email', $member,'邮件认证');
                       $this->err->add('验证成功！');
                       $this->err->set_data('forward',  K::M('helper/link')->mklink('ucenter/member:index') );
                }else{
                    $this->err->add('验证失败！', 201);
                    $this->err->set_data('forward',  K::M('helper/link')->mklink('ucenter/member:index') );
                }
            }
            
        }
        
    }
    
    
}