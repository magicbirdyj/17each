<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//tp验证码加密函数
   function authcode($str){
        $key = substr(md5('ThinkPHP.CN'), 5, 8);
        $str = substr(md5($str), 8, 10);
        return md5($key . $str);
    }


//比对验证码是否正确
function check_verify($code){ 
    if(NOW_TIME - $_SESSION['d2d977c58444271d9c780187e93f80e5']['verify_time'] > 30){
        unset($_SESSION['d2d977c58444271d9c780187e93f80e5']);//清空session
        return -1;//验证码过期
    }elseif(authcode(strtoupper($code))!=$_SESSION['d2d977c58444271d9c780187e93f80e5']['verify_code']){
        return 0;//验证码错误
    }else {
        return 1;//验证码正确
    }
}

//判断是否只含有数字 正确返回true 否则 返回false
function is_shuzi($str){
    $reg = '/^\d+$/i';
    $result=preg_match($reg,$str);
    if($result==0){
        return false;
    }else{
        return true;
    }
}

//验证手机号，如果是，返回true,否则返回false
function is_shoujihao($str){
    $reg='/^1[3458]\d{9}$/i';
    $result=preg_match($reg,$str);
    if($result==0) {
        return false;
    }else{
        return true;
    }
}

//验证邮箱，如果是返回true,否则返回false
function is_youxiang($str){
    $reg='/^w+[.\w]@(\w+.)+\w{2,4}$/i';
    $result=preg_match($reg,$str);
    if($result==0) {
        return false;
    }else{
        return true;
    }
}


//验证IP是否有效，如果是返回true,否则返回false
function is_ip($str){
    $reg='/^([1-9]|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])(\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])){3}$/i';
    $result=preg_match($reg,$str);
    if($result==0) {
        return false;
    }else{
        return true;
    }
}


//验证是否含有非法字符，含有非法返回true，否则返回false
function is_feifa($str){
    //$reg='/[=!;:#%&\\\/\^\$\(\)\[\]\{\}\*\+\?\-\"\']+/i';
    $reg='/[=;:#&\/\^\$\(\)\[\]\{\}\*\+\?\-\"\']+/i';
    $result=preg_match($reg,$str);
    if($result!==0) {
        return true;
    }else{
        return false;
    }
}
//验证是否价格
function is_price($str){
    $reg='/^\d+\.?\d{0,2}$/i';
    $result=preg_match($reg,$str);
    if($result!==0) {
        return true;
    }else{
        return false;
    }
}


function replace_a($str){
    $reg='/(href="http:\/\/www\.)([^1][^7][^e][^a][^c][^h]\w*|\w{1,5})(\.\w+)/is';
    $result= preg_replace($reg,"$1*****$3", $str);
    return $result;
 
}

//得到微秒数
function gettime(){
    $time=explode(' ',  microtime());
    $mtime=  substr($time[0], strpos($time[0],'.')+1,6);
    return $time[1].$mtime;
}

//得到上传文件的重命名
function getname(){
    //$extension=  substr($filename, strpos($filename, '.'));
    $name=gettime();
    return $name.mt_rand(1000,9999);
}

//判断文件是否是合法图片
/*
function is_image(){
    $key=  key($_FILES);
    $file=$_FILES[$key]['tmp_name'];
    $filename=$_FILES[$key]['name'];
    $extension=strtolower(substr($filename, strpos($filename, '.')+1));
    $array=array('jpg', 'jpeg', 'gif', 'png', 'swf', 'bmp');
    if(in_array($extension, $array,true)&&@getimagesize($file)){
        return true;
    }else{
        return false;
    }
}
*/



//生成随机字符串
function create_char($length=0){
    $rand='';
    for($i=0;$i<$length;$i++){
        $rand .= chr(mt_rand(33,126));
    }
    return $rand;
}

//得到editor编辑框内的图片文件名（包括地址）
function get_file($str){
    $reg='/<img.*?src="\/([^"]+)"[^>]*>/i';
    preg_match_all($reg,$str,$result);
    return $result;
}

//创建当前日期的文件夹
function creat_file_date($dir){
    $today=date('Ymd',time());
    if(!file_exists($dir.$today)){
        mkdir($dir.$today);
    }
    return $dir.$today;
}

//创建文件夹,创建前先检查是否存在
function creat_file($dir){
    if(!file_exists($dir)){
        mkdir($dir);
    }
}

