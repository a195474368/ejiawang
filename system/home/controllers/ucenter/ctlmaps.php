<?php

/*
  title	=>	显示标题
  ctl		=>	ctl:act
  priv	=> 权限,默认全部权限(member,company,desginer,shop)
  menu	=> 是否显示菜单, 只有有相应权限并且这里设置true才会显示在菜单上
 */
return
        array(
            array('title'=>'帐户管理', 'menu'=>true,
                'items'=>array(
                    array('title'=>'个人中心', 'ctl'=>'ucenter/member:index', 'menu'=>true),
                    array('title'=>'修改资料', 'ctl'=>'ucenter/member:info', 'menu'=>true),                    
                    array('title'=>'修改头像', 'ctl'=>'ucenter/member:face'),
                    array('title'=>'上传头像', 'ctl'=>'ucenter/member:upload'),
                    array('title'=>'修改密码', 'ctl'=>'ucenter/member:passwd'),
                    array('title'=>'修改邮箱', 'ctl'=>'ucenter/member:mail'),
                    array('title'=>'实名认证', 'ctl'=>'ucenter/member:verify', 'menu'=>true),
                    array('title'=>'我的金块', 'ctl'=>'ucenter/member:gold', 'menu'=>true),
                    array('title'=>'金块日志', 'ctl'=>'ucenter/member:logs'),
                    array('title'=>'手机认证', 'ctl'=>'ucenter/member:mobile'),
                    array('title'=>'手机认证', 'ctl'=>'ucenter/member:code'),
                    array('title'=>'EMAIL认证', 'ctl'=>'ucenter/member:email'),
                    array('title'=>'我的订单', 'ctl'=>'ucenter/order:index','menu'=>true),
                    array('title'=>'更新状态', 'ctl'=>'ucenter/order:update')                    
                )
            ),
            array('title'=>'常用操作',
                'items'=>array(
                    array('title'=>'选择小区', 'ctl'=>'ucenter/select:home'),
                    array('title'=>'选择装修公司', 'ctl'=>'ucenter/select:company'),
                    array('title'=>'选择户型图', 'ctl'=>'ucenter/select:huxing')
                )
            ),         
            
             array('title'=>'装修日记', 'menu'=>true,
                'items'=>array(
                    array('title'=>'写日记', 'ctl'=>'ucenter/diary:create','menu'=>true),
                    array('title'=>'日记管理', 'ctl'=>'ucenter/diary:index','menu'=>true),
                    array('title'=>'编辑', 'ctl'=>'ucenter/diary:edit'),
                    array('title'=>'写日记文章', 'ctl'=>'ucenter/diary:detailCreate'),
                    array('title'=>'编辑日记文章', 'ctl'=>'ucenter/diary:detailEdit'),
                    array('title'=>'日记文章管理', 'ctl'=>'ucenter/diary:detail'),
                )
            ),
            array('title'=>'装修问答', 'menu'=>true,'priv'=>'member',
                'items'=>array(
                    array('title'=>'我要提问', 'ctl'=>'ucenter/member:ask','menu'=>true),
                     array('title'=>'我的问答', 'ctl'=>'ucenter/ask:items','menu'=>true),
                    array('title'=>'装修问答', 'ctl'=>'ask:items','menu'=>true),
                     
                  
                )
            ),
          
             array('title'=>'装修招标',
                'items'=>array(
                    array('title'=>'我要装修', 'ctl'=>'tenders','menu'=>true),
                    array('title'=>'我的招标', 'ctl'=>'tenders:mtenders','menu'=>true),
                  
                )
            ),
            
            
            //设计师开始
            
            array('title'=>'博客资料', 'priv'=>'designer', 'menu'=>true,
                'items'=>array(
                    array('title'=>'博客资料', 'ctl'=>'ucenter/designer:index', 'priv'=>'designer', 'menu'=>true),
                     array('title'=>'修改博客资料', 'ctl'=>'ucenter/designer:info', 'priv'=>'designer'),
                )
            ),
             array('title'=>'装修案例', 'priv'=>'designer', 'menu'=>true,
                'items'=>array(
                    array('title'=>'发布案例', 'ctl'=>'ucenter/designerCase:create', 'priv'=>'designer', 'menu'=>true),
                    array('title'=>'案例管理', 'ctl'=>'ucenter/designerCase:index', 'priv' =>'designer', 'menu'=>true),
                    array('title'=>'编辑案例', 'ctl'=>'ucenter/designerCase:edit', 'priv'=>'designer'),
                    array('title'=>'案例图片', 'ctl'=>'ucenter/designerCase:pic', 'priv'=>'designer'),
                    array('title'=>'案例图片更新', 'ctl'=>'ucenter/designerCase:update', 'priv'=>'designer'),
                    array('title'=>'案例图片上传', 'ctl'=>'ucenter/designerCase:upload', 'priv'=>'designer'),
                    array('title'=>'删除图片', 'ctl'=>'ucenter/designerCase:delete', 'priv'=>'designer'),
                )
            ),
            
            //设计师结束
            
            
            //装修公司开始
            array('title'=>'公司资料', 'priv'=>'company', 'menu'=>true,
                'items'=>array(
                 
                    array('title'=>'公司介绍', 'ctl'=>'ucenter/company:info', 'priv'=>'company'),
                    array('title'=>'新增商铺横幅', 'ctl'=>'ucenter/banner:create', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'商铺横幅管理', 'ctl'=>'ucenter/banner:index', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'编辑商铺横幅', 'ctl'=>'ucenter/banner:edit', 'priv'=>'company'),
                    array('title'=>'更新商铺横幅', 'ctl'=>'ucenter/banner:update', 'priv'=>'company'),
                    array('title'=>'新增荣誉资质', 'ctl'=>'ucenter/pic:create', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'荣誉资质管理', 'ctl'=>'ucenter/pic:index', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'编辑荣誉资质', 'ctl'=>'ucenter/pic:edit', 'priv'=>'company'),
                    array('title'=>'点评管理', 'ctl'=>'ucenter/company:dianping', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'点评回复', 'ctl'=>'ucenter/company:dianpingReply', 'priv'=>'company'),
                    array('title'=>'商铺模板设置', 'ctl'=>'ucenter/company:template', 'priv'=>'company', 'menu'=>true),
                )
            ),
            array('title'=>'设计师团队', 'priv'=>'company', 'menu'=>true,
                'items'=>array(
                    array('title'=>'设计团队管理', 'ctl'=>'ucenter/team:index', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'添加设计师1', 'ctl'=>'passport:msignup', 'priv'=>'company' ),
                    array('title'=>'添加设计师', 'ctl'=>'ucenter/team:cdesgner', 'priv'=>'company' , 'menu'=>true),
                    array('title'=>'添加设计师', 'ctl'=>'ucenter/team:create', 'priv'=>'company'),
                    array('title'=>'解雇设计师', 'ctl'=>'ucenter/team:delete', 'priv'=>'company'),
                )
            ),
            array('title'=>'装修案例', 'priv'=>'company', 'menu'=>true,
                'items'=>array(
                    array('title'=>'发布案例', 'ctl'=>'ucenter/case:create', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'案例管理', 'ctl'=>'ucenter/case:index', 'priv' =>'company', 'menu'=>true),
                    array('title'=>'编辑案例', 'ctl'=>'ucenter/case:edit', 'priv'=>'company'),
                    array('title'=>'案例图片', 'ctl'=>'ucenter/case:pic', 'priv'=>'company'),
                    array('title'=>'案例图片更新', 'ctl'=>'ucenter/case:update', 'priv'=>'company'),
                    array('title'=>'案例图片上传', 'ctl'=>'ucenter/case:upload', 'priv'=>'company'),
                    array('title'=>'删除图片', 'ctl'=>'ucenter/case:delete', 'priv'=>'company'),
                )
            ),
            array('title'=>'招标管理', 'priv'=>'company', 'menu'=>true,
                'items'=>array(
                    array('title'=>'招标进行时', 'ctl'=>'ucenter/tenders:in', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'查看招标', 'ctl'=>'ucenter/tenders:view', 'priv'=>'company'),
                    array('title'=>'花金币看标', 'ctl'=>'ucenter/tenders:look', 'priv'=>'company'),
                    array('title'=>'招标跟踪', 'ctl'=>'ucenter/tenders:tracking', 'priv'=>'company'),
                    array('title'=>'跟踪反馈', 'ctl'=>'ucenter/tenders:create', 'priv'=>'company' ),
                    array('title'=>'我的客户', 'ctl'=>'ucenter/tenders:index', 'priv'=>'company', 'menu'=>true),
                  
                    array('title'=>'预约设计', 'ctl'=>'ucenter/yuyue:designer', 'priv'=>'company', 'menu'=>true),
                )
            ),
            array('title'=>'优惠信息', 'priv'=>'company', 'menu'=>true,
                'items'=>array(
                    array('title'=>'发布优惠', 'ctl'=>'ucenter/youhui:create', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'优惠信息', 'ctl'=>'ucenter/youhui:index', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'编辑优惠', 'ctl'=>'ucenter/youhui:edit', 'priv'=>'company'),
                    array('title'=>'报名查看', 'ctl'=>'ucenter/youhui:sign', 'priv'=>'company'),
                )
            ),
            array('title'=>'在建工地', 'priv'=>'company', 'menu'=>true,
                'items'=>array(
                    array('title'=>'发布工地', 'ctl'=>'ucenter/site:create', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'工地管理', 'ctl'=>'ucenter/site:index', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'修改工地', 'ctl'=>'ucenter/site:edit', 'priv'=>'company'),
                    array('title'=>'工地日记', 'ctl'=>'ucenter/site:diary', 'priv'=>'company'),
                    array('title'=>'写工地日记', 'ctl'=>'ucenter/site:diaryCreate', 'priv'=>'company'),
                    array('title'=>'写工地日记', 'ctl'=>'ucenter/site:diaryEdit', 'priv'=>'company'),
                )
            ),
            array('title'=>'企业新闻', 'priv'=>'company', 'menu'=>true,
                'items'=>array(
                    array('title'=>'发布新闻', 'ctl'=>'ucenter/news:create', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'企业新闻', 'ctl'=>'ucenter/news:index', 'priv'=>'company', 'menu'=>true),
                    array('title'=>'编辑新闻', 'ctl'=>'ucenter/news:edit', 'priv'=>'company'),
                )
            ),
        
            //装修公司结束

            array('title'=>'商铺管理', 'priv'=>'shop', 'menu'=>true,
                'items'=>array(
                    array('title'=>'商铺设置', 'ctl'=>'ucenter/shop:index', 'priv'=>'shop', 'menu'=>true),
                    array('title'=>'商铺资料', 'ctl'=>'ucenter/shop:info', 'priv'=>'shop'),
                    array('title'=>'购买说明', 'ctl'=>'ucenter/shop:gmsm', 'priv'=>'shop'),
                    array('title'=>'商铺SEO', 'ctl'=>'ucenter/shop:seo', 'priv'=>'shop'),
                    array('title'=>'商铺模板', 'ctl'=>'ucenter/shop:skin', 'priv'=>'shop'),
                    array('title'=>'店铺分类', 'ctl'=>'ucenter/shop/vcate:index', 'priv'=>'shop', 'menu'=>true),
                    array('title'=>'添加分类', 'ctl'=>'ucenter/shop/vcate:create', 'priv'=>'shop'),
                    array('title'=>'更新分类', 'ctl'=>'ucenter/shop/vcate:edit', 'priv'=>'shop'),
                    array('title'=>'删除分类', 'ctl'=>'ucenter/shop/vcate:delete', 'priv'=>'shop'),
                    array('title'=>'删除分类', 'ctl'=>'ucenter/shop:catechildren', 'priv'=>'shop'),
                    array('title'=>'店铺广告', 'ctl'=>'ucenter/shop/banner:index', 'priv'=>'shop'),
                    array('title'=>'上传广告', 'ctl'=>'ucenter/shop/banner:upload', 'priv'=>'shop'),
                    array('title'=>'更新广告', 'ctl'=>'ucenter/shop/banner:update', 'priv'=>'shop'),
                    array('title'=>'删除广告', 'ctl'=>'ucenter/shop/banner:delete', 'priv'=>'shop'),
                    array('title'=>'活动资讯', 'ctl'=>'ucenter/shop/news:index', 'priv'=>'shop', 'menu'=>'true'),
                    array('title'=>'添加资讯', 'ctl'=>'ucenter/shop/news:create', 'priv'=>'shop'),
                    array('title'=>'修改资讯', 'ctl'=>'ucenter/shop/news:edit', 'priv'=>'shop'),
                    array('title'=>'删除资讯', 'ctl'=>'ucenter/shop/news:delete', 'priv'=>'shop'),
                    array('title'=>'店铺点评', 'ctl'=>'ucenter/shop/comment:index', 'priv'=>'shop', 'menu'=>true),
                    array('title'=>'回复点评', 'ctl'=>'ucenter/shop/comment:reply', 'priv'=>'shop'),
                )
            ),
            array('title'=>'商品管理', 'priv'=>'shop', 'menu'=>true,
                'items'=>array(
                    array('title'=>'商品管理', 'ctl'=>'ucenter/product:index', 'priv'=>'shop', 'menu'=>true),
                    array('title'=>'添加商品', 'ctl'=>'ucenter/product:create', 'priv'=>'shop'),
                    array('title'=>'修改商品', 'ctl'=>'ucenter/product:edit', 'priv'=>'shop'),
                    array('title'=>'删除商品', 'ctl'=>'ucenter/product:delete', 'priv'=>'shop'),
                    array('title'=>'商品相册', 'ctl'=>'ucenter/product:photo', 'priv'=>'shop'),
                    array('title'=>'上传图片', 'ctl'=>'ucenter/product:upload', 'priv'=>'shop'),
                    array('title'=>'更新删除', 'ctl'=>'ucenter/product:updatephoto', 'priv'=>'shop'),
                    array('title'=>'删除图片', 'ctl'=>'ucenter/product:deletephoto', 'priv'=>'shop'),
                    array('title'=>'商品评论', 'ctl'=>'ucenter/product/comment:index', 'priv'=>'shop', 'menu'=>true),
                    array('title'=>'回复评论', 'ctl'=>'ucenter/product/comment:reply', 'priv'=>'shop'),
                )
            ),
            array('title'=>'商铺订单', 'priv'=>'shop', 'menu'=>true,
                'items'=>array(
                    array('title'=>'订单管理', 'ctl'=>'ucenter/shop/order:index', 'priv'=>'shop', 'menu'=>true),
                    array('title'=>'更改状态', 'ctl'=>'ucenter/shop/order:update', 'priv'=>'shop'),
                    array('title'=>'预约管理', 'ctl'=>'ucenter/shop/yuyue:index', 'priv'=>'shop', 'menu'=>true),
                    array('title'=>'查看预约', 'ctl'=>'ucenter/shop/yuyue:detail', 'priv'=>'shop'),
                )
            ), 
            array('title'=>'优惠券管理', 'priv'=>'shop', 'menu'=>true,
                'items'=>array(
                    array('title'=>'优惠券管理', 'ctl'=>'ucenter/shop/coupon:index', 'priv'=>'shop', 'menu'=>true),
                    array('title'=>'添加优惠券', 'ctl'=>'ucenter/shop/coupon:create', 'priv'=>'shop'),
                    array('title'=>'修改优惠券', 'ctl'=>'ucenter/shop/coupon:edit', 'priv'=>'shop'),
                    array('title'=>'删除优惠券', 'ctl'=>'ucenter/shop/coupon:delete', 'priv'=>'shop'),
                    array('title'=>'下载日志', 'ctl'=>'ucenter/shop/coupon:downloads', 'priv'=>'shop', 'menu'=>true),
                )
            ),
);
