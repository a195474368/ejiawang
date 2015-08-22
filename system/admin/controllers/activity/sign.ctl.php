<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<ijianghu@qq.com>
 * $Id: sign.ctl.php 3480 2014-02-26 01:48:51Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Activity_Sign extends Ctl
{
    
    public function index($activityId = 0,$page=1)
    {
       
        
    	$filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 50;
        if($SO = $this->GP('SO')){
            $pager['SO'] = $SO;
            if($SO['id']){$filter['id'] = $SO['id'];}
            $activityId =  $SO['activity_id'];
            if($SO['uid']){$filter['uid'] = $SO['uid'];}
            if($SO['name']){$filter['name'] = "LIKE:%".$SO['name']."%";}
            if($SO['addr']){$filter['addr'] = "LIKE:%".$SO['addr']."%";}
            if($SO['tel']){$filter['tel'] = "LIKE:%".$SO['tel']."%";}
            if($SO['email']){$filter['email'] = "LIKE:%".$SO['email']."%";}
            if($SO['qq']){$filter['qq'] = "LIKE:%".$SO['qq']."%";}
        }       
        if(empty($activityId))  $this->err->add('非法的数据提交', 201)->show();
        $activity = K::M('activity/main')->detail($activityId);
        if(empty($activity)) $this->err->add('非法的数据提交', 201)->show('?activity/main.html');
        
        //搜索的时候必备
        $filter['activity_id'] = $activityId;
         
        if($items = K::M('activity/sign')->items($filter, null, $page, $limit, $count)){
            $pager['count'] = $count;            
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array($activityId, '{page}')), array('SO'=>$SO));
            foreach($items as $k=>$v){
                $items[$k]['ip'] = $v['ip'].'('. K::M("misc/location")->location($v['ip']) .')';
                $items[$k]['dateline'] = date('Y-m-d H:i:s',$v['dateline']) ;            
            }         
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->pagedata['activityid'] = $activityId;
        $this->pagedata['activity'] = $activity;
        $this->tmpl = 'admin:activity/sign/items.html';
    }

    public function so($activityId=0)
    {
        $this->pagedata['activityid'] = $activityId;
        $this->tmpl = 'admin:activity/sign/so.html';
    }
    
    
    public function download($activityId=0)
	{
        $keys = array('ID','活动ID','UID','姓名','地址','电话','EMAIL','QQ','参加人数','IP来源','报名时间');
        $items = K::M('activity/sign')->items_by_activity_id($activityId);
        K::M('dataio/xls')->export($keys,$items,'活动报名');
        
    }


    public function create($activityId=0)
    {
        if($this->checksubmit()){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{
                $activityId = $data['activity_id'];
                if(empty($activityId))  $this->err->add('非法的数据提交', 201)->show();
                $activity = K::M('activity/main')->detail($activityId);
                if(empty($activity)) $this->err->add('非法的数据提交', 201)->show('?activity/main.html');
                if($id = K::M('activity/sign')->create($data)){
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', '?activity/sign-index-'.$activityId.'.html');
                }
            } 
        }else{
           $this->pagedata['activityid'] = $activityId;
           $this->tmpl = 'admin:activity/sign/create.html';
        }
    }

    public function edit($id=null)
    {
        if(!($id = (int)$id) && !($id = $this->GP('id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('activity/sign')->detail($id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else if($this->checksubmit('data')){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{

                if(K::M('activity/sign')->update($id, $data)){
                    $this->err->add('修改内容成功');
                }  
            } 
        }else{
        	$this->pagedata['detail'] = $detail;
        	$this->tmpl = 'admin:activity/sign/edit.html';
        }
    }

    public function delete($id )
    {


        if($id = (int)$id){
            if(K::M('activity/sign')->delete($id)){
                $this->err->add('删除成功');
            }
        }else if($ids = $this->GP('id')){
            if(K::M('activity/sign')->delete($ids)){
                $this->err->add('批量删除成功');
            }
        }else{
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}