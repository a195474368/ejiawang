<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: index.ctl.php 2665 2013-12-31 11:16:43Z youyi $
 */

class Ctl_Mall_Index extends Ctl 
{
    
    public function index()
    {
        K::M('helper/seo')->init('mall',array());
        $cate_list = K::M('shop/cate')->fetch_all();
        $this->tmpl = 'mall/index.html';
        $this->seo->init('mall');
    }
}