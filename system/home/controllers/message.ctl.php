<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: message.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

class Ctl_Message extends Ctl
{
    
    public function index($type)
    {
       if($type != 'yes' && $type != 'no' && $type != 'notice'){
            $this->err->add("您所访问的页面不存在!");
       }else{
           $this->pagedata['type'] = $type;
           $this->tmpl = 'message.html';
       }
    }
    

}    