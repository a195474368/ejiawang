<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

class Ctl_ucenter extends Ctl 
{
    protected $_allow_fields = 'mail,gender,from,mobile,Y,M,D,city_id,realname';
     
    public function index(){
        $this->check_login();
        $this->tmpl = 'mobile:ucenter/index.html';
    }
    
    
    public function info(){
       $this->check_login();  
       if ($account = $this->checksubmit('account')) {
            if ($this->MEMBER['verify_mobile']) {
                unset($account['mobile']); //认证后不允许修改手机
            }
            if ($this->MEMBER['verify_mail']) {
                unset($account['mail']); //认证后不允许修改邮箱
            }     
            if($this->MEMBER['from'] != 'member' || $account['from'] == 'mechanic'){
                unset($account['from']);
            }
            
            if (!$account = $this->check_fields($account, $this->_allow_fields)) {
                $this->err->add('非法的数据提交', 201);
            }else if (K::M('member/handler')->update($this->uid, $account)) {
                if($account['from'] == 'designer'){
                    K::M('designer/designer')->create(array('uid'=>  $this->uid,'city_id'=>$this->MEMBER['city_id']),null,true);
                }
                $this->err->add('更新个人资料成功');
            }
        }
        else {
            $this->pagedata['fromlist'] = K::M('member/view')->from_list();
            $this->tmpl = 'mobile:ucenter/info.html';
        }
    }
    
    public function passwd()
    {   
        $this->check_login();  
        if($account = $this->checksubmit('account')){
            if(md5($account['old_passwd']) != $this->MEMBER['passwd']){
                $this->err->add('原密码不正确', 211);
            }else if($account['passwd'] != $account['confirm_passwd']){
                $this->err->add('两次输入的密码不相同', 212);
            }else if($this->auth->update_passwd($account['passwd'], false)){
                $this->err->add('修改密码成功');
            }
        }else{
           $this->tmpl = 'mobile:ucenter/passwd.html';
        }        
    }

    public function mail()
    {   
        $this->check_login();  
        if($account = $this->checksubmit('account')){
            if(md5($account['passwd']) != $this->MEMBER['passwd']){
                $this->err->add('登录密码不正确', 211);
            }else if($account['new_mail'] == $this->MEMBER['mail']){
                $this->err->add('新老邮箱一致不用修改', 211);
            }else if($mail = K::M('member/account')->check_mail($account['new_mail'])){
                if($this->auth->update_mail($mail, false)){
                    $this->err->add('修改邮箱成功');
                }
            }
        }else{
           $this->tmpl = 'mobile:ucenter/mail.html';
        }          
    }
    
    
    public function tender($page=1){
        $this->check_login();  
        $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 10;
       
        $filter = array(  
           'uid' => $this->uid
        );
        $items = K::M('tenders/tenders')->items($filter, array('id'=>'desc'), $page, $limit);
        $this->pagedata['tenders'] = $items;
        $this->pagedata['nextpage'] = $this->mklink('ucenter:tenderloaddata',array('{page}'),array(),false);
        $this->tmpl = 'mobile:ucenter/tender.html';
    }
    
    public function tenderloaddata($page = 1){
        $this->check_login();  
        $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 10;
       
        $filter = array(  
           'uid' => $this->uid
        );
        $items = K::M('tenders/tenders')->items($filter, array('id'=>'desc'), $page, $limit);
        if($items){
            $this->pagedata['tenders'] = $items;
            $this->tmpl = 'mobile:ucenter/tenderloaddata.html';
        }else die('0');
    }
    
    public function companyyuyue($page = 1){
        $this->check_company();
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 20;
        $filter['company_id'] = $this->company['company_id'];
        $items = K::M('company/yuyue')->items($filter, array('yuyue_id'=>'desc'), $page, $limit, $count);
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['nextpage'] = $this->mklink('ucenter:companyyuyueloaddata', array('{page}'),array(),false);
        $this->tmpl = 'mobile:ucenter/companyyuyue.html';
    }
    
