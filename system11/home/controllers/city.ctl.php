<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: city.ctl.php 3407 2014-02-21 06:37:45Z langzhong $
 */
class Ctl_City extends Ctl
{
    
    
    public function  index()
    {
        $cfg = $this->system->config->get('site');
        if(!$cfg['multi_city']){
            header('Location:index.php');
            exit;
        }
        $city_list = K::M('data/city')->fetch_all(); 
        $py_list = array();
        foreach($city_list as $k=>$v){
            if($v['pinyin']){
                $py = strtoupper(substr($v['pinyin'], 0, 1));
                $py_list[$py][$k] = $v;
            }
        }
        ksort($py_list);
        $this->pagedata['allcity'] =    $city_list; 
        $this->pagedata['pycity']  = $py_list;
        K::M('helper/seo')->init('city',array());
        $this->tmpl = 'city.html';
    }
    
}