//把20151221转换成2015-12-21格式
function date_geshi1($date){
    $y=  substr($date,0,4);
    $m=  substr($date,4,2);
    $d=  substr($date,6,2);
    $date1=$y.'-'.$m.'-'.$d;
    return $date1;
}

//获取订单状态
function order_status($pay_status,$status,$order_id,$server_day,$goods_id){
    if($pay_status==='0'){
        if($status==='4'){
            return array('status'=>'交易关闭','status_button'=>'删除订单','status_url'=>"$order_id");
        }else{
            return array('status'=>'未支付','status_button'=>'去付款','status_url'=>"/Home/Goods/zhifu/server_day/{$server_day}/goods_id/{$goods_id}.html");
        }  
    }elseif($pay_status==='1'){
        if($status==='1'){
            if(shijianchuo($server_day) > time()){
                 return array('status'=>'等待商家服务','status_button'=>'等待商家服务','status_url'=>"javascript:void(0)");
            }else{
                return array('status'=>'等待确认完成','status_button'=>'确认服务完成','status_url'=>"/Home/Order/queren/order_id/{$order_id}.html");
            }
        }else if($status==='2'){
            return array('status'=>'待评价','status_button'=>'去评价','status_url'=>"/Home/Order/appraise/order_id/{$order_id}.html");
        }else if($status==='3'){
            return array('status'=>'交易成功','status_button'=>'删除订单','status_url'=>"$order_id");
        }
    }elseif($pay_status==='2'){
        return array('status'=>'退款中...','status_button'=>'退款中...','status_url'=>"/Home/Order/tuikuang/order_id/{$order_id}.html");
    }elseif($pay_status==='3'){
        return array('status'=>'退款成功','status_button'=>'退款成功','status_url'=>"/Home/Order/tuikuang/order_id/{$order_id}.html");
    }
}
//数组取值
function shuzu($shuzu,$xiabiao){
    return $shuzu[$xiabiao];
}

//星星分数变成百分数
function xingxing_baifenbi($score){
    $score1=round($score/5,2)*100;
    return $score1.'%';
}
//生成属性参数url(第一个参数是目前url,第二个参数是属性值)
function shuxing_url($url,$value){
    $is_shuxing=strpos($url,'/shuxing/');
    if($is_shuxing!==false){
        $a=substr($url,0,$is_shuxing+9);
        $b=substr($url,$is_shuxing+9 );
        return $a.$value.'__'.$b;
    }else{
        return $url.'/shuxing/'.$value;
    }
}

//取消属性参数(第一个参数是目前url,第二个参数是属性值)
function quxiao_shuxing($url,$value){
    $is_jia=strpos($url,'__');
    //$is_shuxing=strpos($url,'/shuxing/');
    if($is_jia!==false){ 
        $weizhi=strpos($url,urlencode($value));
        $a=str_replace(urlencode($value),'',$url);
        

        if(substr($a,$weizhi-2,2)==='__'){
            return substr($a,0,$weizhi-2).substr($a,$weizhi);
        }else{
            return substr($a,0,$weizhi).substr($a,$weizhi+2);
        }
    }else{
        return str_replace('/shuxing/'.urlencode($value),'',$url);
    }
}


//根据cat_id得到分类名
   function get_catname($cat){
        switch ($cat){
            case '':
                return '全部';
                break;
            case '1':
                return '策划师';
                break;
            case '2':
                return '司仪';
                break;
            case '3':
                return '布置';
                break;
            case '4':
                return '摄像';
                break;
            case '5':
                return '摄影';
                break;
            case '6':
                return '跟妆';
                break;
            case '7':
                return '车队';
                break;
            case '8':
                return '演艺';
                break;
            case '9':
                return '舞美';
                break;
            case '10':
                return '酒店';
                break;
            case '11':
                return '喜铺';
                break;       
        }
    }
    
    //属性参数的除了+号以外的字符序列化
    function xuliehua_shuxing($shuxing){
        $arr_shuxing=explode('+',$shuxing);
        $a='';
        foreach ($arr_shuxing as $value){
            $a.=urlencode($value).'+';
        }
        return substr($a,0,-1);
    }
    
    //server_day转换成时间戳
    function shijianchuo($s_d){
        $a=mktime(0, 0, 1,substr($s_d,4,2), substr($s_d,6,2), substr($s_d,0,4));
        return $a;
    }
    
    
 
 //根据php的$_SERVER['HTTP_USER_AGENT'] 中各种浏览器访问时所包含各个浏览器特定的字符串来判断是属于PC还是移动端