    public function companyyuyueloaddata($page = 1){
        $this->check_company();
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 20;
        $filter['company_id'] = $this->company['company_id'];
        $items = K::M('company/yuyue')->items($filter, array('yuyue_id'=>'desc'), $page, $limit, $count);
        if($items){
            $this->pagedata['items'] = $items;
            $this->tmpl = 'mobile:ucenter/companyyuyueloaddata.html';
        }else die('0');
    }
    
    public function companydesign($page = 1){
        $this->check_company();
 
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 20;
        $filter['company_id'] = $this->company['company_id'];
        $items = K::M('designer/yuyue')->items($filter, array('yuyue_id'=>'desc'), $page, $limit, $count);
        foreach($items as $k=>$v){
            if($v['designer_id']){
                $designer_ids[$v['designer_id']] = $v['designer_id'];
            }   
        }         
        if(!empty($designer_ids)){
            $this->pagedata['designer_list'] = K::M('designer/designer')->items_by_ids($designer_ids);
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['nextpage'] = $this->mklink('ucenter:companydesignloaddata', array('{page}'),array(),false);
        $this->tmpl = 'mobile:ucenter/companydesign.html';
        
    }
    
    public function companydesignloaddata($page=1){
        $this->check_company();
        
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 20;
        $filter['company_id'] = $this->company['company_id'];
        $items = K::M('designer/yuyue')->items($filter, array('yuyue_id'=>'desc'), $page, $limit, $count);
        if($items){
            foreach($items as $k=>$v){
                if($v['designer_id']){
                    $designer_ids[$v['designer_id']] = $v['designer_id'];
                }   
            }         
            if(!empty($designer_ids)){
                $this->pagedata['designer_list'] = K::M('designer/designer')->items_by_ids($designer_ids);
            }
            $this->pagedata['items'] = $items;
            $this->tmpl = 'mobile:ucenter/companydesignloaddata.html';
        }else die('0');
        
    }
    
    
    public function  tenderin($page=1){
        $this->check_company();
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 10;
        $filter['city_id'] = $this->company['city_id'];
        $filter['status'] = 0;
        $filter['audit'] = 1;      
        $tenders_ids =  array();
        if($items = K::M('tenders/tenders')->items($filter, array('id'=>'DESC'), $page, $limit, $count)){
            foreach($items as $k=>$v){
                $tenders_ids[$v['id']] = (int)$v['id'];
                $items[$k]['create_ip'] = $v['create_ip'].'('. K::M("misc/location")->location($v['create_ip']) .')';
            }
        }

        $looks = K::M('tenders/look')->items(array('tenders_id'=>$tenders_ids,'company_id'=>  $this->company['company_id']));
        $lookIds = array();
        foreach($looks as $val){
            $lookIds[$val['tenders_id']] = $val['tenders_id']; 
        }
  
        $this->pagedata['lookIds'] = $lookIds;
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['nextpage'] = $this->mklink('ucenter:tenderinloaddata',array('{page}'),array(),false);
        $this->tmpl = 'mobile:ucenter/tenderin.html';
    }
    public function  tenderinloaddata($page=1){
        $this->check_company();
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 10;
        $filter['city_id'] = $this->company['city_id'];
        $filter['status'] = 0;
        $filter['audit'] = 1;      
        $tenders_ids =  array();
        if($items = K::M('tenders/tenders')->items($filter, array('id'=>'DESC'), $page, $limit, $count)){
            foreach($items as $k=>$v){
                $tenders_ids[$v['id']] = (int)$v['id'];
                $items[$k]['create_ip'] = $v['create_ip'].'('. K::M("misc/location")->location($v['create_ip']) .')';
            }
            $looks = K::M('tenders/look')->items(array('tenders_id'=>$tenders_ids,'company_id'=>  $this->company['company_id']));
            $lookIds = array();
            foreach($looks as $val){
                $lookIds[$val['tenders_id']] = $val['tenders_id']; 
            }

            $this->pagedata['lookIds'] = $lookIds;
            $this->pagedata['items'] = $items;
            $this->pagedata['pager'] = $pager;
            $this->pagedata['nextpage'] = $this->mklink('ucenter:tenderinloaddata',array('{page}'),array(),false);
            $this->tmpl = 'mobile:ucenter/tenderinloaddata.html';
        }else die('0');
    }
     public function look($id = null){
        $this->check_company();
        if(!($id = (int)$id) && !($id = (int)$this->GP('id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('tenders/tenders')->detail($id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }elseif(!$detail['audit']){
            $this->err->add('该招标还没有公布不好意思!', 212); 
        }elseif((int)$detail['status'] === 1){
            $this->err->add('该招标已经结束了!', 212); 
        }elseif($detail['num2'] >= $detail['num']){
            $this->err->add('该招标已经结束了!', 212); 
        }elseif($this->MEMBER['gold'] < $detail['gold']){
            $this->err->add('账户余额不足!', 212); 
        }else{
            if($detail['gold'] > 0){
                if(!K::M('member/gold')->update($this->uid, -$detail['gold'], "看标：".$detail['title'])) $this->err->add('扣费失败', 201)->response();
            }
            $data = array(
               'tenders_id' => $id,
               'company_id' =>  $this->company['company_id'],
               'dateline'   =>  __TIME,
               'create_ip'  =>  __IP 
            );
            if($look_id = K::M('tenders/look')->create($data)){
                K::M('tenders/tenders')->update_count($id,'num2');
                $this->err->add('看标成功！');
            }else{
                $this->err->add('更新数据失败！');  
            }               
        }       
    }
    public function tenderview($id = 0){
         $this->check_company();
         if(!($id = (int)$id) && !($id = (int)$this->GP('id'))){
            $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('tenders/tenders')->detail($id)){
            $this->tmpl = 'mobile:error.html';
        }elseif(!$detail['audit']){
           $this->tmpl = 'mobile:error.html';
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
            $this->pagedata['look'] = K::M('tenders/look')->items(array('tenders_id'=>$id,'company_id'=>  $this->company['company_id']));
            $this->tmpl = 'mobile:ucenter/tendersview.html';
        }
    }
    
    public function kehu($page =1){
        $this->check_company();
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 10;
        $tenders_ids = array();
        $filter['company_id'] = $this->company['company_id'];
        if($items = K::M('tenders/look')->items($filter, array('look_id'=>'desc'), $page, $limit, $count)){
            foreach($items as $k=>$v){
                $tenders_ids[$v['tenders_id']] = $v['tenders_id'];
                $items[$k]['create_ip'] = $v['create_ip'].'('. K::M("misc/location")->location($v['create_ip']) .')';                
            }
        }
        $this->pagedata['tenders'] = K::M('tenders/tenders')->items_by_ids($tenders_ids);
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['nextpage'] = $this->mklink('ucenter:kehuloaddata',array('{page}'),array(),false);
        $this->tmpl = 'mobile:ucenter/kehu.html';
    }
    
    public function kehuloaddata($page=1){
        $this->check_company();
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 10;
        $tenders_ids = array();
        $filter['company_id'] = $this->company['company_id'];
        if($items = K::M('tenders/look')->items($filter, array('look_id'=>'desc'), $page, $limit, $count)){
            foreach($items as $k=>$v){
                $tenders_ids[$v['tenders_id']] = $v['tenders_id'];
                $items[$k]['create_ip'] = $v['create_ip'].'('. K::M("misc/location")->location($v['create_ip']) .')';                
            }
            $this->pagedata['tenders'] = K::M('tenders/tenders')->items_by_ids($tenders_ids);
            $this->pagedata['items'] = $items;
            $this->pagedata['pager'] = $pager;
            $this->tmpl = 'mobile:ucenter/kehuloaddata.html';
        }
        else die('0');  
    }
    
    public function tracking($look_id =1){
        $this->check_company();
        if(!$look_id){
           $this->tmpl = 'mobile:error.html';
        }
        elseif(!$look = K::M('tenders/look')->detail($look_id)){
          $this->tmpl = 'mobile:error.html';
        }elseif($look['company_id'] != $this->company['company_id']){
          $this->tmpl = 'mobile:error.html';
        }else if(!$detail = K::M('tenders/tenders')->detail($look['tenders_id'])){
           $this->tmpl = 'mobile:error.html';
        }else{
            if($home_id = (int)$detail['home_id']){
                $this->pagedata['home'] = K::M('home/main')->detail($home_id);
            }
            $this->pagedata['cityList'] = K::M("data/city")->fetch_all();
            $this->pagedata['areaList'] = K::M("data/area")->fetch_all();
            $this->pagedata['setting'] = K::M('tenders/setting')->fetch_all_setting();
            $this->pagedata['type']  = K::M('tenders/setting')->get_type();
            $this->pagedata['detail'] = $detail;            
            $this->pagedata['tracking'] = K::M('tenders/tracking')->items(array('look_id'=>$look_id), null, 1, 10, $count); 
            $this->pagedata['look_id'] = $look_id;
            $this->pagedata['look'] = $look;
            $this->tmpl = 'mobile:ucenter/tracking.html';
        }      
        
    }
    
    public function trackinglog($look_id= 0){
        $this->check_company();
        if(!$look_id){
             $this->err->add('没有您的标', 211);
        }
        elseif(!$look = K::M('tenders/look')->detail($look_id)){
            $this->err->add('没有您的标', 211);
        }elseif($look['company_id'] != $this->company['company_id']){
            $this->err->add('你妹啊', 211);
        }else{
             if(!$post = $this->GP('data')){
                    $this->err->add('非法的数据提交', 201);
            }else{
                $data = array(
                    'create_ip' => __IP,
                    'dateline'  => __TIME,
                    'look_id'   => $look_id,
                    'content'   => $post['content'],
                );
      
                if($tracking_id = K::M('tenders/tracking')->create($data)){
                    $this->err->add('添加内容成功');
                }
            } 
        }
        
    }

     public function designer($page = 1){
        $this->check_login();
 
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 20;
        $filter['designer_id'] = $this->uid;
        $items = K::M('designer/yuyue')->items($filter, array('yuyue_id'=>'desc'), $page, $limit, $count);
         
       
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['nextpage'] = $this->mklink('ucenter:designerloaddata', array('{page}'),array(),false);
        $this->tmpl = 'mobile:ucenter/designer.html';
        
    }
    
    public function designerloaddata($page=1){
        $this->check_login();
        
        $filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 20;
        $filter['designer_id'] = $this->uid;
        $items = K::M('designer/yuyue')->items($filter, array('yuyue_id'=>'desc'), $page, $limit, $count);
        if($items){
           
            $this->pagedata['items'] = $items;
            $this->tmpl = 'mobile:ucenter/designerloaddata.html';
        }else die('0');
        
    }
    
    public function order($page=1)
    {
         $this->check_shop();
        $shop = $this->shop;
        $pager = $filter = array();
        
        $pager['page'] = $page = max((int)$page, 1);
        $pager['limit'] = $limit = 10;
        $pager['count'] = $count = 0;
        $filter['shop_id'] = $shop['shop_id'];
        $filter['closed'] = 0;
        if($items = K::M('trade/order')->items($filter, array('order_id'=>'desc'), $page, $limit, $count)){
            
            $order_ids = $shop_ids = array();
            foreach($items as $k=>$v){
                $order_ids[$v['order_id']] = $v['order_id'];
                $shop_ids[$v['shop_id']] = $v['shop_id'];
            }
            if($order_ids){
                $product_ids = array();
                if($product_list = K::M('trade/product')->items(array('order_id'=>$order_ids), null, 1, 1000)){
                    foreach($product_list as $v){
                        $product_ids[$v['product_id']] = $v['product_id'];
                    }
                }
                if($product_ids){
                    if($org_products = K::M('product/product')->items_by_ids($product_ids)){
                        foreach($product_list as $k=>$v){
                            $product_list[$k] = array_merge((array)$org_products[$v['product_id']], $v);
                        }
                    }
                }
                $this->pagedata['product_list'] = $product_list;
            }
            if($shop_ids){
                $this->pagedata['shop_list'] = K::M('shop/shop')->items_by_ids($shop_ids);
            }
            $this->pagedata['items'] = $items;
        }
        $this->pagedata['pager'] = $pager;
        $this->pagedata['nextpage'] = $this->mklink('ucenter:orderloaddata',array('{page}'),array(),false);
        $this->tmpl = 'mobile:ucenter/order.html';
    }
    
    public function orderloaddata($page=1)
    {
        $this->check_shop();
        $shop = $this->shop;
        $pager = $filter = array();
        
        $pager['page'] = $page = max((int)$page, 1);
        $pager['limit'] = $limit = 10;
        $pager['count'] = $count = 0;
        $filter['shop_id'] = $shop['shop_id'];
        $filter['closed'] = 0;
        if($items = K::M('trade/order')->items($filter, array('order_id'=>'desc'), $page, $limit, $count)){
            
            $order_ids = $shop_ids = array();
            foreach($items as $k=>$v){
                $order_ids[$v['order_id']] = $v['order_id'];
                $shop_ids[$v['shop_id']] = $v['shop_id'];
            }
            if($order_ids){
                $product_ids = array();
                if($product_list = K::M('trade/product')->items(array('order_id'=>$order_ids), null, 1, 1000)){
                    foreach($product_list as $v){
                        $product_ids[$v['product_id']] = $v['product_id'];
                    }
                }
                if($product_ids){
                    if($org_products = K::M('product/product')->items_by_ids($product_ids)){
                        foreach($product_list as $k=>$v){
                            $product_list[$k] = array_merge((array)$org_products[$v['product_id']], $v);
                        }
                    }
                }
                $this->pagedata['product_list'] = $product_list;
            }
            if($shop_ids){
                $this->pagedata['shop_list'] = K::M('shop/shop')->items_by_ids($shop_ids);
            }
            $this->pagedata['items'] = $items;
            $this->pagedata['pager'] = $pager;
 
            $this->tmpl = 'mobile:ucenter/orderloaddata.html';
        }else die('0');
        
    }
    public function orderupdate($status, $order_no=null)
    {
        $this->check_shop();
        $shop = $this->shop;
        if(!in_array($status, array('ship', 'cancel'))){
            $this->err->add('状态不在允许的范围', 211);
        }else if(!is_numeric($order_no)){
            $this->err->add('状态不在允许的范围', 211);
        }else if(!$order = K::M('trade/order')->detail_by_no($order_no)){
            $this->err->add('订单不存在或已经删除', 211);
        }else if($order['shop_id'] != $shop['shop_id']){
            $this->err->add('您没有权限操作该订单', 211);
        }else if($order['order_status'] < 0){
            $this->err->add('订单已经取消，不可操作', 212);
        }else if($order['order_status'] == 2){
            $this->err->add('订单已完成，不可操作', 213);
        }else if('cancel' == $status){
            if($order['pay_status']){
                $this->err->add('订单已支付，不可取消', 214);
            }else if($order['order_status'] > 0){
                $this->err->add('订单已发货不可取消', 215);
            }else {
                if(K::M('trade/order')->update($order['order_id'], array('order_status'=>-2), true)){
                    $this->err->add('取消订单成功');
                }
            }
        }else if('ship' == $status){
            if($order['order_status'] == 1){
                $this->err->add('订单已经发货,不可重复发货', 214);
            }else if(empty($order['order_status'])){
                if(K::M('trade/order')->update($order['order_id'], array('order_status'=>1), true)){
                    $this->err->add('订单发货成功');
                }
            }
        }
    }
    
    
}