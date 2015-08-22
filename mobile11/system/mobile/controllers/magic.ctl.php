<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: magic.ctl.php 4008 2014-03-20 07:12:47Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Magic extends Ctl
{
    
    public function index()
    {
        
    }
    public function area($city_id)
    {
		if(!$city_id = intval($city_id)){
			$this->err->add('未指定城市ID', 211);
		}else{
			$areas = K::M('data/area')->areas_by_city($city_id);
			$this->err->set_data('areas', array_values((array)$areas));
		}
		$this->err->json();    	
    }

    public function yuyue()
    {
        if(!$mobile = $this->GP('mobile')){
            $this->err->add('联系电话不正确', 211);
        }else if(!$contact = $this->GP('contact')){
            $this->err->add('联系人不正确', 212);
        }else if(!$company_id = (int)$this->GP('company_id')){
            $this->err->add('未指定要预约的公司', 213);
        }else if(!K::M('verify/check')->mobile($mobile)){
            $this->err->add('手机号码不合法', 214);
        }else{
            $contact = K::M('content/html')->encode($contact);
            $content = K::M('content/html')->encode($this->GP('content'));
            $data = array('company_id'=>$company_id, 'mobile'=>$mobile, 'cantact'=>$contact, 'content'=>$content);
            if(K::M('company/yuyue')->create($data, true)){
                $this->err->add('预约成功');
            }
        }
    }
}