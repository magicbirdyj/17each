<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--
<META HTTP-EQUIV="pragma" CONTENT="no-cache" /> 
<META HTTP-EQUIV="Cache-Control" CONTENT="no-store, must-revalidate" /> 
<META HTTP-EQUIV="expires" CONTENT="Wed, 26 Feb 1997 08:21:57 GMT" /> 
<META HTTP-EQUIV="expires" CONTENT="0" /> 
-->
<meta property="wb:webmaster" content="2e7567efc888fc1e" /> <!--新浪微博分享必须-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/head.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/footer.css">
<title><?php echo ($title); ?></title>


 

<link rel="stylesheet" type="text/css" href="/Public/Home/Css/login.css">
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
</head>

<body>
<div class="zhuce_top">
    <a href="<?php echo U('Index/index');?>"><img src="/Public/Home/Images/menu_and_foot/logo.png"/></a>
<span class="zhuce_top_spanl">账户登录</span>
<div class="zhuce_top_r">
<div class="zhuce_top_divr">还没有账号？</div>
<a  class="a_dl" href="<?php echo U('Zhuce/index');?>" style="width: 60px;">免费注册</a>
</div>
</div>

<hr class="zhuce_hr" />
<div class="zhuce1_div_form">
    <div class="login_left">
        <img src="/Public/Common/Images/login_back.png" />
    </div>
    <form name="zhuce"  method="post" action="<?php echo U('Login/chenggong');?>" id="form1" >
        <input type="hidden" name="hidden" value="<?php echo ($time); ?>" />
        <input type="hidden" name="leixing" value="login" />
<div class="zhuce1_box">
    <div class="login_head">账号登录</div>
<div class="zhuce1_tr">
        <i class="icon icon-user"></i>
<input type="text" name="shoujihao" class="zhuce1_tr_td2" placeholder="手机号" />
<span id="infor_shoujihao"></span>
</div><!--第一行-->

<div class="zhuce1_tr">
    <i class="icon icon-password"></i>
<input type="password" name="mima" class="zhuce1_tr_td2" placeholder="密码"/>
<span id="infor_mima"><?php echo ($infor_mima); ?></span>
</div><!--第二行-->
<a href="javascript:void(0)" id="zhuce1_xiayibu" class="a_xyb" onClick="return login(this)" style="float: left;" >登录</a>
<div id="info_login" style="font-size: 14px; float: left; margin: 40px 0px 0px 20px;"></div>
</div>

</form>
</div>


<script src="/Public/Home/Js/denglu.js" type="text/javascript"></script>





<div class="footer"><!--//网页脚部-->
<div class="footer_content"><!--//网页脚部内容-->
<div class="site-info"><!--//网页脚部信息--><h3>关注我们</h3>
<ul><li><a href="<?php echo U('Company/index','name=yiqiwangweixin');?>">一起网微信</a></li><li><a href="<?php echo U('Company/index','name=yiqiwangapp');?>">一起网APP</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>公司信息</h3>
<ul><li><a href="<?php echo U('Company/index','name=about_17each');?>">关于一起网</a></li><li><a href="<?php echo U('Company/index','name=promise');?>">一起网承诺</a></li><li><a href="<?php echo U('Company/index','name=user_protocol');?>">用户协议</a></li><li><a href="<?php echo U('Company/index','name=hunliren_protocol');?>">商家协议</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>合作联系</h3>
<ul><li><a href="<?php echo U('Company/index','name=lianxiwomen');?>">联系我们</a></li><li><a href="<?php echo U('Company/index','name=join');?>">加入我们</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>用户帮助</h3>
<ul><li><a href="#<?php echo U('Company/index','name=liucheng');?>">一起网流程</a></li><li><a href="<?php echo U('Company/index','name=tuikuang');?>">申请退款</a></li><li><a href="<?php echo U('Company/index','name=question');?>">常见问题</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info_r"><!--//网页脚部信息-->
<i></i>
<p>微信公众号：17网</p>
<p>服务时间：每天 9:00 - 22:00</p>
</div><!--//网页脚部信息-->
</div><!--//网页脚部内容-->
<div class="icp">&copy;<?php echo ($date); echo ($copy); ?></div>
</div><!--//网页脚部-->
</body>
</html>