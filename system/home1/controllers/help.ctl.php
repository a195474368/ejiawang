<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: help.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

class Ctl_Help extends Ctl {
    
     public $_call = 'index';
     
     
     public function index($page){
         
        $page = htmlspecialchars($page);          
        $this->pagedata['info'] =  K::M('article/view')->item_by_page($page);
        if(empty($this->pagedata['info'])){
            $this->err->add('没有您要查看的内容', 211);
        }else{
            $items =  K::M('article/view')->items(array('from'=>'help','closed'=>0),array('article_id'=>'ASC'),1,50); 
            $this->pagedata['cate_list'] = K::M('article/cate')->fetch_all();
            $this->pagedata['page'] = $page;
            $this->pagedata['items'] = $items;
            $this->tmpl = 'help.html';
        }
     }
    
}