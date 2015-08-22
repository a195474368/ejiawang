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
      /*  $city_list = K::M('data/city')->fetch_all();
 
        $py_list = array();
        $citys= array();
        foreach($city_list as $k=>$v){
          
            if($v['pinyin']){
                $py = strtoupper(substr($v['pinyin'], 0, 1));
                $py_list[$py][$k] = $v;
            }
        }
      
        ksort($py_list);
        $this->pagedata['allcity'] =    $city_list; */
        
        K::M('helper/seo')->init('index',array());
        $this->pagedata['areaList'] = K::M("data/area")->fetch_all();//为了调出签单的小区
        $this->tmpl = 'index.html';
        
        
    }

}