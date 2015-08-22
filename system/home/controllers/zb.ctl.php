<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: tenders.ctl.php 3379 2014-02-20 05:19:04Z langzhong $
 */
//引入短信代码
require(__CORE_DIR."home/controllers/msg.ctl.php");
class Ctl_Zb extends Ctl
{
    //定义私有字段。用来过滤非法字段
    private  $_tenders_allow_fields ='id,city_id,mianji,name,mobile,zhonglei,string,house_type_id,style_id,zhuantai,city_id,area_id,home_name,city_name,area_name,area_space0,area_space1,area_space2,area_space3,area_space4,area_space5,area_level,area_style,area,house_type,cityName';
   
    
    public function index($page=1)
    {   


       $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 10;
       
        $filter = array(
           'city_id' => $this->request['city_id'],
           'audit'  => 1
        );
         //查询数据库用
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
        
        K::M('helper/seo')->init('city',array());

        //查询装修类型，风格，户型等信息
        $url = array();
        $attr_values = K::M('data/attr')->attrs_by_from('zx:case');
 
        $http_key = $attr_keys = array();
        foreach ($attr_values as $key => $value) {
            $http_key['attr' . $key] = 'attr' . $key;
        }
        $http_key['order'] = 'order'; //排序字段
        $http_key['page'] = 'page';
        $num = count($http_key);
        $uri = explode('-', trim($this->request['uri'], '.html'));
        foreach ($uri as $k => $v) {
            if (!is_numeric($v)) {
                unset($uri[$k]);
            }
        }
        if (count($uri) > $num) {
            $uri = array_slice($uri, 0, $num);
        }
        else {
            $uri = array_pad($uri, $num, 0);
        }
        $url = array_combine($http_key, $uri);
        $page = empty($url['page']) ? 1 : (int) $url['page'];
        $attr = array();
        foreach ($attr_values as $key => $value) {
            $attr_values[$key]['link'] = $this->mklink('case:items', array_merge($url, array('attr' . $key => 0)), array(), true);
            if (empty($url['attr' . $key]))
                $attr_values[$key]['checked'] = true;
            foreach ($value['values'] as $k => $v) {
                $attr_values[$key]['values'][$k]['link'] = $this->mklink('case:items', array_merge($url, array('attr' . $key => $k)), array(), true);
                if (!empty($url['attr' . $key]) && $url['attr' . $key] == $k) {
                    $attr[] = $k;
                    $attr_values[$key]['values'][$k]['checked'] = true;
                }
            }
        }
        $this->pagedata['attr_values'] = $attr_values;
        // echo "<pre>";
        // var_dump($attr_values);
        // echo "</pre>";
        // exit;
        $this->tmpl = 'zb.html';
    }
    
    //添加数据到数据库
    public function add(){
        //接受表单提交的数据
         if($data= $this->checksubmit('data'))
            {         
             //判断如果不在上面的字段内就是非法提交的数据
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
                    $name = $data['name']; //接收名称
                    $cityName = $data['cityName']; //接收城市
                    if( $cityName=="武汉" ){
                        $msg="亲爱的".$name."先生／女士您好，您于".date("m",time())."月".date("d",time())."日".date("H",time())."时".date("i",time())."分提交了免费报价申请，稍后客服电话：027-59103095 十分钟内会给您致电,请保持电话畅通，如需加急请致电4008338583";
                    }else{
                        $msg="亲爱的".$name."先生／女士您好，您于".date("m",time())."月".date("d",time())."日".date("H",time())."时".date("i",time())."分提交了免费报价申请，十分钟内我们客服将会给您致电,请保持电话畅通，如需加急请致电4008338583";
                    }
                    
                    $urlruten=new Ctl_Msg($msg ,$data['mobile']);
                    $urlruten->index();   
                    
                    $this->err->add('恭喜您发布招标成功！');
                    $this->err->set_data('forward',  $this->mklink('message:index',array('yes'),array(),true));
                }

            } 
       }
        else{
           $this->err->add('非法的数据提交', 201); 
        }  
   }
   
   

    //获取验证码
    public function huqu(){            
         //接受表单提交的数据
            $tel=$_POST['mobiles'];
            $msg="(动态验证码),请在30分钟内填写";
            //1.设置短信验证码
            $code=rand(1000,9999);
            $urlruten=new Ctl_Msg($msg ,$tel,$code);
            $urlruten->index();  
            echo  $code;

   }


    public function save(){
         if($data= $this->checksubmit('data'))
            {         
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
                    $this->err->add('恭喜您发布招标成功！');
                    $this->err->set_data('forward',  $this->mklink('message:index',array('yes'),array(),true));
                }
            } 
       }
        else{
           $this->err->add('非法的数据提交', 201); 
        }  
   }



}