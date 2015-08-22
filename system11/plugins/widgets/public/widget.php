<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: widget.php 2476 2013-12-24 06:47:21Z langzhong $
 */

class Widget_Public extends Model
{

	public function help(&$params)
	{   
        $data['cate_list']      = K::M('article/cate')->fetch_all();
        $data['content_list']   = K::M('article/view')->items(array('from'=>'help','closed'=>0),array('article_id'=>'ASC'),1,50);
		$params['tpl'] = 'help.html';
		return $data;
	}

	public function kefu(&$params)
	{           
		$params['tpl'] = 'kefu.html';
		return true;
	}
}