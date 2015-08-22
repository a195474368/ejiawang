<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: page.ctl.php 3053 2014-01-15 02:00:13Z youyi $
 */

class Ctl_Page extends Ctl 
{
	
	public function index()
	{
		
	}

	public function about($page)
	{
		if(!$detail = K::M('article/view')->about($page)){
			$this->error(404);
		}else{
			$this->pagedata['detail'] = $detail;
			$this->tmpl = 'mobile:page/about.html';
		}
	}
}