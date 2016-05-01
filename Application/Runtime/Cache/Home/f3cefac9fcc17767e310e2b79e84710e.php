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
<span class="zhuce_top_spanl">会员信息修改</span>
</div>
<div class="zhuce_head">
<div>密码修改:</div>
<ul>
<li><span class="zhuce_head_self">修改密码</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span>修改完成</span></li>
</ul>
</div>
<hr class="zhuce_hr" />
<div class="zhuce1_div_form">
    <form name="xiugaimima"  method="post" action="<?php echo U('Member/xiugai_mima_success');?>" id="form1" >
        <input type="hidden" name="hidden" value="<?php echo ($time); ?>" />
<div class="zhuce1_box">

<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">原密码</div>
<input type="text" name="yuan_mima" class="zhuce1_tr_td2" />
<span id="infor_yuan_mima"></span>
</div><!--第二行-->

<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">新密码</div>
<input type="text" name="new_mima" class="zhuce1_tr_td2" />
<span id="infor_new_mima"></span>
</div><!--第三行-->
<div class="mimaxiaoguo" id="mimaxiaoguo">
<div class="mimaxiaoguo_fenlei">弱</div>
<div class="mimaxiaoguo_fenlei">中</div>
<div class="mimaxiaoguo_fenlei">强</div>
</div><!--密码效果-->

<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">确认新密码</div>
<input type="text" name="again_mima" class="zhuce1_tr_td2" />
<span id="infor_again_mima"></span>
</div><!--第四行-->

<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">验证码</div>
<input type="text" name="yanzhengma" class="zhuce1_tr_td2"/>
<span id="infor_yanzhengma"><?php echo ($infor_yanzhengma); ?></span>
</div><!--第五行-->
<img class="zhuce1_yanzhengma" src="/Home/Member/getCode" /><span>看不清？点击图片</span>
<a href="javascript:void(0)" id="zhuce1_xiayibu" class="a_xyb" onClick="return checkForm(this)">下一步</a>
</div>

</form>
</div>


<script src="/Public/Home/Js/xiugai_mima.js" type="text/javascript"></script>

</body>
</html>



<div class="footer"><!--//网页脚部-->
<div class="footer_content"><!--//网页脚部内容-->
<div class="site-info"><!--//网页脚部信息--><h3>关注我们</h3>
<ul><li><a href="#">一起网微信</a></li><li><a href="#">一起网APP</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>公司信息</h3>
<ul><li><a href="company/about_company.php">关于一起网</a></li><li><a href="#">一起网承诺</a></li><li><a href="#">用户协议</a></li><li><a target="blank" href="<?php echo U('Company/hunliren_protocol');?>">商家协议</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>合作联系</h3>
<ul><li><a href="#">联系我们</a></li><li><a href="#">加入我们</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>用户帮助</h3>
<ul><li><a href="#">一起网流程</a></li><li><a href="#">申请退款</a></li><li><a href="#">常见问题</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info_r"><!--//网页脚部信息-->
<i></i>
<p>客服电话：666-666-6666</p>
<p>服务时间：每天 9:00 - 22:00</p>
</div><!--//网页脚部信息-->
</div><!--//网页脚部内容-->
<div class="icp">&copy;<?php echo ($date); echo ($copy); ?></div>
</div><!--//网页脚部-->
</body>
</html>