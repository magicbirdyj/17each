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
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>

<body>
<div class="zhuce_top">
    <a href="<?php echo U('Index/index');?>"><img src="/Public/Home/Images/menu_and_foot/logo.png"/></a>
<span class="zhuce_top_spanl">成为婚礼人</span>
<div class="zhuce_top_r">
<div class="zhuce_top_divr">已是婚礼人？</div>
<a  class="a_dl" href="<?php echo U('Login/index');?>" style="width:80px;">我是婚礼人</a>
</div>
</div>
<div class="zhuce_head zhuce_head_4">
<div>欢迎注册:</div>
<ul>
<li><span>设置登录名</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span>填写账户信息</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span class="zhuce_head_self">填写婚礼人资料</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span>注册完成</span></li>
</ul>
</div>
<hr class="zhuce_hr" />

<div class="zhuce4">
    <form name="zhuce" method="post" enctype="multipart/form-data" action="<?php echo U('Zhuce/zhuce4_check');?>">
         <input name="member_file_touxiang" value="" type="hidden"/> 
         <input name="member_file_shenfenzheng" value="" type="hidden"/> 
         <input name="member_file_erweima" value="" type="hidden"/> 
<div class="zhuce1_tr">
    <div class="zhuce4_tr_td1" style="height: 35px;line-height: 35px;">上传头像</div>
    <div class="file_jia" id="file_touxiang">+</div>                
    <span id="span_touxiang"></span>
    <span class="file_tishi">(请上传3：2的图片，最高5M，建议分辨率296*198)</span>
</div><!--第一行-->
<div style="width:280px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1">性别</div>
<div class="zhuce4_tr_td2">
    <input name="radio_sex" type="radio" class="zhuce4_radio" value="0" />男
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="radio_sex" type="radio" class="zhuce4_radio" value="1" />女
</div>
</div><!--第二行-->
<div style="width:280px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1">服务形式</div>
<div class="zhuce4_tr_td2">
<input name="radio_fuwuxingshi" type="radio" class="zhuce4_radio" value="0" />个人
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="radio_fuwuxingshi" type="radio" class="zhuce4_radio" value="1"  />工作室&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--<input name="radio_fuwuxingshi" type="radio" class="zhuce4_radio" value="2"  />公司-->
</div>
</div><!--第三行-->
<div style="width:350px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr" id="radio_1">
<div class="zhuce4_tr_td1">真实姓名</div>
<input name="name" type="text" class="zhuce4_tr_td2 zhuce4_text"  />
<span id="infor_name"></span>
</div><!--第四行-->
<div class="zhuce1_tr" id="radio_2">
    <div class="zhuce4_tr_td1" style="height: 35px;line-height: 35px;">身份证照</div>
    <div class="file_jia" id="file_shenfenzheng">+</div>                
    <span id="span_shenfenzheng"></span>
    <span class="file_tishi">(请上传身份证正面/非必须，可以后再上传)</span>
</div><!--第五行-->

<!--
<div class="zhuce1_tr" id="radio_3">
<div class="zhuce4_tr_td1">营业执照</div>
<input name="file_yingyezhizhao" type="file" class="zhuce4_tr_td2" />
<span id="span_yingyezhizhao"></span>
    
