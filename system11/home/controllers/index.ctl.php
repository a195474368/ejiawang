<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: index.ctl.php 2599 2013-12-28 07:37:13Z langzhong $
 */

class Ctl_Index extends Ctl
{
    
    public function index()
    {
       
        K::M('helper/seo')->init('index',array());
        $this->tmpl = 'index.html';
    }

}