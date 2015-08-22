<?php
/**
 * Copy Right Anuike.com
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: banner.ctl.php 3304 2014-02-14 11:01:43Z youyi $
 */

Import::C('ucenter/ucenter');
class Ctl_Ucenter_Shop_Banner extends Ctl_Ucenter
{
	
	public function index()
	{
        $shop = $this->ucenter_shop();
        $count = 0;
        if($items = K::M('shop/banner')->items_by_shop($shop['shop_id'])){
            $this->pagedata['items'] = $items;
            $count = count($items);
        }
        $pager['count'] = $count;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'ucenter/shop/banners.html';		
	}

	public function upload()
	{
        $shop = $this->ucenter_shop();
        if(!$attach = $_FILES['Filedata']){
            $this->err->add('上传图片失败', 401);
        }else if(UPLOAD_ERR_OK != $attach['error']){
            $this->err->add('上传图片失败', 402);
        }else if(K::M('shop/banner')->count_by_shop($shop['shop_id']) > 5){
            $this->err->add('轮转广告最多只可上传5张图片', 214);
        }else{
            if($a = K::M('shop/banner')->upload($shop['shop_id'], $attach)){
                $cfg = $this->system->config->get('attach');
                $this->err->set_data('thumb', $cfg['attachurl'].'/'.$a['photo']);
                $this->err->add('上传图片成功');          
            }
        }
        $this->err->json();		
	}

	public function update()
	{
        $shop = $this->ucenter_shop();
        if($data = $this->checksubmit('data')){
            if($banners = K::M('shop/banner')->items_by_shop($shop['shop_id'])){
                foreach($banners as $k=>$v){
                    if($a = $data[$k]){
                        if($a['title'] != $v['title'] || $a['link'] != $v['link'] || $a['orderby'] != $v['orderby']){
                            K::M('shop/banner')->update($k, $a);
                        }
                    }
                }
            }
            $this->err->add('更新轮转广告成功');
        }
	}

	public function delete($banner_id=null)
	{
        $shop = $this->ucenter_shop();
        if(!$banner_id = (int)$banner_id){
            $this->err->add('未定义操作', 211);
        }else if(!$banner = K::M('shop/banner')->detail($banner_id)){
            $this->err->add('您要删除的内容不存在或已经删除', 212);
        }else if($banner['shop_id'] != $shop['shop_id']){
            $this->err->add('非法的数据提交', 213);
        }else if(K::M('shop/banner')->delete($banner_id)){
            $this->err->add('删除轮转广告成功');
        }		
	}
}