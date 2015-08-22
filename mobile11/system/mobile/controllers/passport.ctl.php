<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

class Ctl_Passport extends Ctl 
{
    
    public function  index(){
          $this->tmpl = 'mobile:passport/login.html';
    }
    
    public function login(){
        if(!$this->checksubmit('account')){
            $this->err->add('非法的数据提交', 212);
        }else if(!$account = $this->GP('account')){
            $this->err->add('非法的数据提交', 212);
        }else if(!$uname = $account['uname']){
             $this->err->add('用户名不正确', 213);
        }else if(!$passwd = $account['passwd']){
             $this->err->add('登录密码不下确', 214);
        }else{
            $keep = $this->GP('keep') ? true : false;
            $a = K::M('verify/check')->mail($uname) ? 'mail' : 'uname';
            if($member = $this->auth->login($uname, $passwd, $a, false, $keep)){
                $this->err->add("{$member['uname']}，欢迎您回来!");
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
        
            $forward = K::M('helper/link')->mklink('ucenter:index');
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
        
            $forward = K::M('helper/link')->mklink('ucenter:index');
            header("Location: {$forward}");
           die;
        }     
    }
    
    public function loginout()
    {
		@header("Expires: -1");
		@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
		@header("Pragma: no-cache");
        $this->auth->loginout();
        header("Location: ".$this->mklink('index',array(),array(),false));
        die;
    }

    public function regsiter()
    {   
        $this->pagedata['fromlist'] = K::M('member/view')->from_list();
    	$this->tmpl = 'mobile:passport/regsiter.html';
    }
    public function create()
    {
    	if(!$this->checksubmit('account')){
    		$this->err->add('非法的数据提交', 211);
    	}else if(!$account = $this->GP('account')){
            $this->err->add('非法的数据提交', 212);
        }else if($account['passwd'] != $this->GP('confirmpasswd')){
            $this->err->add('两次输入的密码不相同', 213);
        }else if($uid = K::M('member/account')->create($account)){
            $this->err->add('恭喜您，注册会成功');
  
        }
    }
}