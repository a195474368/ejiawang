<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: sms.mdl.php 3768 2014-03-12 01:43:40Z youyi $
 */

class Mdl_Sms_Sms extends Model
{   
    
	protected $sms = null;

    private  $_datetime;
    
    private  $_sitename;
    
    public function __construct(&$system)
    {
        parent::__construct($system);
    	$this->sms = K::M('sms/56dxw');
        $cfg = K::$system->config->get('site');
        $this->_sitename = $cfg['title'];
        $this->_datetime = date('Y-m-d H:i:s',__TIME);
        
    }
    
    //通知管理员的短信接口
    public function admin($key,$data=array())
    {
        $cfg = K::$system->config->get('sms');
        if(empty($cfg['mobile'])) return false;
        //一般接口都支持 ,分割的多个手机号 如果不支持的请在做逻辑处理！
        $email = explode(',',$cfg['mobile']);
        foreach($email  as $mail){        
            $this->send($mail,$key,$data);
        }
        return  true;
    }
    
    
    public function send($mobile, $key, $data=array())
    {   
        $content = $this->content($key, $data);
        if($content === false) return false;
    	if(!$this->sms->send($mobile, $content)){
    		//$msg = $this->sms->lastmsg;
    		//$this->err->add($msg, 450);
			if(__CFG::DEBUG){
				$this->err->add('短信接口错误:['.$this->sms->lastcode.':'.$this->lastmsg.']', 450);
			}else{
				$this->err->add('发送短信失败('.$this->sms->lastcode.')', 450);
			}
    		return false;
    	}
    	return true;
    }

    public function content($key,$data)
    {
        $detail = K::M('system/systmpl')->detail_by_key($key);
      
        if(!$detail['is_open']) return false;
        $content = $detail['tmpl'];
        $content = str_replace('{dateline}',$this->_datetime,$content);
        $content = str_replace('{sitename}',$this->_sitename,$content);
        $content = str_replace('{city}',K::$system->request['city']['city_name'],$content);
        foreach($data  as $k=>$v){
            $k = '{'.$k.'}';
            $v = htmlspecialchars($v);
            $content = str_replace($k,$v,$content);
        }
        return $content; //仅仅56短信需要
    }
}