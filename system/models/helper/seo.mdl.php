<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: seo.mdl.php 3304 2014-02-14 11:01:43Z youyi $
 */

class Mdl_Helper_Seo
{   
    
	public $_SEO = array();

    protected $_shop_seo = array();

    protected $_tmpl = array('title'=>'', 'keywords'=>'', 'description'=>'');

    public function __construct(&$system)
    {

    }

    public function init($ident='index', $params=array())
    {
        $ident = str_replace(':', '_', $ident);
        if(strpos($ident, 'seo_') === false){
            $ident = 'seo_'.$ident;
        }
        if($cfg = K::M('system/systmpl')->detail_by_key($ident)){
            $this->_tmpl = $cfg;
            $city = K::$system->request['city'];
            $site = K::$system->config->get('site');
            $params['sitename'] = $site['title'];
            $params['site_title'] = $site['title'];
            $params['city_name'] = $city['city_name'];
            $params['phone'] = $site['phone'];
            $params['city_seo_title'] = $city['seo_title'];
            $params['city_seo_keywords'] = $city['seo_keywords'];
            $params['city_seo_description'] = $city['seo_description'];
            if($this->_shop_seo){
                $params = array_merge($params, $this->_shop_seo);
            }
            $this->_parse($params);
        }
        return $this->_SEO;
    }

    public function set_shop($shop)
    {
        $this->_shop_seo = array('shop_title'=>$shop['title'], 'shop_name'=>$shop['name'], 'shop_seo_title'=>$shop['seo_title'], 'shop_seo_keywords'=>$shop['seo_keywords'], 'shop_seo_description'=>$shop['seo_description']);
    }

    public function set_title($title)
    {
    	$this->_SEO['title'] = $title;
    }

    public function set_keywords($keywords)
    {
    	$this->_SEO['keywords'] = $keywords;
    }

    public function set_description($description)
    {
    	$this->_SEO['description'] = $description;
    }

    protected function _parse($params)
    {
        $a = $b = array();
        foreach($params as $k=>$v){
            $a[] = '{'.$k.'}';
            $b[] = $v;
        }
        $this->_SEO['title'] = str_replace($a, $b, $this->_tmpl['tmpl']);
        $this->_SEO['keywords'] = str_replace($a, $b, $this->_tmpl['tmpl1']);
        $this->_SEO['description'] = str_replace($a, $b, $this->_tmpl['tmpl2']);
    }
}