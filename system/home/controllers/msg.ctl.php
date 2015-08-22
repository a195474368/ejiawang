<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: index.ctl.php 2599 2013-12-28 07:37:13Z langzhong $
 */

class Ctl_Msg  extends Ctl
{
    
    function __construct($msg ,$tel,$code="")
  {
    // //1.设置短信验证码
    // $code=rand(100000,999999);
    $data =$code.$msg;
    //2.发送短信
    $post_data = array();
    $post_data['account'] = 'oushida';//测试账号，联系业务员获取
    $post_data['pswd'] = 'Txb123456';//测试账号密码
    $post_data['mobile'] =$tel;//测试使用手机号码
    $post_data['needstatus']="true";
    
   $post_data['msg']=mb_convert_encoding($data,'UTF-8', 'UTF-8');
   $url='http://222.73.117.158/msg/HttpBatchSendSM?'; 
   $o="";
   foreach ($post_data as $k=>$v)
   {
    $o.= "$k=".urlencode($v)."&";
   }
   $post_data=substr($o,0,-1);
 
   $ch = curl_init();

   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   curl_setopt($ch, CURLOPT_URL,$url);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//屏蔽界面输出
   $result = curl_exec($ch);

   // $urlruten='<script type="text/javascript">window.history.go(-1);</script>';
   // echo $urlruten;
   // header('Location: http://www.example.com/');
  }

  public function index()
    {  

        $api =new Ctl_Msg();//调用api
        
    }


}

?>
                