function checkmobile() {
 global $_G;
 //$mobile = array();
//各个触控浏览器中$_SERVER['HTTP_USER_AGENT']所包含的字符串数组
 static $touchbrowser_list =array('iphone', 'android', 'phone', 'mobile', 'wap', 'netfront', 'java', 'opera mobi', 'opera mini',
    'ucweb', 'windows ce', 'symbian', 'series', 'webos', 'sony', 'blackberry', 'dopod', 'nokia', 'samsung',
    'palmsource', 'xda', 'pieplus', 'meizu', 'midp', 'cldc', 'motorola', 'foma', 'docomo', 'up.browser',
    'up.link', 'blazer', 'helio', 'hosin', 'huawei', 'novarra', 'coolpad', 'webos', 'techfaith', 'palmsource',
    'alcatel', 'amoi', 'ktouch', 'nexian', 'ericsson', 'philips', 'sagem', 'wellcom', 'bunjalloo', 'maui', 'smartphone',
    'iemobile', 'spice', 'bird', 'zte-', 'longcos', 'pantech', 'gionee', 'portalmmm', 'jig browser', 'hiptop',
    'benq', 'haier', '^lct', '320x320', '240x320', '176x220');
//window手机浏览器数组【猜的】
 static $mobilebrowser_list =array('windows phone');
//wap浏览器中$_SERVER['HTTP_USER_AGENT']所包含的字符串数组
 static $wmlbrowser_list = array('cect', 'compal', 'ctl', 'lg', 'nec', 'tcl', 'alcatel', 'ericsson', 'bird', 'daxian', 'dbtel', 'eastcom',
   'pantech', 'dopod', 'philips', 'haier', 'konka', 'kejian', 'lenovo', 'benq', 'mot', 'soutec', 'nokia', 'sagem', 'sgh',
   'sed', 'capitel', 'panasonic', 'sonyericsson', 'sharp', 'amoi', 'panda', 'zte');
 $pad_list = array('pad', 'gt-p1000');
 $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);
 if(dstrpos($useragent, $pad_list)) {
  return false;
 }
 if(($v = dstrpos($useragent, $mobilebrowser_list, true))){
  $_G['mobile'] = $v;
  return '1';
 }
 if(($v = dstrpos($useragent, $touchbrowser_list, true))){
  $_G['mobile'] = $v;
  return '2';
 }
 if(($v = dstrpos($useragent, $wmlbrowser_list))) {
  $_G['mobile'] = $v;
  return '3'; //wml版
 }
 $brower = array('mozilla', 'chrome', 'safari', 'opera', 'm3gate', 'winwap', 'openwave', 'myop');
 if(dstrpos($useragent, $brower)) return false;
 $_G['mobile'] = 'unknown';
//对于未知类型的浏览器，通过$_GET['mobile']参数来决定是否是手机浏览器
 if(isset($_G['mobiletpl'][$_GET['mobile']])) {
  return true;
 } else {
  return false;
 }
}
/**
 * 判断$arr中元素字符串是否有出现在$string中
 * @param  $string     $_SERVER['HTTP_USER_AGENT'] 
 * @param  $arr          各中浏览器$_SERVER['HTTP_USER_AGENT']中必定会包含的字符串
 * @param  $returnvalue 返回浏览器名称还是返回布尔值，true为返回浏览器名称，false为返回布尔值【默认】
 * @author           discuz3x
 * @lastmodify    2014-04-09
 */
function dstrpos($string, $arr, $returnvalue = false) {
 if(empty($string)) return false;
 foreach((array)$arr as $v) {
  if(strpos($string, $v) !== false) {
   $return = $returnvalue ? $v : true;
   return $return;
  }
 }
 return false;
}



//url改变参数
function change_url_canshu($url_full,$canshu,$value){
    
    $index_0=strpos($url_full,'.html');
    if($index_0){
        $url=substr($url_full, 0,$index_0);
    }else{
        $url=$url_full;
    }
    $url=urldecode($url);
    $index=strpos($url,$canshu);
    if($index){
        //$url_f=  substr($url, 0,$index);
        $url_b=  substr($url, $index);
        $arr=  explode('/', $url_b);
        $new=  str_replace($arr[1], $value, $url);
    }else{
        $new=$url.'/'.$canshu.'/'.$value;
    }
    return $new;
    
}



  function is_weixin() {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
        return true;
    }
    return false;
}