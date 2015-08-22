<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: widget.php 3402 2014-02-21 04:16:21Z langzhong $
 */

class Widget_Case extends Model
{

    public function index(&$params)
    {
		
        
    }
    
    public function casenew(&$params){
        $data['limit'] = $params['limit'] ? $params['limit'] : 5;
        
        $case = K::M('case/case')->items(array('audit'=>1,'closed'=>0,'home_id'=>'>:0'),array('case_id'=>'DESC') , 1,$data['limit']);
        $company_ids = array();
        foreach($case as $val){
            if(!empty($val['company_id'])) $company_ids[$val['company_id']] = $val['company_id'];
        }
        if(!empty($company_ids)) $data['case_new_company_list'] = K::M('company/company')->items_by_ids($company_ids);
        $data['case_new'] = $case;
        $params['tpl'] = 'casenew.html'; 
        return $data;
    }

    public function cloud(&$params){
        $attr_values = K::M('data/attr')->attrs_by_from('zx:case');
        $attr_keys = array();
        foreach ($attr_values as $key => $value) {
            $http_key['attr' . $key] = 0;
        }
        
        $url = array();
        foreach ($attr_values as $key => $value) {
            foreach ($value['values'] as $k => $v) {
                $link = K::M('helper/link')->mklink('case:items', array_merge($http_key, array('attr' . $key => $k)), array(), true);
                $url[] = '{text: "'.$v['title'].'", weight: '.rand(1,13).', link: "'.$link.'"}';
            }
        }
        $data['cloud_words'] = join(',',$url);
        $params['tpl'] = 'cloud.html'; 
        return $data;
        
    }
    
    
}