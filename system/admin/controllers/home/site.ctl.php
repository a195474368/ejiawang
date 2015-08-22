<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: site.ctl.php 3828 2014-03-13 10:33:56Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Home_Site extends Ctl
{
    
    public function index($page=1)
    {
    	$filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 50;
        if($SO = $this->GP('SO')){
            $pager['SO'] = $SO;
            if($SO['site_id']){$filter['site_id'] = $SO['site_id'];}
        if($SO['city_id']){$filter['city_id'] = $SO['city_id'];}
        if($SO['area_id']){$filter['area_id'] = $SO['area_id'];}
        if($SO['home_id']){$filter['home_id'] = $SO['home_id'];}
        if($SO['company_id']){$filter['company_id'] = $SO['company_id'];}
        if($SO['status']){$filter['status'] = $SO['status'];}
        }
        if($items = K::M('home/site')->items($filter, null, $page, $limit, $count)){
            $home_ids = $company_ids = array();
             foreach($items as $k=>$v){
                if($v['home_id']){
                    $home_ids[$v['home_id']] = $v['home_id'];        
                }
                if($v['company_id']){
                    $company_ids[$v['company_id']] = $v['company_id'];
                }
               
            }
            if(!empty($home_ids)){
                $this->pagedata['home_list'] = K::M('home/main')->items_by_ids($home_ids);
            }              
            if(!empty($company_ids)){
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            }            
        
        	$pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array('SO'=>$SO));
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['status'] = K::M('home/site')->get_status();
        $this->pagedata['cityList'] = K::M("data/city")->fetch_all();
        $this->pagedata['areaList'] = K::M("data/area")->fetch_all();
        $this->tmpl = 'admin:home/site/items.html';
    }

    public function so()
    {   
        $this->pagedata['status'] = K::M('home/site')->get_status();
        $this->tmpl = 'admin:home/site/so.html';
    }



    public function create()
    {
        if($this->checksubmit()){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{
        if($_FILES['data']){
            foreach($_FILES['data'] as $k=>$v){
                foreach($v as $kk=>$vv){
                    $attachs[$kk][$k] = $vv;
                }
            }
   
            $cfg = K::$system->config->get('attach');
            $oImg = K::M('image/gd');
            $upload = K::M('magic/upload');
            foreach($attachs as $k=>$attach){
                if($attach['error'] == UPLOAD_ERR_OK){
                    if($a = $upload->upload($attach, 'home')){
                        $data[$k] = $a['photo'];
                      
                        $size['photo'] = $cfg['site']['photo'] ? $cfg['site']['photo'] : 200;
                        $oImg->thumbs($a['file'], array($size['photo'] => $a['file']));
                    }
                }
            }
        }     
           
                $data['create_ip'] = __IP;
                if($site_id = K::M('home/site')->create($data)){
                    if ($company_id = (int) $data['company_id']) {
                        K::M('company/company')->update_count($company_id, 'site_num', 1);
                        K::M('company/company')->update($company_id, array('site_time'=>__TIME));
                    }
                    if ($home_id = (int) $data['home_id']) {
                        K::M('home/main')->update_count($home_id, 'site_num', 1);
                    }
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', '?home/site-index.html');
                }
            } 
        }else{
           
           $this->pagedata['status'] = K::M('home/site')->get_status(); 
           $this->tmpl = 'admin:home/site/create.html';
        }
    }

    public function edit($site_id=null)
    {
        if(!($site_id = (int)$site_id) && !($site_id = $this->GP('site_id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('home/site')->detail($site_id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else if($this->checksubmit('data')){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{
        if($_FILES['data']){
            foreach($_FILES['data'] as $k=>$v){
                foreach($v as $kk=>$vv){
                    $attachs[$kk][$k] = $vv;
                }
            }
            $cfg = K::$system->config->get('attach');
            $oImg = K::M('image/gd');
            $upload = K::M('magic/upload');
            foreach($attachs as $k=>$attach){
                if($attach['error'] == UPLOAD_ERR_OK){
                    if($a = $upload->upload($attach, 'home')){
                        $data[$k] = $a['photo'];
                        $size['photo'] = $cfg['site']['photo'] ? $cfg['site']['photo'] : 200;
                        $oImg->thumbs($a['file'], array($size['photo'] => $a['file']));
                    }
                }
            }
        }

                if(K::M('home/site')->update($site_id, $data)){
                    if($detail['home_id'] != $data['home_id']){
                       if($home_id = (int) $data['home_id']){
                           K::M('home/main')->update_count($home_id, 'site_num', 1);
                       }
                       if($home_id = (int)$detail['home_id']){
                            K::M('home/main')->update_count($home_id, 'site_num', -1);
                       }
                   }
                   if($detail['company_id'] != $data['company_id']){
                       if($company_id = (int) $data['company_id']){
                           K::M('company/company')->update_count($company_id, 'site_num', 1);
                       }
                       if($company_id = (int)$detail['company_id']){
                            K::M('company/company')->update_count($company_id, 'site_num', -1);
                       }
                   }
                    $this->err->add('修改内容成功');
                }  
            } 
        }else{
             if($company_id = $detail['company_id']){
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }

            if($home_id = (int)$detail['home_id']){
                $this->pagedata['home'] = K::M('home/main')->detail($home_id);
            }
        	$this->pagedata['detail'] = $detail;
            $this->pagedata['status'] = K::M('home/site')->get_status();
        	$this->tmpl = 'admin:home/site/edit.html';
        }
    }

    public function delete($site_id=null)
    {
        if($site_id = (int)$site_id){
            if(K::M('home/site')->delete($site_id)){
                $this->err->add('删除成功');
            }
        }else if($ids = $this->GP('site_id')){
            if(K::M('home/site')->delete($ids)){
                $this->err->add('批量删除成功');
            }
        }else{
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}