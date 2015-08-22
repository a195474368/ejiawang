<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: theme.ctl.php 2961 2014-01-10 01:58:09Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_System_Theme extends Ctl
{
    
    public function index($page=1)
    {
    	$filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 50;
        if($items = K::M('system/theme')->items($filter, null, $page, $limit, $count)){
        	$pager['count'] = $count;
            $themes = array();
            foreach($items as $k=>$v){
                $themes[$v['theme']] = $v;
            }
        }
        if($items = K::M('system/theme')->load_themes()){
            foreach($items as $k=>$v){
                if(empty($themes[$k])){
                    $themes[$k] = $v;
                }else{
                    $themes[$k] = array_merge($v, $themes[$k]);
                }
            }
        }
        $this->pagedata['themes'] = $themes;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'admin:system/theme/items.html';
    }

    public function install($ident)
    {
        if(K::M('system/theme')->theme($ident)){
            $this->err->add('模板已经安装过了', 211);
        }else if(K::M('system/theme')->install($ident)){
            $this->err->add('安装模板成功');
        }
    }

    public function uninstall($theme_id)
    {
        if(!$theme_id = (int)$theme_id){
            $this->err->add('未定义操作', 211);
        }else if(!$theme = K::M('system/theme')->detail($theme_id)){
            $this->err->add('模板不存在或未安装', 222);
        }else if($theme['theme'] == 'default'){
            $this->err->add('系统模板不能删除', 223);
        }else if($theme['default']){
            $this->err->add('不能删除当前使用的模板', 224);
        }else if(K::M('system/theme')->delete($theme_id)){
            $this->err->add('卸载模板成功');
        }
    }

    public function config($theme_id=null)
    {
        $this->err->add('功能开发中，敬请期待');
    }

    public function setdefault($theme_id)
    {
        if(!$theme_id = (int)$theme_id){
            $this->err->add('未定义操作', 211);
        }else if(!$theme = K::M('system/theme')->detail($theme_id)){
            $this->err->add('模板不存在或未安装', 222);
        }else if(K::M('system/theme')->set_default($theme_id)){
            $this->err->add('设置默认模板成功');
        }
    }

}