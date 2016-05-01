<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/Home/Css/login.css">
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
</head>

<body>
<div class="zhuce_top">
    <a href="<?php echo U('Index/index');?>"><img src="/Public/Home/Images/menu_and_foot/logo.png"/></a>
<span class="zhuce_top_spanl">后台登录</span>

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


<script src="/Public/Admin/Js/denglu.js" type="text/javascript"></script>