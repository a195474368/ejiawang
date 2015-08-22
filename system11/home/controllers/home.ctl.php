<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: home.ctl.php 4028 2014-03-21 02:48:54Z langzhong $
 */
class Ctl_Home extends Ctl {

    public function index()
    {
        $company_ids = array();
        $site = K::M('home/site')->items(array('city_id' => $this->request['city_id'], 'audit' => 1), array('site_id' => 'DESC'), 1, 2);
        $cases = K::M('case/case')->items(array('audit' => 1, 'closed' => 0, 'home_id' => '>:0'), array('orderby' => 'DESC'), 1, 2);
        foreach ($site as $val) {
            if (!empty($val['company_id'])) {
                $company_ids[$val['company_id']] = $val['company_id'];
            }
        }
        foreach ($cases as $val) {
            if (!empty($val['company_id'])) {
                $company_ids[$val['company_id']] = $val['company_id'];
            }
        }
        if (!empty($company_ids))
            $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);

        $attr = K::M('data/attr')->attrs_by_from('zx:home');
        $home_list_url = array('area_id' => 0);
        foreach ($attr as $k => $v) {
            $home_list_url['attr_' . $k] = 0;
        }
        foreach ($attr as $key => $value) {
            $attr[$key]['link'] = $this->mklink('home:items', array_merge($home_list_url, array('attr_' . $key => 0)), array(), true);
            foreach ($value['values'] as $k => $v) {
                $attr[$key]['values'][$k]['link'] = $this->mklink('home:items', array_merge($home_list_url, array('attr_' . $key => $k)), array(), true);
            }
        }
        $this->pagedata['attr_values'] = $attr;
        $this->pagedata['area_list'] = K::M('data/area')->areas_by_city($this->request['city_id']);
        $this->pagedata['cases'] = $cases;
        $this->pagedata['sites'] = $site;
        K::M('helper/seo')->init('home', array());
        $this->tmpl = 'home.html';
    }

    public function info($id)
    {
        if (!($id = (int) $id) && !($id = (int) $this->GP('id'))) {
            $this->err->add('没有该内容', 211);
        }
        else if (!$detail = K::M('home/main')->detail($id)) {
            $this->err->add('没有该内容', 212);
        }
        else {
            $this->pagedata['detail'] = $detail;
            K::M('helper/seo')->init('home_info', array('home_name' => $detail['name']));
            $this->tmpl = 'home_info.html';
        }
    }

    public function photo($id, $type, $page = 1)
    {
        if (!($id = (int) $id) && !($id = (int) $this->GP('id'))) {
            $this->err->add('没有该内容', 211);
        }
        else if (!$detail = K::M('home/main')->detail($id)) {
            $this->err->add('没有该内容', 212);
        }
        elseif (!($type = (int) $type) && !($type = (int) $this->GP('type'))) {
            $this->err->add('没有该内容', 211);
        }
        else {
            $filter = $pager = array();
            $pager['page'] = max(intval($page), 1);
            $pager['limit'] = $limit = 9;
            $filter['home_id'] = $id;
            $filter['type'] = $type;
            if ($items = K::M('home/pics')->items($filter, null, $page, $limit, $count)) {
                $pager['count'] = $count;
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('home:photo', array($id, $type, '{page}')), array());
            }
            $this->pagedata['pager'] = $pager;
            $this->pagedata['items'] = $items;
            $this->pagedata['photo_type'] = $type;
            $this->pagedata['detail'] = $detail;
            K::M('helper/seo')->init('home_photo', array('home_name' => $detail['name']));
            $this->tmpl = 'home_photo.html';
        }
    }

    public function detail($id)
    {
        if (!($id = (int) $id) && !($id = (int) $this->GP('id'))) {
            $this->err->add('没有该内容', 211);
        }
        else if (!$detail = K::M('home/main')->detail($id)) {
            $this->err->add('没有该内容', 212);
        }
        else {
            K::M('home/main')->update_count($id, 'pv_num', 1);
            $company_ids = array();
            $MYcases = K::M('case/case')->items(array('audit' => 1, 'closed' => 0, 'home_id' => $id), array('orderby' => 'DESC'), 1, 2);
            foreach ($MYcases as $val) {
                if (!empty($val['company_id'])) {
                    $company_ids[$val['company_id']] = $val['company_id'];
                }
            }
            if (empty($MYcases)) {
                $cases = K::M('case/case')->items(array('audit' => 1, 'closed' => 0, 'home_id' => '>:0'), array('orderby' => 'DESC'), 1, 2);
                foreach ($cases as $val) {
                    if (!empty($val['company_id'])) {
                        $company_ids[$val['company_id']] = $val['company_id'];
                    }
                }
            }
            $this->pagedata['cases'] = $cases;


            if (!empty($company_ids))
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);

            $this->pagedata['mycases'] = $MYcases;
            K::M('helper/seo')->init('home_detail', array('home_name' => $detail['name']));
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'home_detail.html';
        }
    }

    public function items()
    {
        $url = array();
        $attr_values = K::M('data/attr')->attrs_by_from('zx:home');
        $http_key = $attr_keys = array();
        $http_key['area_id'] = 'area_id'; //排序字段
        foreach ($attr_values as $key => $value) {
            $http_key['attr' . $key] = 'attr' . $key;
        }
        $http_key['page'] = 'page';
        $num = count($http_key);
        $uri = explode('-', trim($this->request['uri'], '.html'));
        foreach ($uri as $k => $v) {
            if (!is_numeric($v)) {
                unset($uri[$k]);
            }
        }
        if (count($uri) > $num) {
            $uri = array_slice($uri, 0, $num);
        }
        else {
            $uri = array_pad($uri, $num, 0);
        }
        $url = array_combine($http_key, $uri);

        $page = empty($url['page']) ? 1 : (int) $url['page'];

        $attr = array();

        foreach ($attr_values as $key => $value) {
            $attr_values[$key]['link'] = $this->mklink('home:items', array_merge($url, array('attr' . $key => 0)), array(), true);
            if (empty($url['attr' . $key]))
                $attr_values[$key]['checked'] = true;
            foreach ($value['values'] as $k => $v) {
                $attr_values[$key]['values'][$k]['link'] = $this->mklink('home:items', array_merge($url, array('attr' . $key => $k)), array(), true);
                if (!empty($url['attr' . $key]) && $url['attr' . $key] == $k) {
                    $attr[] = $k;
                    $attr_values[$key]['values'][$k]['checked'] = true;
                }
            }
        }


        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 8;
        $filter['attrs'] = $attr;
        if ($area_id = (int) $url['area_id']) {
            $filter['area_id'] = $area_id;
        }
        else {
            $filter['city_id'] = $this->request['city_id'];
        }
        
        if ($items = K::M('home/view')->items($filter, $order, $page, $limit, $count)) {
            $company_ids = array();
            foreach ($items as $val) {
                if ($val['last_case_company_id'])
                    $company_ids[$val['last_case_company_id']] = $val['last_case_company_id'];
            }
            if (!empty($company_ids))
                $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('home:items', array_merge($url, array('page' => '{page}')), array(), true), array());
        }

        $area_list = K::M('data/area')->areas_by_city($this->request['city_id']);

        foreach ($area_list as $k => $v) {
            if ($k == $url['area_id'])
                $area_list[$k]['checked'] = true;
            $area_list[$k]['link'] = $this->mklink('home:items', array_merge($url, array('area_id' => $k)), array(), true);
        }
        $this->pagedata['area_url'] = $this->mklink('home:items', array_merge($url, array('area_id' => 0)), array(), true);
        $this->pagedata['area_list'] = $area_list;
        $this->pagedata['url_data'] = $url;
        $this->pagedata['attr_values'] = $attr_values;
        $this->pagedata['homes'] = $items;
        $this->pagedata['pager'] = $pager;
        K::M('helper/seo')->init('home_items', array());
        $this->tmpl = 'home_items.html';
    }

    public function result()
    {
        $SO = $this->GP('SO');
        if (!empty($SO['lng_start']) && !empty($SO['lng_end']) && !empty($SO['lat_start']) && !empty($SO['lat_end'])) {
            if (is_numeric($SO['lng_start']) && is_numeric($SO['lng_end']) && is_numeric($SO['lat_start']) && is_numeric($SO['lat_end'])) {
                $filter['lng'] = $SO['lng_start'] . '~' . $SO['lng_end'];
                $filter['lat'] = $SO['lat_start'] . '~' . $SO['lat_end'];
                $filter['closed'] = 0;
                $items = K::M('home/main')->items($filter, null, 1, 100, $count);
                $data = array();
                foreach ($items as $val) {

                    $data[$val['id']] = array(
                        'id' => $val['id'],
                        'link' => $this->mklink('home:detail', array($val['id']), array(), true),
                        'name' => $val['name'],
                        'face_pic' => $val['face_pic'],
                        'qq_qun' => $val['qq_qun'],
                        'tel' => $val['tel'],
                        'lng' => $val['lng'],
                        'lat' => $val['lat'],
                        'addr' => $val['addr'],
                    );
                }

                $this->err->set_data('total', $count);
                $this->err->set_data('result', $data);
            }
        }
        //$this->err->set_data('result',array());
        $this->err->json();
        die;
    }

    public function maps()
    {
        K::M('helper/seo')->init('home_maps', array());
        $this->tmpl = 'home_maps.html';
    }

    public function survey()
    {

        if (!$data = $this->GP('data')) {
            $this->err->add('非法的数据提交', 201);
        }
        else {
            $data['city_id'] = $this->request['city_id'];
            if ($survey_id = K::M('home/survey')->create($data)) {
                $this->err->add('很感谢您的反馈！');
            }
        }
    }

    public function cases($id, $page = 1)
    {
        if (!($id = (int) $id) && !($id = (int) $this->GP('id'))) {
            $this->err->add('没有该内容', 211);
        }
        else if (!$detail = K::M('home/main')->detail($id)) {
            $this->err->add('没有该内容', 212);
        }
        else {
            $filter = $pager = array();
            $pager['page'] = max(intval($page), 1);
            $pager['limit'] = $limit = 8;
            $filter['home_id'] = $id;
            $filter['audit'] = 1;
            $filter['closed'] = 0;
            if ($items = K::M('case/case')->items($filter, null, $page, $limit, $count)) {
                $pager['count'] = $count;
                $company_ids = array();
                foreach ($items as $k => $v) {
                    if ($v['company_id']) {
                        $company_ids[$v['company_id']] = $v['company_id'];
                    }
                }
                if (!empty($company_ids)) {
                    $this->pagedata['company_list'] = K::M('company/company')->items_by_ids($company_ids);
                }
                $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('home:cases', array($id, '{page}')), array());
            }
            $this->pagedata['items'] = $items;
            $this->pagedata['pager'] = $pager;
            $this->pagedata['detail'] = $detail;
            K::M('helper/seo')->init('home_cases', array('home_name' => $detail['name']));
            $this->tmpl = 'home_cases.html';
        }
    }

    public function caseDetail($home_id, $id)
    {
        if (!($home_id = (int) $home_id) && !($id = (int) $this->GP('home_id'))) {
            $this->err->add('没有该内容', 211);
        }
        else if (!$detail = K::M('home/main')->detail($home_id)) {
            $this->err->add('没有该内容', 212);
        }
        elseif (!($id = (int) $id) && !($id = (int) $this->GP('id'))) {
            $this->err->add('没有该内容', 211);
        }
        else if (!$case = K::M('case/case')->detail($id)) {
            $this->err->add('没有该内容', 212);
        }
        else {

            $this->pagedata['company'] = K::M('company/company')->detail($case['company_id']);
            $this->pagedata['case'] = $case;
            $this->pagedata['case_pics'] = K::M('case/photo')->items_by_case($id);
            $this->pagedata['detail'] = $detail;

            K::M('helper/seo')->init('home_caseDetail', array(
                'home_name' => $detail['name'],
                'title' => $case['title'],
                'company_name' => $this->pagedata['company']['name']
            ));
            $this->tmpl = 'home_case_detail.html';
        }
    }

    public function tuan($page = 1)
    {

        $filter = $pager = array();
        $pager['page'] = max(intval($page), 1);
        $pager['limit'] = $limit = 16;
        if ($s = $this->GP('s')) {
            $pager['s'] = $s = htmlspecialchars($s);
            $filter['title'] = "LIKE:%" . $s . "%";
            
        }
        $filter['audit'] = 1;
        $filter['city_id'] = $this->request['city_id'];
        if ($items = K::M('home/tuan')->items($filter, array('tuan_id' => 'desc'), $page, $limit, $count)) {
            $home_ids = $company_ids = array();
            foreach ($items as $k => $v) {
                if ($v['home_id']) {
                    $home_ids[$v['home_id']] = $v['home_id'];
                }
                $items[$k]['end_time'] = strtotime($v['end_time']) - __TIME + rand(0, 99); //主要为了时间跳动不同
            }
            if (!empty($home_ids)) {
                $this->pagedata['home_list'] = K::M('home/main')->items_by_ids($home_ids);
            }

            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array('s' => $pager['s']));
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;

        $this->pagedata['hots'] = K::M('home/tuan')->items(array('audit' => 1, 'city_id' => $this->request['city_id']), array('sign_num' => 'desc'), 1, 3);
         K::M('helper/seo')->init('home_tuan', array(
                
            ));
        $this->tmpl = 'home_tuan.html';
    }

    public function tuanDetail($tuan_id)
    {
        if(!($tuan_id = (int)$tuan_id) && !($tuan_id = (int)$this->GP('tuan_id'))){
            $this->err->add('没有您要查看的团装', 211);
        }else if(!$detail = K::M('home/tuan')->detail($tuan_id)){
            $this->err->add('没有您要查看的团装', 212);
        }else{
            $package = K::M('home/package')->items(array('tuan_id'=>$tuan_id));
            $huxingIds = array();
            foreach($package as $v){
               if($v['huxing_id']) $huxingIds[$v['huxing_id']] = $v['huxing_id']; 
            }
            if(!empty($huxingIds)){
                $this->pagedata['huxing'] = K::M('home/pics')->items_by_ids($huxingIds);
            }
            $this->pagedata['tuan'] = $detail;
            $this->pagedata['package'] = $package;
            $this->pagedata['home'] = K::M('home/main')->detail($detail['home_id']);
            $this->pagedata['company'] = K::M('company/company')->detail($detail['company_id']);
            $this->pagedata['signs'] = K::M('home/sign')->items(array('tuan_id'=>$tuan_id), array('sign_id'=>'desc'),1,10);
            K::M('helper/seo')->init('home_tuan_detail', array('title'=>$detail['title'],'company_name'=>$this->pagedata['company']['name']));
            $this->tmpl = 'home_tuanDetail.html';
        }
    }
    
    public function tuanSign($tuan_id){
        if(!($tuan_id = (int)$tuan_id) && !($tuan_id = (int)$this->GP('tuan_id'))){
            $this->err->add('没有您要查看的团装', 211);
        }else if(!$detail = K::M('home/tuan')->detail($tuan_id)){
            $this->err->add('没有您要查看的团装', 212);
        }elseif ($this->checksubmit()) {
            if (!$data = $this->GP('data')) {
                $this->err->add('非法的数据提交', 201);
            }
            else {
                $data['uid'] = (int)$this->uid;
                $data['tuan_id'] = $tuan_id;
                if ($sign_id = K::M('home/sign')->create($data)) {
                    K::M('home/tuan')->update_count($tuan_id,'sign_num',1);
                    $obj = K::M('sms/sms');
                    $obj->send($data['mobile'],'sms_home_tuan',array('name'=>$data['cantact'] ? $data['cantact'] : '业主','mobile'=>$data['mobile'],'title'=>$detail['title']));
                    $this->err->add('恭喜您报名成功');
                }
            }
        }else{
            $package = K::M('home/package')->items(array('tuan_id'=>$tuan_id));
            $this->pagedata['tuan'] = $detail;
            $this->pagedata['package'] = $package;
            $this->tmpl = 'home_tuanSign.html';
        }      
    }

}
