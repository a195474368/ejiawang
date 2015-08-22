<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: index.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

class Ctl_Index extends Ctl
{
    
    public function index()
    {
    	$this->pagedata['case_attrs'] = K::M('data/attr')->attrs_by_from('zx:case');
        $this->tmpl = 'mobile:index.html';
    }



}