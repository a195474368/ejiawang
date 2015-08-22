<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: tenders.ctl.php 3379 2014-02-20 05:19:04Z langzhong $
 */
//引入短信代码
require(__CORE_DIR."home/controllers/msg.ctl.php");
class Ctl_Tenders extends Ctl
{
    private  $_tenders_allow_fields ='city_id,area_id,type_id,style_id,budget_id,service_id,house_type_id,way_id,name,mobile,home_name,addr,demand,area,area_space0,area_space1,area_space2,area_space3,area_space4,area_space5,area_level,house_type,area_name,city_name,zhuantai,zhonglei,cityName,leiyuang';
   
    
    public function index($page=1)
    {   
        $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 10;
       
        $filter = array(
           'city_id' => $this->request['city_id'],
           'audit'  => 1
        );
         if($items = K::M('tenders/tenders')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}'),array(),true), array());
        }

        $this->pagedata['tenders'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['total_count'] = $count+10500;       
        $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
        $this->pagedata['type']  = K::M('tenders/setting')->get_type();
        K::M('helper/seo')->init('tenders', array());
        $this->tmpl = 'tenders.html';
    }


    //自已制作的首页模板跳转
    public function index2($page=1)
    {   
        $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 10;
       
        $filter = array(
           'city_id' => $this->request['city_id'],
           'audit'  => 1
        );
         if($items = K::M('tenders/tenders')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}'),array(),true), array());
        }

        $this->pagedata['tenders'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['total_count'] = $count+10500;       
        $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
        $this->pagedata['type']  = K::M('tenders/setting')->get_type();
        K::M('helper/seo')->init('tenders', array());
        $this->tmpl = 'tenders.html';
    }

    
     public function mtenders($uid,$page=1)            
    {   
       //  $member_id=$_POST['member_id'];
        $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 10;
       
        $filter = array(
           'city_id' => $this->request['city_id'],
          // 'audit'  => 1,
           'uid'=>$uid
        );
         if($items = K::M('tenders/tenders')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}'),array(),true), array());
        }

        $this->pagedata['tenders'] = $items;
        $this->pagedata['uid'] = $member_id;
        $this->pagedata['pager'] = $pager;       
        $this->pagedata['total_count'] = $count+10500;       
        $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
        $this->pagedata['type']  = K::M('tenders/setting')->get_type();
        K::M('helper/seo')->init('tenders', array());
        $this->tmpl = 'mtender.html';
    }
    
     
    
    public function detail($id){
        
        if(!($id = (int)$id) && !($id = (int)$this->GP('id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('tenders/tenders')->detail($id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }elseif(!$detail['audit']){
            $this->err->add('该招标还没有公布不好意思!', 212); 
        }else{
            K::M('tenders/tenders')->update_count($id,'pv_num');
            if($home_id = (int)$detail['home_id']){
                $this->pagedata['home'] = K::M('home/main')->detail($home_id);
            }
            $this->pagedata['cityList'] = K::M("data/city")->fetch_all();
            $this->pagedata['areaList'] = K::M("data/area")->fetch_all();
            $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
            $this->pagedata['type']  = K::M('tenders/setting')->get_type();
            $this->pagedata['detail'] = $detail;
            $this->pagedata['look'] = $look = K::M('tenders/look')->items(array('tenders_id'=>$id));
            $company_ids = array();
            foreach($look as $v){
                $company_ids[$v['company_id']] = $v['company_id'];
            }
            if(!empty($company_ids)){
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            }
             K::M('helper/seo')->init('tenders_detail',array(
                 'home_name'    =>$detail['home_name'] ? $detail['home_name']:$this->pagedata['home']['home_name'],
                 'title'        => $detail['title'],
                 'area_name'    => $this->pagedata['areaList'][$detail['area_id']]['area_name']
             ));
            $this->tmpl = 'tenders_detail.html';
        }
    }


    //自己制作的招标页面模板跳转
    public function detaill($id){
        
        if(!($id = (int)$id) && !($id = (int)$this->GP('id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('tenders/tenders')->detail($id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }elseif(!$detail['audit']){
            $this->err->add('该招标还没有公布不好意思!', 212); 
        }else{
            K::M('tenders/tenders')->update_count($id,'pv_num');
            if($home_id = (int)$detail['home_id']){
                $this->pagedata['home'] = K::M('home/main')->detail($home_id);
            }
            $this->pagedata['cityList'] = K::M("data/city")->fetch_all();
            $this->pagedata['areaList'] = K::M("data/area")->fetch_all();
            $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
            $this->pagedata['type']  = K::M('tenders/setting')->get_type();
            $this->pagedata['detail'] = $detail;
            $this->pagedata['look'] = $look = K::M('tenders/look')->items(array('tenders_id'=>$id));
            $company_ids = array();
            foreach($look as $v){
                $company_ids[$v['company_id']] = $v['company_id'];
            }
            if(!empty($company_ids)){
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            }
             K::M('helper/seo')->init('tenders_detail',array(
                 'home_name'    =>$detail['home_name'] ? $detail['home_name']:$this->pagedata['home']['home_name'],
                 'title'        => $detail['title'],
                 'area_name'    => $this->pagedata['areaList'][$detail['area_id']]['area_name']
             ));
            $this->tmpl = 'tenders_detail.html';
        }
    }

    
    
    public function save(){
         if($data= $this->checksubmit('data')){
            if(!$data = $this->check_fields($data,$this->_tenders_allow_fields)){
                $this->err->add('非法的数据提交', 201);
            }else{
                $data['uid'] = (int)$this->uid;
                $data['create_ip'] = __IP;
                $data['dateline']  = __TIME;
                if($id = K::M('tenders/tenders')->create($data)){
                    $obj = K::M('sms/sms');
                
                    $obj->send($data['mobile'],'sms_tenders',array('name'=>$data['name'] ? $data['name'] : '业主','mobile'=>$data['mobile']));
                    $obj->admin('sms_admin_tenders',array('name'=>$data['name'] ? $data['name'] : '业主','mobile'=>$data['mobile']));
                    K::M('helper/mail')->systemmail('email_tenders',array('name'=>$data['name'] ? $data['name'] : '业主','mobile'=>$data['mobile']));
                    
                    //发送短信
                    $name=$data['name']; //接收名称
                    $cityName=$data['cityName']; //判断城市
                    $leiyuang=$data['leiyuang']; //接收来源。判断短信输出内容
                    if( $leiyuang==1 ){
                        if( $cityName=="武汉" ){
                            $msg="亲爱的".$name."先生／女士您好，您于".date("m",time())."月".date("d",time())."日".date("H",time())."时".date("i",time())."分提交了免费量房、免费设计和报价的申请。稍后客服电话：027-59103095将会给您致电，请保持电话畅通，如需加急请致电4008338583";
                        }else{
                            $msg="亲爱的".$name."先生／女士您好，您于".date("m",time())."月".date("d",time())."日".date("H",time())."时".date("i",time())."分提交了免费量房、免费设计和报价的申请。十分钟内我们客服将会给您致电，请保持电话畅通，如需加急请致电4008338583";
                        }
                        
                    }
                    $urlruten=new Ctl_Msg($msg ,$data['mobile']);
                    $urlruten->index();  
                    
                    $this->err->add('恭喜您发布招标成功！');
                    $this->err->set_data('forward',  $this->mklink('message:index',array('yes'),array(),true));
                }
            } 
        }else{
            $this->err->add('非法的数据提交', 201); 
        }  
    }
    

}