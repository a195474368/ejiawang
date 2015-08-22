<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: magic.ctl.php 2590 2013-12-28 02:28:31Z langzhong $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Magic extends Ctl
{
    
    public function index()
    {
        
    }

    public function area($city_id)
    {
		if(!$city_id = intval($city_id)){
			$this->err->add('未指定城市ID', 211);
		}else{
			$areas = K::M('data/area')->areas_by_city($city_id);
			$this->err->set_data('areas', array_values((array)$areas));
		}
		$this->err->json();    	
    }

    public function editorupload()
    {
        if(!$this->uid){
            $this->err->add('您没有权限上传图片', 210);
        }else if(!$attach = $_FILES['imgFile']){
            $this->err->add('上传文件失败', 211);
        }else if(UPLOAD_ERR_OK != $attach['error']){
            $this->err->add('上传文件失败', 212);
        }else if($data = K::M('magic/upload')->xheditor($attach)){
            $cfg = $this->system->config->get('attach');
            $this->err->set_data('url', $cfg['attachurl'].'/'.$data['photo'].'?PID'.$data['photo_id']);
        }
        $this->err->json();       
    }

    public function fastbooking()
    {
    	if($this->checksubmit('data')){
    		if(!$data = $this->GP('data')){
    			$this->err->add('非法的数据提交', 211);
    		}else{
                $data['uid'] = $this->uid; 
                if($booking_id = K::M('booking/booking')->create($data)){
        			$this->err->add('预约成功，婚嫁助理稍后会联系您');
                    $this->err->set_data('reload', false);
        		}
            }
    	}else{
    		$this->tmpl = 'view:booking/fast.html';
    	}
    }

    public function createorder($shop_id=null, $product_id=null)
    {
        if(!($shop_id = (int)$shop_id) && !($shop_id = (int)$this->GP('shop_id'))){
            $this->err->add('非法操作', 211);
        }else if(!$shop = K::M('shop/view')->detail($shop_id, true)){
            $this->err->add('您要预约的商铺不存或已经删除', 212);
        }else if($this->checksubmit('data')){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 211);
            }else if(!$data = $this->check_fields($data, 'product_id,contact,mobile,qq,date,address,notice')){
                $this->err->add('非法的数据提交', 211);
            }else{
                $data['shop_id'] = $shop_id;
                $data['uid'] = $this->uid; 
                $data['city_id'] = $shop['city_id'];
                $data['from'] = $shop['from'];
                if($order_id = K::M('order/handler')->create($data)){
                    $this->err->add('预约成功，稍后会联系您');
                    //$this->err->set_data('forward', 'order/order-index.html');
                }
            }
        }else{
            if($product_id = (int)$product_id){
                $this->pagedata['product'] = K::M('product/view')->detail($product_id);
            }
            $this->pagedata['shop'] = $shop;
            $this->tmpl = 'view:order/create.html';
        }        
    }

    public function verify()
    {
        K::M('magic/verify')->output();
    }
    
    //空壳控制器
    public function shell()
    {
        //todo;
    }
}