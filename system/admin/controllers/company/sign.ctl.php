<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: sign.ctl.php 3765 2014-03-11 16:10:19Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Company_Sign extends Ctl
{
    
    public function index($youhui_id,$page=1)
    {
        if(empty($youhui_id)){
             $this->err->add('未指定要修改的内容ID', 211);
        }elseif(!$youhui = K::M('company/youhui')->detail($youhui_id)){
             $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else{
            $filter = $pager = array();
            $pager['page'] = max(intval($page), 1);
            $pager['limit'] = $limit = 50;
            if($SO = $this->GP('SO')){
                $pager['SO'] = $SO;

                if($SO['uid']){$filter['uid'] = $SO['uid'];}
                if($SO['mobile']){$filter['mobile'] = "LIKE:%".$SO['mobile']."%";}
                if($SO['cantact']){$filter['cantact'] = "LIKE:%".$SO['cantact']."%";}
                if($SO['create_ip']){$filter['create_ip'] = "LIKE:%".$SO['create_ip']."%";}
            }
            $filter['youhui_id'] = $youhui_id;

              $uids = array();
            if($items = K::M('company/sign')->items($filter, null, $page, $limit, $count)){

                foreach($items as $k=>$v){
                    $uids[] = $v['uid'];
                    $items[$k]['create_ip'] = $v['create_ip'].'('. K::M("misc/location")->location($v['create_ip']) .')';
                }
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array($youhui_id,'{page}')), array('SO'=>$SO));
            }
            $this->pagedata['userList'] = K::M('member/view')->items_by_ids($uids);
            $this->pagedata['items'] = $items;
            $this->pagedata['pager'] = $pager;
            $this->pagedata['youhui'] =  $youhui;
            $this->pagedata['youhui_id'] = $youhui_id;
            $this->tmpl = 'admin:company/sign/items.html';
        }
    }

    public function so($youhui_id)
    {   
        if(empty($youhui_id)){
             $this->err->add('未指定要修改的内容ID', 211);
        }elseif(!$youhui = K::M('company/youhui')->detail($youhui_id)){
             $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else{
            $this->pagedata['youhui_id'] = $youhui_id;
            $this->tmpl = 'admin:company/sign/so.html';
        }
    }

    public function create($youhui_id)
    {   
        if(empty($youhui_id)){
             $this->err->add('未指定要修改的内容ID', 211);
        }elseif(!$youhui = K::M('company/youhui')->detail($youhui_id)){
             $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else{
            if($this->checksubmit()){
                if(!$data = $this->GP('data')){
                    $this->err->add('非法的数据提交', 201);
                }else{
                    $data['youhui_id'] = $youhui_id;
                    $data['dateline'] = __TIME;
                    $data['create_ip'] = __IP;

                    if($sign_id = K::M('company/sign')->create($data)){
                        $this->err->add('添加内容成功');
                        $this->err->set_data('forward', '?company/sign-index-'.$youhui_id.'.html');
                    }
                } 
            }else{
               $this->pagedata['youhui_id'] = $youhui_id;
               $this->tmpl = 'admin:company/sign/create.html';
            }
        }
    }

    public function edit($sign_id=null)
    {
        if(!($sign_id = (int)$sign_id) && !($sign_id = $this->GP('sign_id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('company/sign')->detail($sign_id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else if($this->checksubmit('data')){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{

                if(K::M('company/sign')->update($sign_id, $data)){
                    $this->err->add('修改内容成功');
                }  
            } 
        }else{
            if($uid = (int)$detail['uid']){
                $this->pagedata['member'] = K::M('member/view')->detail($uid);
            }
        	$this->pagedata['detail'] = $detail;
        	$this->tmpl = 'admin:company/sign/edit.html';
        }
    }

    public function delete($sign_id=null)
    {
        if($sign_id = (int)$sign_id){
            if(K::M('company/sign')->delete($sign_id)){
                $this->err->add('删除成功');
            }
        }else if($ids = $this->GP('sign_id')){
            if(K::M('company/sign')->delete($ids)){
                $this->err->add('批量删除成功');
            }
        }else{
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}