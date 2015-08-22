<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: about.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

class Ctl_About extends Ctl {
    
     public $_call = 'index';
     
     
     public function index($page){
         
        $page = htmlspecialchars($page);          
        $this->pagedata['info'] =  K::M('article/view')->item_by_page($page);
        if(empty($this->pagedata['info'])){
            $this->err->add('没有您要查看的内容', 211);
        }else{
            $items =  K::M('article/view')->items(array('from'=>'about','closed'=>0),array('article_id'=>'ASC'),1,50); 
            $this->pagedata['page'] = $page;
            $this->pagedata['items'] = $items;
            $this->tmpl = 'about.html';
        }
     }
    
}