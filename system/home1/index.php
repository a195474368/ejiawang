<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author shzhrui<anhuike@gmail.com>
 * $Id: index.php 4077 2014-03-24 03:23:34Z langzhong $
 */

define('__APP__', 'home');
define('__APP_DIR', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('__CORE_DIR',dirname(__APP_DIR).DIRECTORY_SEPARATOR);
if(!file_exists(__CORE_DIR.'data/install.lock')){
    header('Location:./install/index.php');
    exit();
}

require(__CORE_DIR."framework/kernel.php");
class Index extends kernel
{
    protected $_default_request = array('ctl'=>'index','act'=>'index','type'=>'html','args'=>null);
    protected $_cust_uri = null;
    public function __construct($uri=null)
    {
        $this->_cust_uri = $uri;
        parent::__construct();
    }
    protected function _init()
    {
        parent::_init();
        require(__APP_DIR.'controller.php');
        $act = $this->request['ctl'].':'.$this->request['act'];
		
		
        $this->auth = K::M('member/auth');
        $this->auth->token();
        $this->uid = $this->auth->uid;
        $this->uname = $this->auth->uname;
        $this->MEMBER = $this->auth->member;
    }

    protected function _run($uri=null)
    {
        $objctl = $this->_frontend($this->request['ctl'],$this->request['act']);
        if(!is_object($objctl)) $this->error(404);
        $this->objctl = &$objctl;
        if(!$this->call($objctl,$this->request['act'],$this->request['args'])){
            $this->error(404);
        }else if('magic' === $this->request['ctl'] && 'shell' === $this->request['act']){
            return true;
        }
        $this->err->response();
		
    }

    protected function _route($uri=null)
    {
        if($uri === null && $this->_cust_uri !==null){
            $uri = $this->_cust_uri;
        }
        $request = parent::_route($uri);
        switch($request['ctl']){
            case 'mall':
                $request['ctl'] = 'mall/index'; break;
            case 'ucenter':
                $request['ctl'] = 'ucenter/member'; break;
        }
        $siteCfg = $this->config->get('site');
        if($request['ismobile'] && empty($request['isrobot']) && $siteCfg['mobile']){
            $mobileCfg = $this->config->get('mobile');
            if($mobileCfg['forward'] && in_array($request['ctl'], array('index', 'company'))){
                header("Location:".$mobileCfg['url']);
                exit();
            }
        }
        $request['MINI'] = $_REQUEST['MINI'] ? $_REQUEST['MINI'] : false;
        if($city = $this->_parse_city()){
            $request['city'] = $city;
            $request['city_id'] = $city['city_id'];
            if(!in_array($city['city_by'], array('default', 'ip'))){
                if($this->cookie->get('curr_city_id') != $city['city_id']){
                    $this->cookie->set('curr_city_id', $city['city_id']);
                }
            }else if($siteCfg['multi_city'] && $request['ctl'] == 'index'){
                $request['ctl'] = 'city';
            }
        }
        $this->request = &$request;
        return $request;
    }

    protected function _parse_city()
    {
        $site = $this->config->get('site');
        $oCity = K::M('data/city');
        $city = array();
        if($site['multi_city']){
            if($host = $_SERVER['HTTP_HOST']){
                if($pos = strpos($host, $site['city_domain'])){
                    $py = substr($host, 0, $pos-1);
                    if($city = $oCity->city_by_pinyin($py)){
                        $city['city_by'] = 'domain';
                    }
                }
            }
            if(!$this->request['isrobot']){
                if(empty($city)){
                    if($cookie_city_id = $this->cookie->get('curr_city_id')){
                        if($city = $oCity->city($cookie_city_id)){
                            $city['city_by'] = 'cookie';
                        }
                    }
                }
                if(empty($city)){
                    if($city = $oCity->city_by_ip(__IP)){
                        $city['city_by'] = 'ip';
                    }
                }
            }
            if(empty($city)){
                if($city = $oCity->city((int)$site['city_id'])){
                    $city['city_by'] = 'default';
                }
            }        
        }else if($city = $oCity->city((int)$site['city_id'])){
            $city['city_by'] = 'sign';
        }
        if(empty($city)){
            exit('没有开通城市站点');
        }
        return $city;
    }


    protected function _frontend($ctl,$act='index')
    {
        if(!$clsName = Import::C(__APP__.":$ctl")){
            $this->error(404);
        }
        $object = new $clsName($this);
        return $object; 
    }

    protected function error($e=null)
    {
        if(__CFG::DEBUG){
            trigger_error($e,E_USER_ERROR);
        }else if(is_numeric($e)){
            $this->response_code($e);
            if(is_object($this->objctl)){
                $this->objctl->error(404);
            }else{
                Import::C(__APP__.':index');
                $objctl = new Ctl_Index($this);
                $objctl->error(404);
            }
        }

    }

    public function mklink($ctl, $act='index', $args=array(), $extname='.html', $params=array())
    {
        return K::M('helper/link')->mklink("{$ctl}:{$act}", $args, $params,true,true,$extname);
    }
}