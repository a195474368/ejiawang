<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: company.ctl.php 3587 2014-03-04 16:02:56Z youyi $
 */
Import::C('ucenter/ucenter');

class Ctl_Ucenter_Company extends Ctl_Ucenter {

    protected $_allow_fields = '';
    private $_company_info_allow_fields = 'city_id,area_id,name,sort_name,slogan,contact,tel,addr,qq,mobile,lng,lat';
    private $_company_edit_allow_fields = 'area_id,name,sort_name,slogan,contact,tel,addr,qq,mobile,lng,lat';

    public function template()
    {
        $this->check_company();
        $theme = K::M('system/theme')->default_theme();
       // $filename  = __TPL_DIR .$theme['theme'].'/company/config.php';
        $filename = __CFG::TMPL_DIR . $theme['theme'] . '/company/config.php';
        if(!file_exists($filename)){
            $filename = __CFG::TMPL_DIR . 'default/company/config.php';
        }
        if (!file_exists($filename)) {
            $this->err->add('网站配置存在问题', 201);
        }
        else {
            $template_list = require $filename;
            $companyex  = K::M('company/companyex')->detail($this->company['company_id']);
            if ($template = $this->checksubmit('template')) {
               if(!isset($template_list[$template])){
                    $this->err->add('请选择正确的模板', 201);
               }elseif($companyex['template_id'] == $template){
                    $this->err->add('更改成功');
               }else{
                   K::M('company/companyex')->update($this->company['company_id'],array('template_id'=>$template));
                   $this->err->add('更改成功');
               }                
            }
            else {
                
                $this->pagedata['companyex'] = $companyex;
                $this->pagedata['template_list'] = $template_list;
                $this->tmpl = 'ucenter/company/template.html';
            }
        }
    }

    public function index()
    {
        $this->check_company();
        if ($data = $this->checksubmit('data')) {
            if (!$data = $this->check_fields($data, $this->_company_edit_allow_fields)) {
                $this->err->add('非法的数据提交', 201);
            }
            else {
                if ($_FILES['data']) {
                    foreach ($_FILES['data'] as $k => $v) {
                        foreach ($v as $kk => $vv) {
                            $attachs[$kk][$k] = $vv;
                        }
                    }
                    $cfg = K::$system->config->get('attach');

                    $oImg = K::M('image/gd');
                    $upload = K::M('magic/upload');
                    foreach ($attachs as $k => $attach) {
                        if ($attach['error'] == UPLOAD_ERR_OK) {
                            if ($a = $upload->upload($attach, 'company')) {
                                $data[$k] = $a['photo'];
                                if ($k === 'logo') {
                                    $size['photo'] = $cfg['companydecorate1']['photo'] ? $cfg['companydecorate1']['photo'] : 200;
                                }
                                else {
                                    $size['photo'] = $cfg['companydecorate2']['photo'] ? $cfg['companydecorate2']['photo'] : 200;
                                }

                                $oImg->thumbs($a['file'], array($size['photo'] => $a['file']));
                            }
                        }
                    }
                }

                if (K::M('company/company')->update($this->company['company_id'], $data)) {
                    if ($attr = $this->GP('attr')) {
                        K::M('company/attr')->update($this->company['company_id'], $attr);
                    }
                    if ($ex = $this->GP('ex')) {

                        K::M('company/companyex')->update($this->company['company_id'], $ex);
                    }
                    $this->err->add('修改内容成功');
                }
            }
        }
        else {

            $this->pagedata['attr'] = K::M('company/attr')->attrs_ids_by_company($this->company['company_id']);
            $this->pagedata['detailex'] = K::M('company/companyex')->detail($this->company['company_id']);
            $this->tmpl = 'ucenter/company/index.html';
        }
    }

    public function info()
    {
        if ($data = $this->checksubmit('data')) {

            if (!$data = $this->check_fields($data, $this->_company_info_allow_fields)) {
                $this->err->add('非法的数据提交', 201);
            }
            else {
                if ($_FILES['data']) {
                    foreach ($_FILES['data'] as $k => $v) {
                        foreach ($v as $kk => $vv) {
                            $attachs[$kk][$k] = $vv;
                        }
                    }
                    $cfg = K::$system->config->get('attach');
                    $oImg = K::M('image/gd');
                    $upload = K::M('magic/upload');
                    foreach ($attachs as $k => $attach) {
                        if ($attach['error'] == UPLOAD_ERR_OK) {
                            if ($a = $upload->upload($attach, 'company')) {
                                $data[$k] = $a['photo'];
                                if ($k === 'logo') {
                                    $size['photo'] = $cfg['companydecorate1']['photo'] ? $cfg['companydecorate1']['photo'] : 200;
                                }
                                else {
                                    $size['photo'] = $cfg['companydecorate2']['photo'] ? $cfg['companydecorate2']['photo'] : 200;
                                }

                                $oImg->thumbs($a['file'], array($size['photo'] => $a['file']));
                            }
                        }
                    }
                }
                $data['uid'] = $this->uid;

                if ($company_id = K::M('company/company')->create($data)) {
                    if ($attr = $this->GP('attr')) {
                        K::M('company/attr')->update($company_id, $attr);
                    }
                    if ($ex = $this->GP('ex')) {
                        $ex['company_id'] = $company_id;
                        K::M('company/companyex')->create($ex);
                    }
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', $this->mklink('ucenter/company:index', array(), array(), true));
                }
            }
        }
        else {
            $this->tmpl = 'ucenter/company/info.html';
        }
    }

    public function dianping($page = 1)
    {
        $this->check_company();
        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 30;
        $filter['company_id'] = $this->company['company_id'];
        if ($items = K::M('company/dianping')->items($filter, null, $page, $limit, $count)) {
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}'), array(), true), array());
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->system->config->get('company_dianping');
        $this->tmpl = 'ucenter/company/dianping.html';
    }

    public function dianpingReply($id = 0)
    {
        $this->check_company();
        if (!($id = (int) $id) && !($id = (int)$this->GP('id'))) {
            $this->err->add('未指定要修改的内容ID', 211);
        }
        else if (!$detail = K::M('company/dianping')->detail($id)) {
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }
        else if ($detail['company_id'] != $this->company['company_id']) {

            $this->err->add('请尊重开发人员的智商', 212);
        }
        else if ($this->checksubmit('reply')) {
            if (!$reply = $this->GP('reply')) {
                $this->err->add('非法的数据提交', 201);
            }
            else {
                $data = array(
                    'reply' => $reply,
                    'reply_time' => __TIME,
                    'reply_ip' => __IP
                );
                if (K::M('company/dianping')->update($id, $data)) {
                    $this->err->add('回复评论成功！');
                    $this->err->set_data('forward', $this->mklink('ucenter/company:dianping', array(), array(), true));
                }
            }
        }
        else {
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'ucenter/company/dianping_reply.html';
        }
    }

}
