<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: page.ctl.php 2335 2013-12-18 17:15:56Z youyi $
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