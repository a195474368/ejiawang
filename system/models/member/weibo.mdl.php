<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

Import::L('weibo/SaeTOAuthV2.php');
class Mdl_Member_Weibo extends Model {
    
    protected $_type_id = 2;//微博是2
        
    public function  weibo_url(){
        $cfg = K::$system->config->get('connect');
        if(defined('IN_MOBILE')){
            $mobile = K::$system->config->get('mobile');
            $callback = $mobile['url'] . '/' . K::M('helper/link')->mklink('passport:weibocallback');
        }else{
            $site = K::$system->config->get('site');
            $callback = $site['siteurl'] . '/' . K::M('helper/link')->mklink('passport:weibocallback');
        }
      
        
        if (empty($cfg['weibo_is_open'])) {
            $this->err->add('很抱歉网站管理员还未开启微博登录功能', 201);
        }
        else {
           $o = new SaeTOAuthV2($cfg['weibo_app_id'] , $cfg['weibo_app_key'] ); 
           $code_url = $o->getAuthorizeURL($callback);
           return $code_url;
        }
        return false;
    }
    
    public function weibocallback($code){
        $cfg = K::$system->config->get('connect');
        if(defined('IN_MOBILE')){
            $mobile = K::$system->config->get('mobile');
            $callback = $mobile['url'] . '/' . K::M('helper/link')->mklink('passport:weibocallback');
        }else{
            $site = K::$system->config->get('site');
            $callback = $site['siteurl'] . '/' . K::M('helper/link')->mklink('passport:weibocallback');
        }
        if (empty($cfg['weibo_is_open'])) {
            $this->err->add('很抱歉网站管理员还未开启微博登录功能', 201);
            return false;
        }
        $keys = array();
        $keys['code'] = $code;
        $keys['redirect_uri'] = $callback;
        $o = new SaeTOAuthV2($cfg['weibo_app_id'] , $cfg['weibo_app_key'] ); 
        try {
            $token = $o->getAccessToken( 'code', $keys ) ;
        } catch (OAuthException $e) {
            $this->err->add($e->getMessage(), 201);
            return false;
        }
        $c = new SaeTClientV2($cfg['weibo_app_id'] , $cfg['weibo_app_key']  , $token['access_token'] );
        $ms  = $c->home_timeline(); // done
        $uid_get = $c->get_uid();
        $uid = $uid_get['uid'];
        $user_message = $c->show_user_by_id( $uid);//根据ID获取用户等基本信息
        return  $this->login($uid, $user_message);
    }
    
    public function login($uid,$info){
       $connect =  K::M('connect/connect')->detail_by_openid($this->_type_id,$uid);
       if(empty($connect)){
           if(!$id = K::M('connect/connect')->create(array(
               'type'       => $this->_type_id,
               'open_id'    => $uid,
           ))) {
               $this->err->add('写入数据库失败！', 201);
               return false;
           }          
       }else{
           $id = $connect['connect_id'];
       }
       if(empty($connect['uid'])){ //没有绑定用户的情况下
          $realname = trim($info['name']);
          $uinqid = md5(uniqid(rand(), TRUE));
          $a = array(
              'uname'       => 'weibo'.$uid,
              'mail'        => $uid.'@sina.com',
              'passwd'      => substr($uinqid,0,7),
              'realname'    => $realname
              
          ); 
          $connect['uid'] = K::M('member/account')->create($a);
          if(!$connect['uid']){            
              $this->err->add('写入数据库失败！', 201);
              return false;
          }
          if(!K::M('connect/connect')->update($id,array('uid'=>$connect['uid'],'dateline'=>__TIME))){
              $this->err->add('更新数据库失败！', 201);
              return false;
          }
       }
       if(!K::M('member/auth')->manager( $connect['uid'])) {
           $this->err->add('数据库同步失败！', 201);
           return false;
       }
       return true;
    }
    
}