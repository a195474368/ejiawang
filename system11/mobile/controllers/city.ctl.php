<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: city.ctl.php 2335 2013-12-18 17:15:56Z youyi $
 */

class Ctl_City extends Ctl 
{
    
    public function index()
    {
        if($city_list = K::M('data/city')->fetch_all()){
            $data['limit'] = $params['limit'] ? $params['limit'] : 5;
            $data['citys'] = $city_list;
            $py_list = array();
            foreach($city_list as $k=>$v){
                if($v['pinyin']){
                    $py = strtoupper(substr($v['pinyin'], 0, 1));
                    $py_list[$py][$k] = $v;
                }
            }
            ksort($py_list);
            $this->pagedata['py_city'] = $py_list;
        }
        $this->tmpl = 'mobile:city.html';
    }

    public function city($city_id=null)
    {
        $site = $this->system->config->get('site');
        $mobile = $this->system->config->get('mobile');
        if($city_id = $city_id){
            $city = K::M('data/city')->city($city_id);
        }
        if(empty($city) && !($city = $oCity->city((int)$site['city_id']))){
            exit('没有开通城市站点');
        }
        if($this->cookie->get('curr_city_id') != $city['city_id']){
            $this->cookie->set('curr_city_id', $city['city_id']);
        }
        header("Location:{$mobile['url']}");
        exit();
    }
}