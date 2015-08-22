<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */
class Mdl_Member_Qqlogin extends Model {
    
    
    protected $_type_id = 1;//QQ互联是1
    
    public function qqloign_url()
    {

        $cfg = K::$system->config->get('connect');
        if(defined('IN_MOBILE')){
            $mobile = K::$system->config->get('mobile');
            $callback = $mobile['url'] . '/' . K::M('helper/link')->mklink('passport:qqcallback');
        }else{
            $site = K::$system->config->get('site');
            $callback = $site['siteurl'] . '/' . K::M('helper/link')->mklink('passport:qqcallback');
        }
        if (empty($cfg['qq_is_open'])) {
            $this->err->add('很抱歉网站管理员还未开启QQ登录功能', 201);
        }
        else {
            $id = md5(uniqid(rand(), TRUE));
            K::$system->session->start();
            K::$system->session->set('QQ_LOGIN', $id, null);
            $login_url = "https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id="
                    . trim($cfg['qq_app_id']) . "&redirect_uri=" . urlencode($callback)
                    . "&state=" . $id
                    . "&scope=get_user_info";
            return $login_url;
        }
        return false;
    }

    public function qqcallback($code, $state)
    {
        $cfg = K::$system->config->get('connect');
        if(defined('IN_MOBILE')){
            $mobile = K::$system->config->get('mobile');
            $callback = $mobile['url'] . '/' . K::M('helper/link')->mklink('passport:qqcallback');
        }else{
            $site = K::$system->config->get('site');
            $callback = $site['siteurl'] . '/' . K::M('helper/link')->mklink('passport:qqcallback');
        }
        if (empty($cfg['qq_is_open'])) {
            $this->err->add('很抱歉网站管理员还未开启QQ登录功能', 201);
            return false;
        }
        else {
            K::$system->session->start();
            $id = K::$system->session->get('QQ_LOGIN');

            if ($id != $state) {
                $this->err->add('很抱歉请重新登录', 201);
                return false;
            }
            $token_url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&"
                    . "client_id=" . trim($cfg['qq_app_id']) . "&redirect_uri=" . urlencode($callback)
                    . "&client_secret=" . trim($cfg['qq_app_key']) . "&code=" . $code;

            $response = K::M('net/http')->http($token_url, array(), 'GET');
            if (strpos($response, "callback") !== false) {
                $lpos = strpos($response, "(");
                $rpos = strrpos($response, ")");
                $response = substr($response, $lpos + 1, $rpos - $lpos - 1);
                $params = json_decode($response, true);
            }
            else {
                $local = explode('&', $response);
                foreach ($local as $val) {
                    if (strpos($val, "access_token") !== false) {
                        $local2 = explode('=', $val);
                        $params['access_token'] = trim($local2[1]);
                        break;
                    }
                }
            }
            if (empty($params['access_token'])) {
                 $this->err->add('很抱歉腾讯接口不稳定！', 201);
                 return false;
            }
            
            $graph_url = "https://graph.qq.com/oauth2.0/me?access_token=" 
            . $params["access_token"];
            $str = K::M('net/http')->http($graph_url, array(), 'GET');

            if (strpos($str, "callback") !== false)
            {
                $lpos = strpos($str, "(");
                $rpos = strrpos($str, ")");
                $str  = substr($str, $lpos + 1, $rpos - $lpos -1);
            }
            $user = json_decode($str,true);
            if(empty($user)){
                 $this->err->add('很抱歉腾讯接口不稳定！', 201);
                 return false;
            }
            $graph_url = 'https://graph.qq.com/user/get_user_info?access_token='.$params["access_token"].'&oauth_consumer_key='.$cfg['qq_app_id'].'&openid='.$user['openid'];
            $str = K::M('net/http')->http($graph_url, array(), 'GET');
            $qqInfo = json_decode($str,true); 
            
            return $this->login($user, $qqInfo);
        }
    }
    
    public function login($user,$info){
       $connect =  K::M('connect/connect')->detail_by_openid($this->_type_id,$user['openid']);
       if(empty($connect)){
           if(!$id = K::M('connect/connect')->create(array(
               'type'       => $this->_type_id,
               'open_id'    => $user['openid'],
           ))) {
               $this->err->add('写入数据库失败！', 201);
               return false;
           }          
       }else{
           $id = $connect['connect_id'];
       }
       if(empty($connect['uid'])){ //没有绑定用户的情况下
          $realname = trim($user['nickname']);
          $uinqid = md5(uniqid(rand(), TRUE));
          $a = array(
              'uname'       => 'qqhl'.rand(100,10000000),//如果你的网站在这个概率内还能中奖。。
              'mail'        => $uinqid.'@qq.com',
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
