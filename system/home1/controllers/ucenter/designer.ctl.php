<?php

Import::C('ucenter/ucenter');

class Ctl_Ucenter_Designer extends Ctl_Ucenter {

    protected $_info_allower_fields = 'company_id,city_id,area_id,school,qq,about';

    public function index() {
        $this->check_designer();
        if ($data = $this->checksubmit('data')) {
            if (!$data = $this->check_fields($data, $this->_info_allower_fields)) {
                $this->err->add('非法的数据提交', 201);
            } else {
                if (K::M('designer/designer')->update($this->uid, $data)) {
         
                    if ($attr = $this->GP('attr')) {
                        K::M('designer/attr')->update($this->uid, $attr);
                    }
                    $this->err->add('修改内容成功');
                }
            }
        } else {
            $this->pagedata['attr'] = K::M('designer/attr')->attrs_ids_by_designer($this->uid);
  
            if ($company_id = $this->designer['company_id']) {
                $this->pagedata['company'] = K::M('company/company')->detail($company_id);
            }
            $this->tmpl = 'ucenter/designer/index.html';
        }
    }

    //本来可以不存在的
    public function info() {
        if ($data = $this->checksubmit('data')) {
            if (!$data = $this->check_fields($data, $this->_info_allower_fields)) {
                $this->err->add('非法的数据提交', 201);
            } else {
                $data['uid'] = $this->uid;

                if (K::M('designer/designer')->create($data)) {
                    if ($attr = $this->GP('attr')) {
                        K::M('designer/attr')->update($this->uid, $attr);
                    }
                    $this->err->add('开通博客成功');
                    $this->err->set_data('forward', $this->mklink('ucenter/designer:index', array(), array(), true));
                }
            }
        } else {
            $this->tmpl = 'ucenter/designer/info.html';
        }
    }

}
