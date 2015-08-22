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
        
       $provinces_list=K::M('data/provinces')->items(); 
      
        $py_list = array();
        $citys= array();
        foreach($city_list as $k=>$v){
          
            if($v['pinyin']){
                $py = strtoupper(substr($v['pinyin'], 0, 1));
                $py_list[$py][$k] = $v;
            }
        }
        /*foreach($provinces_list as $k=>$v)   
      { 
          foreach($city_list as $k1=>$v1){
               if($v1['provinces_id']=$v['id']){
                $provinces_list[$k1]['city']=$v1;//要加三个key
              
               }
           }
           
       }*/
        ksort($py_list);
        $this->pagedata['allcity'] =    $city_list; 
        $this->pagedata['pycity']  = $py_list;
       $this->pagedata['allprovinces']  =$provinces_list;
        
        K::M('helper/seo')->init('city',array());
        $this->tmpl = 'city.html';
    }
    
}