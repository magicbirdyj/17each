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


 

<link rel="stylesheet" type="text/css" href="/Public/Home/Css/zhuce.css">
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
</head>

<body>
<div class="zhuce_top">
<a href="<?php echo U('Index/index');?>"><img src="/Public/Home/Images/menu_and_foot/logo.png"/></a>
<span class="zhuce_top_spanl">账户注册</span>
<div class="zhuce_top_r">
<div class="zhuce_top_divr">已有婚啦啦账号？</div>
<a  class="a_dl" href="#">登录</a>
</div>
</div>
<div class="zhuce_head">
<div>欢迎注册:</div>
<ul>
<li><span>设置登录名</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span class="zhuce_head_self">填写账户信息</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span>注册完成</span></li>
</ul>
</div>
<hr class="zhuce_hr" />
<div class="zhuce1_div_form">
    <form name="zhuce"  method="post" action="<?php echo U('zhuce/zhuce3');?>">
        <input type="hidden" name="hidden" value="<?php echo ($time2); ?>" />
<div class="zhuce1_box">
<div class="zhuce1_tr">
    <div class="zhuce1_tr_td1">登陆名</div>
<div class="zhuce1_tr_td2" id="dlm_sjh"><?php echo ($dlm); ?></div>
<input class="butttom_sjyz" id="butttom_sjyz" type="button" name="btn_sjyz" value="免费获取短信动态码" />
</div><!--第一行-->

<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">短信动态码</div>
<input type="text" name="shoujiyanzheng" class="zhuce1_tr_td2"/>
<span id="infor_shoujiyanzheng"></span>
</div><!--第二行-->

<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">会员名</div>
<input type="text" name="huiyuanming" class="zhuce1_tr_td2"/>
<span id="infor_huiyuanming"></span>
</div><!--第二行-->
<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">设置密码</div>
<input type="password" name="shezhimima" class="zhuce1_tr_td2"/>
<span id="infor_shezhimima"></span>
</div><!--第三行-->
<div class="mimaxiaoguo" id="mimaxiaoguo">
<div class="mimaxiaoguo_fenlei">弱</div>
<div class="mimaxiaoguo_fenlei">中</div>
<div class="mimaxiaoguo_fenlei">强</div>
</div><!--密码效果-->
<div class="zhuce1_tr">
<div class="zhuce1_tr_td1 zhuce1_tr_teshu">确认密码</div>
<input type="password" name="querenmima" class="zhuce1_tr_td2 zhuce1_tr_teshu"/>
<span id="infor_querenmima"></span>
</div><!--第四行-->
<a href="javascript:void(0)" id="zhuce1_xiayibu" class="a_xyb" >下一步</a>
</div>

</form>
</div>
<script src="/Public/Home/Js/zhuce2.js" type="text/javascript"></script>






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