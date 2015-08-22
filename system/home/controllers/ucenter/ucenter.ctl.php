<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: ucenter.ctl.php 2430 2013-12-21 12:11:29Z youyi $
 */

class Ctl_Ucenter extends Ctl 
{
    
    protected $ctlmaps = array();

    public function __construct(&$system)
    {
        parent::__construct($system);
        $this->ctlmaps = include(dirname(__FILE__).'/ctlmaps.php');
        $ctlmap = $this->_check_priv($this->MEMBER['from']);
        $this->request['ctlmap'] = $ctlmap;
        $this->pagedata['menu_list'] = $this->_parse_menu($this->MEMBER['from']);
    }

    protected function check_company()
    {
        if($this->MEMBER['from'] != 'company'){
            $this->err->add('您的帐号不是装修公司类型', 211);
        }else if($this->company = K::M('company/company')->company_by_uid($this->uid)){
            $this->pagedata['company'] = $this->company;
            return $this->company;
        }else{
            $this->tmpl = 'ucenter/company/info.html';
        }
        $this->response();   
    }

    public function check_shop($shop_id=null)
    {
        if($this->MEMBER['from'] != 'shop'){
            $this->err->add('您的帐号不是商家类型', 211);
        }else if($this->shop = K::M('shop/shop')->shop_by_uid($this->uid)){
            $this->pagedata['shop'] = $this->shop;
            return $this->shop;
        }else{
            $this->tmpl = 'ucenter/shop/info.html';
        }
        $this->response();    
    }

    public function ucenter_shop()
    {
        if($this->MEMBER['from'] != 'shop'){
            $this->err->add('您的帐号不是商家类型', 211);
        }else if($this->shop = K::M('shop/shop')->shop_by_uid($this->uid)){
            $this->pagedata['shop'] = $this->shop;
            return $this->shop;
        }else{
            $this->tmpl = 'ucenter/shop/info.html';
        }
        $this->response();
    }

    public function check_designer()
    {
        if($this->MEMBER['from'] != 'designer'){
            $this->err->add('您的帐号不是设计师类型', 211);
        }
        else if($this->designer = K::M('designer/designer')->detail($this->uid)){
            $this->pagedata['designer'] = $this->designer;
            return $this->designer;  
        }
        else{
            $this->tmpl = 'ucenter/designer/info.html';
        }
        $this->response();
    }

    protected function _check_priv($from='member')
    {
        $this->check_login();
        $request = $this->request;
        foreach($this->ctlmaps as $k=>$v){
          if($v['priv']){
                if(!in_array($from, explode(',', $v['priv']))){
                    continue;
                }
            }            
            foreach ($v['items'] as $kk=>$vv) {
                if($vv['ctl'] == $request['ctl'].':'.$request['act']){
                    if($vv['priv']){
                        if(!in_array($from, explode(',', $vv['priv']))){
                            break;
                        }
                    }
                    return $vv;
                }
            }
        }
        if($this->request['XREQ'] || $this->request['MINI']){
            $this->err->add('很抱歉，您没有权限访问', 201);
        }else{
            $this->tmpl = 'ucenter/nopriv.html';
        }
        $this->err->response();
        exit();
    }

    protected function _parse_menu($from)
    {
        $menu_list = array();
        foreach($this->ctlmaps as $k=>$v){
            if($v['menu'] && $v['priv']){
                $priv = explode(',', $v['priv']);
                if(in_array($from, $priv)){
                    $v['menu'] = true;
                }else{
                    $v['menu'] = false;
                }
            }
            if($v['menu']){
                $items = array();
                foreach ($v['items'] as $kk=>$vv) {
                    if($vv['menu'] && $vv['priv']){
                        $vv['priv'] = explode(',', $vv['priv']);
                        if(!in_array($from, $vv['priv'])){
                           continue;
                        }
                    }
                     $items[] = $vv;
                }
                if($v['items'] = $items){
                    $menu_list[$k] = $v;
                }
            }
        }
        return $menu_list;
    }
}