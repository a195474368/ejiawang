<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: index.ctl.php 2335 2013-12-18 17:15:56Z youyi $
 */

class Ctl_Index extends Ctl
{
    
    public function index()
    {
    	$this->pagedata['case_attrs'] = K::M('data/attr')->attrs_by_from('zx:case');
        $this->tmpl = 'mobile:index.html';
    }



}