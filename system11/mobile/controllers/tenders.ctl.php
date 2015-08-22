<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: tenders.ctl.php 4450 2014-04-10 07:48:10Z langzhong $
 */

class Ctl_tenders extends Ctl 
{
	
	public function index()
	{   
        $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
        $this->pagedata['type']  = K::M('tenders/setting')->get_type();
		$this->tmpl = 'mobile:tenders.html';	
	}

	public function save()
	{
		if(!$data = $this->GP('data')){
			$this->err->add('联系人不能为空', 211);
		}else{
            $data['uid'] = $this->uid;
            $data['home_name'] =  $data['home_name'] == '请输入您的小区名称' ? '' : $data['home_name'];
			$data['city_id'] = empty($data['city_id']) ? $this->request['city_id'] : (int)$data['city_id'];
			$data['create_ip'] = __IP;
			$data['dateline'] = __CFG::TIME;
            $data['audit'] = 0;
            if($id = K::M('tenders/tenders')->create($data)){
                $obj = K::M('sms/sms'); 
                $obj->send($data['mobile'],'sms_tenders',array('name'=>$data['name'] ? $data['name'] : '业主','mobile'=>$data['mobile']));
                $obj->admin('sms_admin_tenders',array('name'=>$data['name'] ? $data['name'] : '业主','mobile'=>$data['mobile']));
                K::M('helper/mail')->systemmail('email_tenders',array('name'=>$data['name'] ? $data['name'] : '业主','mobile'=>$data['mobile']));
                $this->err->add('恭喜您发布招标成功！');
            }			
		}
	}
}