</div>--><!--第六行-->
    
    
<div style="width:350px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1">所在城市</div>
<select name="address_province" class="zhuce4_tr_td2 zhuce4_select" ></select>
<select name="address_city" class="zhuce4_tr_td2 zhuce4_select" ></select>
<select name="address_county" class="zhuce4_tr_td2 zhuce4_select" ></select>
<span id="span_select"></span>
</div><!--第七行-->
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1">详细地址</div>
<input name="address_juti" type="text" class="zhuce4_tr_td2 zhuce4_text"  />
<span id="infor_address_juti"></span>
</div><!--第八行-->
<div style="width:350px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1">联系方式</div>
<span style="padding-left:0px;">&nbsp;Q&nbsp;Q：</span>
<input name="contact_qq" type="text" class="zhuce4_tr_td2 zhuce4_text zhuce4_text_lianxifangshi"  />
<span id="infor_contact_qq"></span>
</div><!--第九行-->
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1"></div>
<span>微信：</span><input name="contact_weixin" type="text" class="zhuce4_tr_td2 zhuce4_text zhuce4_text_lianxifangshi"  />
<span id="infor_contact_weixin"></span>
</div>
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1"></div>
<span>邮箱：</span><input name="contact_email" type="text" class="zhuce4_tr_td2 zhuce4_text zhuce4_text_lianxifangshi"  />
<span id="infor_contact_email"></span>
</div>
<div style="width:700px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr">
    <div class="zhuce4_tr_td1" style="height: 35px;line-height: 35px;">微信二维码</div>
    <div class="file_jia" id="file_erweima">+</div>                
    <span class="file_tishi">(可选择不传)</span>
</div><!--第一行-->

<div style="width:700px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr" style="font-size:14px;padding:5px 0px;"><div class="zhuce4_tr_td1">服务内容
</div><div class="zhuce4_tr_td2">（最多两项）<span id="span_checkbox"></span></div>
</div><!--第十行-->
<div class="zhuce4_checkbox" id="zhuce4_checkbox">
<input type="checkbox" name="fuwuneirong[]" value="策划师"/><span>策划师</span>
<input type="checkbox" name="fuwuneirong[]" value="司仪" /><span>司仪</span>
<input type="checkbox" name="fuwuneirong[]" value="跟妆" /><span>跟妆</span>
<input type="checkbox" name="fuwuneirong[]" value="摄像" /><span>摄像</span>
<input type="checkbox" name="fuwuneirong[]" value="摄影" /><span>摄影</span><br />
<input type="checkbox" name="fuwuneirong[]" value="车队" /><span>车队</span>
<input type="checkbox" name="fuwuneirong[]" value="布置" /><span>布置</span>
<input type="checkbox" name="fuwuneirong[]" value="婚纱" /><span>婚纱</span>
<input type="checkbox" name="fuwuneirong[]" value="演艺" /><span>演艺</span>
<input type="checkbox" name="fuwuneirong[]" value="酒店" /><span>酒店
</div><!--第九行-->
<div style="width:700px;height:0px;border-top:1px dashed #666;"></div>

<div class="zhuce1_tr" style="position: relative;">
<div class="zhuce4_tr_td1">店铺介绍</div>  
<span id="infor_shop_introduce" style="position: absolute; top:40px;left:40px; width: 80px;"></span>
<textarea id="shop_introduce" name="shop_introduce" style="width:60%;height:150px;" class="zhuce4_tr_td2 zhuce4_text" placeholder="500字以内"></textarea>
</div>
<div style="width:700px;height:0px;border-top:1px dashed #666;"></div>
<a href="javascript:void(0)" id="zhuce1_xiayibu" class="a_xyb">下一步</a>
</form>
</div>

    <form id = "form_file_touxiang" enctype="multipart/form-data" action="<?php echo U('Zhuce/file_jia');?>" method="post" name="form_file_touxiang">   
        <input name="file_touxiang" type="file"  style="visibility:hidden; width:0px; height: 0px;"/>
    </form>
    <form id = "form_file_shenfenzheng" enctype="multipart/form-data" action="<?php echo U('Zhuce/file_jia');?>" method="post" name="form_file_shenfenzheng">   
        <input name="file_shenfenzheng" type="file" style="visibility:hidden; width:0px; height: 0px;" />
    </form>
    <form id = "form_file_erweima" enctype="multipart/form-data" action="<?php echo U('Zhuce/file_jia');?>" method="post" name="form_file_erweima">   
        <input name="file_erweima" type="file" style="visibility:hidden; width:0px; height: 0px;" />
    </form>
<script src="/Public/Home/Js/zhuce4.js" type="text/javascript"></script>
</body>
</html>



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