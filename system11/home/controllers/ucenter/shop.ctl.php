<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: shop.ctl.php 3587 2014-03-04 16:02:56Z youyi $
 */

Import::C('ucenter/ucenter');
class Ctl_Ucenter_Shop extends Ctl_Ucenter
{
    
    protected $_allow_fields = 'cat_id,area_id,title,name,logo,contact,phone,lng,lat,banner,fox,mail,qq,hours,address,jiaotong,bulletin,lng,lat,info,psaz,dgxz,seo_title,seo_keywords,seo_description';
    
    public function index()
    {
        $shop = $this->ucenter_shop();
        if($this->checksubmit()){
            $data = array();
            $upload = K::M('helper/upload');
            if($attach = $_FILES['shop_logo']){
                if(UPLOAD_ERR_OK == $attach['error']){
                    if($a = K::M('magic/upload')->upload($attach, 'shop', $shop['logo'])){
                        $logo = K::M('content/html')->encode($a['photo']);
                    }
                }
            }
            if($attach = $_FILES['shop_banner']){
                if(UPLOAD_ERR_OK == $attach['error']){
                    if($a = K::M('magic/upload')->upload($attach, 'shop', $shop['banner'])){
                        $banner = K::M('content/html')->encode($a['photo']);
                    }
                }
            }
            if($logo || $banner){
                if($logo){
                    K::M('shop/shop')->update($shop['shop_id'], array('logo'=>$logo), true);
                }
                if($banner){
                    K::M('shop/fields')->update($shop['shop_id'], array('banner'=>$banner), true);
                }
                $this->err->add('修改商铺资料成功');
            }else{
                $this->err->add('非法的数据提交', 215);
            }            
        }else{
            $this->tmpl = 'ucenter/shop/index.html';
        }
    }

    public function info()
    {
        $shop =  K::M('shop/shop')->shop_by_uid($this->uid);
        if($data = $this->checksubmit('data')){
            if($data = $this->check_fields($data, $this->_allow_fields)){
                if($fields = $this->GP('fields')){
                      $fields = $this->check_fields($fields, $this->_allow_fields);
                }
                if(!empty($shop)){
                if(K::M('shop/shop')->update($shop['shop_id'], $data)){
                    if($fields && K::M('shop/fields')->update($shop['shop_id'], $fields)){
                        $this->err->add('操作成功');
                    }            
                } 
                }else{
                    $data['city_id'] = $this->MEMBER['city_id'];
                    $data['uid'] = $this->uid;
                    if($shop_id = K::M('shop/shop')->create($data)){
                         K::M('shop/fields')->update($shop_id,$fields);
                         $this->err->add('操作成功');
                    }
                }
               
            }
        }else{
            $this->pagedata['shop'] = $shop;
            $this->tmpl = 'ucenter/shop/info.html';
        }
    }

    public function gmsm()
    {
        $shop = $this->ucenter_shop();
        if($data = $this->checksubmit('data')){
            if($data = $this->check_fields($data, $this->_allow_fields)){
                K::M('shop/fields')->update($shop['shop_id'], $data);
                $this->err->add('修改商铺资料成功');
            }else{
                $this->err->add('非法的数据提交', 211);
            }
        }else{
            $this->tmpl = 'ucenter/shop/gmsm.html';
        }        
    }

    public function skin()
    {
        $shop = $this->ucenter_shop();
        $skins = include(__CFG::TMPL_DIR.'default/shop/config.php');   
        if($skin = $this->checksubmit('skin')){
            if(!$cfg = $skins[$skin]){
                $this->err->add('选择的模板不存在', 211);
            }else if(K::M('shop/fields')->update($shop['shop_id'], array('skin'=>$skin), true)){
                $this->err->add('修改商铺模板成功');
            }
        }else{
            $this->pagedata['skins'] = $skins;
            $this->tmpl = 'ucenter/shop/skin.html';
        }
    }

    public function seo()
    {
        $shop = $this->ucenter_shop();
        if($data = $this->checksubmit('data')){
            if($data = $this->check_fields($data, $this->_allow_fields)){
                if(K::M('shop/fields')->update($shop['shop_id'], $data)){
                    $this->err->add('修改SEO内容成功');                  
                }
            }
        }else{
            $this->tmpl = 'ucenter/shop/seo.html';
        }
    }

    public function catechildren($pid=null)
    {
        $pid = (int)$pid;
        $cats = array();
        if($childrens = K::M('shop/cate')->childrens($pid)){
            foreach($childrens as $k=>$v){
                $cats[] = array('cat_id'=>$v['cat_id'], 'parent_id'=>$v['parent_id'], 'title'=>$v['title']);
            }
        }
        $this->err->set_data('cats', $cats);        
        $this->err->json();            
    }
}