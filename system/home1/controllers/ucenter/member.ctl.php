<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: member.ctl.php 4187 2014-03-26 09:04:27Z langzhong $
 */
Import::C('ucenter/ucenter');

class Ctl_Ucenter_Member extends Ctl_Ucenter {

    protected $_allow_fields = 'mail,gender,from,mobile,Y,M,D,city_id,realname';

    public function index()
    {
        if($this->MEMBER['from'] == 'company'){
            $this->check_company();
        }else if($this->MEMBER['from'] == 'shop'){
            $this->ucenter_shop();
        }else if($this->MEMBER['from'] == 'designer'){
            $this->check_designer();
        }
        $this->tmpl = 'ucenter/member/index.html';
    }

    public function info()
    {
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
            $this->tmpl = 'ucenter/member/info.html';
        }
    }

    public function passwd()
    {
        if($account = $this->checksubmit('account')){
            if(md5($account['old_passwd']) != $this->MEMBER['passwd']){
                $this->err->add('原密码不正确', 211);
            }else if($account['passwd'] != $account['confirm_passwd']){
                $this->err->add('两次输入的密码不相同', 212);
            }else if($this->auth->update_passwd($account['passwd'], false)){
                $this->err->add('修改密码成功');
            }
        }else{
           $this->tmpl = 'ucenter/member/passwd.html';
        }        
    }

    public function mail()
    {
        if($account = $this->checksubmit('account')){
            if(md5($account['passwd']) != $this->MEMBER['passwd']){
                $this->err->add('登录密码不正确', 211);
            }else if($account['new_mail'] == $this->MEMBER['mail']){
                $this->err->add('新老邮箱一致不用修改', 211);
            }else if($mail = K::M('member/account')->check_mail($account['new_mail'])){
                if($this->auth->update_mail($mail, false)){
                    $this->err->add('修改密码成功');
                }
            }
        }else{
           $this->tmpl = 'ucenter/member/mail.html';
        }          
    }

    public function mobile()
    {
        if ($data = $this->checksubmit('data')) {

            if (K::M('system/integral')->check('mobile', $this->MEMBER) === false) {
                $this->err->add('很抱歉您的账户余额不足！', 201);
            }
            elseif (!$data['code']) {
                $this->err->add('验证码不能为空', 201);
            }
            else {
                if(K::M('member/magic')->verify_mobile($this->uid,$data['code'])){
                     K::M('system/integral')->commit('mobile',  $this->MEMBER,'短信认证');
                }               
            }
        }else{
            $this->tmpl = 'ucenter/member/mobile.html';
        }
    }
    
    public function email(){
        if ($this->MEMBER['verify_mail']) {
            $this->err->add('您的邮件已经通过认证', 201);
            $this->err->set_data('forward', $this->mklink('ucenter/member:index') );
        }else{
            if(!K::M('member/magic')->sendmail($this->uid)){
                $this->err->add('邮件发送失败', 201);
                $this->err->set_data('forward', $this->mklink('ucenter/member:info') );
            }else{
                $this->tmpl = 'ucenter/member/email.html';
            }
        }        
    }    
    
    public function code()
    {
        K::M('member/magic')->sendmsg($this->uid);
    }

    public function verify()
    {
        $detail = K::M('member/verify')->detail($this->uid);
        if ($data = $this->checksubmit('data')) {
            if ($this->MEMBER['verify_name']) {
                $this->err->add('您已经通过实名认证不能修改', 211);
            }
            else if (!$data = $this->check_fields($data, 'name,mobile,id_number,id_photo')) {
                $this->err->add('非法的数据提交', 212);
            }
            else {
                if ($attach = $_FILES['id_photo']) {
                    if (UPLOAD_ERR_OK == $attach['error']) {
                        if ($a = K::M('magic/upload')->upload($attach, 'memberVerify')) {
                            $data['id_photo'] = $a['photo'];
                        }
                    }
                }
                if (empty($detail)) {
                    $data['uid'] = $this->uid;
                    $data['verify'] = 0;
                    if (K::M('member/verify')->create($data)) {
                        $this->err->add('提交申请成功');
                    }
                } else {
                    $data['request_ip'] = __IP;
                    $data['request_time'] = __CFG::TIME;
                    $data['verify'] = 0;
                    if (K::M('member/verify')->update($this->uid, $data)) {
                        $this->err->add('重新提交申请成功');
                    }
                }
            }
        }
        else {
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'ucenter/member/verify.html';
        }
    }

    public function face()
    {
        $this->tmpl = 'ucenter/member/face.html';
    }

    public function upload()
    {
        if(!$data = file_get_contents("php://input")){
            $this->err->add('图片数据上传失败',201);
        }else if(K::M('member/face')->update_face($this->uid, null, $data)){
            $this->err->add('更新会员头像成功');
        }
        $this->err->json();
    }


    public function gold()
    {
        $this->system->config->get('gold');
        $this->pagedata['pay_list'] = K::M('payment/payment')->fetch_all();
        $this->tmpl = 'ucenter/member/gold.html';
    }

    public function logs($type=null, $page=0)
    {
        $filter = $pager = array();
        if(is_numeric($type)){
            $page = $type;
            $type = null;
        }else if($type == 'in'){
            $filter['number'] = ">:0";
        }else if($type == 'out'){
            $filter['number'] = "<:0";
        }
        $pager['type'] = $type;
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 20;
        $filter['uid'] = $this->uid;
        $filter['from'] = 'gold';
        if ($items = K::M('member/log')->items($filter, null, $page, $limit, $count)) {
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('ucenter/member:logs', array('{page}')));
            $this->pagedata['items'] = $items;
        }
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'ucenter/member/logs.html';
    }

}
