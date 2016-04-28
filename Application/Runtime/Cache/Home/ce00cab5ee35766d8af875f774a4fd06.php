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


 

<link rel="stylesheet" type="text/css" href="/Public/Home/Css/member.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/hunliren_bianji.css">
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>

<body>
    


<a name="top"></a>
<div class="top"><!--顶部-->
<div class="top1">
<span class="span1">
    <!--<a  href="#" class="red">登录</a><a href="<?php echo U('Zhuce/index');?>">注册</a>-->
    <?php echo ($yonghuxinxi); ?>
    <a id="noborder" href="#">手机一起网</a>
</span>

    <ul class="span2">   
        <li><a  href="<?php echo U('Order/index');?>">我的订单</a></li>
        <li><a   href="<?php echo U('Member/index');?>">我的一起网</a></li>
        <li><a  href="<?php echo U('Member/cart');?>">购物车</a></li>
        <li><a  href="<?php echo U('Member/hunlirenshangjiaxinxi');?>">我是婚礼人</a></li>
        <li id="li_history">
            <a href="javascript:void(0);"  id="a_history">最近浏览</a>
    <div class="menu_history" id="menu_history">
        <ul class="menu_history_ul">
            <?php if(is_array($distory_goods)): $i = 0; $__LIST__ = $distory_goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <a class="a_history" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>">
                    <div class="div_history">
                        <img src="<?php echo ($vo['goods_img']); ?>" />
                    </div>
                    <h5><?php echo ($vo['goods_name']); ?></h5>
                    <span><em>&yen;<?php echo ($vo['price']); ?></em> <s><?php echo ($vo['yuan_price']); ?></s> </span>
                </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <p class="clear">
            <a href="javascript:void(0);" id="delete_distory">清空最近浏览记录</a>
        </p>
    </div>
        </li>
        <li><a id="noborder" href="#">联系客服</a></li>
    </ul>
    
</div>
</div><!--//顶部-->
<div class="logo"><!--logo-->
    <a href="<?php echo U('Index/index');?>"><div class="logol"></div></a>
<div class="serch">
    <form name="searchform" action="<?php echo U('Index/search');?>" method="get">
        <input class="inputsr" type="text" name="sp" value="<?php echo ($get['sp']); ?>" placeholder="西式 策划" maxlength="100" />
<input class="submitsr" type="submit" id='sr' value="搜索" />
</form>
</div>
<div class="logor">

<div class="head_chengnuo_content">
    <a id='17weixin'>
        <img class="weixin_tubiao" src="/Public/Home/Images/public/weixin_tubiao.jpg" />
        <img class="weixin_erweima" id='weixin_erweima' src="/Public/Home/Images/public/17_weixin.jpg" />
        <div class="phone2">咨询微信</div>
        </a>
             <a href="<?php echo U('Company/index','name=shuangbeipeifu');?>">
             <i class="peifu"></i>
             双倍赔付
             </a>
             <a href="<?php echo U('Company/index','name=suishitui');?>">
             <i class="tui"></i>
             随时退
             </a>
             <a href="<?php echo U('Company/index','name=baozhengjin');?>" style="margin-right: 0px;">
                 <i class="baozhengjin">
                     保
                 </i>
                 保证金
             </a>
         </div>
</div>
</div><!--//logo-->
<div class="menu"><!--导航-->
<div class="menu_l">特色一起网</div>
<div class="menu_r">
<ul>
<li><a href="<?php echo U('Index/index');?>">首页</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>1));?>">策划师</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>2));?>">司仪</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>3));?>">布置</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>4));?>">摄像</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>5));?>">摄影</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>6));?>">跟妆</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>7));?>">车队</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>8));?>">演艺</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>9));?>">婚纱</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>10));?>">酒店</a></li>
<li><a href="<?php echo U('Category/index',array('cid'=>11));?>">喜铺</a></li>
</ul>
</div>
</div><!--//导航-->
<script  type="text/javascript">
    $('.div_history img').each(function(i,item){
        if($(item).width()<90){
            $(item).css('width','90px');
            $(item).css('height','auto');
        }
    });
    
    $('#sr').bind('click',function(){
        if($('input[name=sp]').val()==''){
            var a=$('input[name=sp]').attr('placeholder');
            $('input[name=sp]').val(a);
        }
    });
    
    $('.span2>li').bind('mouseover',function(){
        $(this).css('background-color','#FFF');
    });
    $('.span2>li').bind('mouseout',function(){
        $(this).css('background-color','#F9F9F9');
    });
    $('#li_history').bind('mouseover',function(){
        $('#menu_history').css('display','block');
    });
    $('#li_history').bind('mouseout',function(){
        $('#menu_history').css('display','none');
    });
    $('#delete_distory').bind('click',function(){
        var url="<?php echo U('Index/delete_distory');?>";
        $.ajax({
            type:'post',
            url:url,
            datatype:'json'
        });
         $('#menu_history').css('display','none');
    });
    $('#17weixin').bind('click',function(){
        if($('.weixin_erweima').css('display')!=='none'){
            $('.weixin_erweima').css('display','none');
        }else{
            $('.weixin_erweima').css('display','block');
        }
    });
</script>


    <div class="body">
        <div class="left">
            <div class="d1">我的主页</div>
            <ul class="left_ul">
                <li><a href="<?php echo U('Member/index');?>">会员信息</a></li>
                <li><a href="<?php echo U('Member/hunlirenshangjiaxinxi');?>">商家信息</a></li>
                <li><a href="<?php echo U('Member/xiugai_mima');?>">修改密码</a></li>
            </ul>
            <div class="d1">交易管理</div>
            <ul class="left_ul">
                <li><a href="<?php echo U('Order/index');?>">已买商品</a></li>
                <li><a href="<?php echo U('Member/sellection');?>">我的收藏</a></li>
                <li><a href="<?php echo U('Order/appraise_manage');?>">我已评价</a></li>
                <li><a href='<?php echo U("Member/xiugai_zhifumima");?>'>修改支付密码</a></li>
            </ul>
            <div class="d1">我是商家</div>
            <ul class="left_ul">
                <li><a href="<?php echo U('Member/release_goods');?>">发布商品</a></li>
                <li><a href="<?php echo U('Member/goods_sold');?>">已售商品</a></li>
                <li><a href="<?php echo U('Member/goods_list');?>">商品列表</a></li>
            </ul>
            <div class="d1">我的账户</div>
            <ul class="left_ul">
                <li><a href="<?php echo U('Member/daijinquan');?>">代金券</a></li>
                <li><a href="<?php echo U('Member/balance');?>">我的余额</a></li>
                <li><a href="<?php echo U('Member/tixian');?>">申请提现</a></li>
                <li><a href="<?php echo U('Member/zhanghushezhi');?>">账户设置</a></li>
                <li><a href='#'>安全中心</a></li>
            </ul>
        </div>

    <div class="right">
        <form name="zhuce" method="post" enctype="multipart/form-data" action="<?php echo U('Member/hunliren_bianji_check');?>">
         <input name="member_file_touxiang" value="" type="hidden"/> 
         <input name="member_file_shenfenzheng" value="" type="hidden"/> 
         <input name="member_file_erweima" value="" type="hidden"/> 
<div class="zhuce1_tr">
    <div class="zhuce4_tr_td1" style="height: 35px;line-height: 35px;">上传头像</div>
    <div class="div_goods_img"><img src="" class="empty_img" /><img class="goods_img" id='file_touxiang' src="<?php echo ($data['head_url']); ?>" /></div>                
    <span id="span_touxiang"></span>
    <span class="file_tishi">(请上传3：2的图片，最高5M，建议分辨率296*198)</span>
</div><!--第一行-->
<div style="width:280px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1">性别</div>
<div class="zhuce4_tr_td2">
    <?php if($data['sex'] == '0'): ?>男
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php else: ?>
女<?php endif; ?>
</div>
</div><!--第二行-->
<div style="width:280px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1">服务形式</div>
<div class="zhuce4_tr_td2">
    <?php if($data['server_form'] == '0'): ?>个人 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php else: ?>
工作室&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endif; ?>
<!--<input name="radio_fuwuxingshi" type="radio" class="zhuce4_radio" value="2"  />公司-->
</div>
</div><!--第三行-->
<div style="width:350px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr" id="radio_1">
<div class="zhuce4_tr_td1">真实姓名</div>
<div class="zhuce4_tr_td2">
<?php echo ($data['true_name']); ?>
</div>
</div><!--第四行-->
<div class="zhuce1_tr" id="radio_2">
    <div class="zhuce4_tr_td1" style="height: 35px;line-height: 35px;">身份证照</div>
    <div class="div_goods_img"><img src="" class="empty_img" /><img class="goods_img" id='file_shenfenzheng' src="<?php echo ($data['shenfenzheng_url']); ?>" /></div>                
    <span id="span_shenfenzheng"></span>
    <span class="file_tishi">(请上传身份证正面)</span>
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
<input name="address_juti" type="text" class="zhuce4_tr_td2 zhuce4_text" value="<?php echo ($data['address']); ?>"  />
<span id="infor_address_juti"></span>
</div><!--第八行-->
<div style="width:350px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1">联系方式</div>
<span style="padding-left:0px;">&nbsp;Q&nbsp;Q：</span>
<input name="contact_qq" type="text" class="zhuce4_tr_td2 zhuce4_text zhuce4_text_lianxifangshi" value="<?php echo ($data['qq']); ?>"  />
<span id="infor_contact_qq"></span>
</div><!--第九行-->
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1"></div>
<span>微信：</span><input name="contact_weixin" type="text" class="zhuce4_tr_td2 zhuce4_text zhuce4_text_lianxifangshi" value="<?php echo ($data['weixin']); ?>"  />
<span id="infor_contact_weixin"></span>
</div>
<div class="zhuce1_tr">
<div class="zhuce4_tr_td1"></div>
<span>邮箱：</span><input name="contact_email" type="text" class="zhuce4_tr_td2 zhuce4_text zhuce4_text_lianxifangshi" value="<?php echo ($data['email']); ?>" />
<span id="infor_contact_email"></span>
</div>
<div style="width:700px;height:0px;border-top:1px dashed #666;"></div>
<div class="zhuce1_tr">
    <div class="zhuce4_tr_td1" style="height: 35px;line-height: 35px;">微信二维码</div>
    <div class="div_goods_img"><img src="" class="empty_img" /><img class="goods_img" id='file_erweima' src="<?php echo ($data['weixin_erweima']); ?>" /></div>                
    <span class="file_tishi">(可选择不传)</span>
</div><!--第一行-->
<div style="width:700px;height:0px;border-top:1px dashed #666;"></div>
<!--
<div class="zhuce1_tr" style="font-size:14px;padding:5px 0px;"><div class="zhuce4_tr_td1">服务内容
</div><div class="zhuce4_tr_td2">（最多两项）<span id="span_checkbox"></span></div>
</div>
<div class="zhuce4_checkbox" id="zhuce4_checkbox">
    <input type="checkbox" name="fuwuneirong[]" value="策划师"/><span>策划师</span>
<input type="checkbox" name="fuwuneirong[]" value="司仪" /><span>司仪</span>
<input type="checkbox" name="fuwuneirong[]" value="跟妆" /><span>跟妆</span>
<input type="checkbox" name="fuwuneirong[]" value="摄像" /><span>摄像</span>
<input type="checkbox" name="fuwuneirong[]" value="摄影" /><span>摄影</span><br />
<input type="checkbox" name="fuwuneirong[]" value="车队" /><span>车队</span>
<input type="checkbox" name="fuwuneirong[]" value="布置" /><span>布置</span>
<input type="checkbox" name="fuwuneirong[]" value="舞美" /><span>婚纱</span>
<input type="checkbox" name="fuwuneirong[]" value="演艺" /><span>演艺</span>
<input type="checkbox" name="fuwuneirong[]" value="酒店" /><span>酒店
    
</div>
<div style="width:700px;height:0px;border-top:1px dashed #666;"></div>
-->

<div class="zhuce1_tr" style="position: relative;">
<div class="zhuce4_tr_td1">店铺介绍</div>  
<span id="infor_shop_introduce" style="position: absolute; top:40px;left:40px; width: 80px;"></span>
<textarea id="shop_introduce" name="shop_introduce" style="width:60%;height:150px;" class="zhuce4_tr_td2 zhuce4_text" placeholder="500字以内"><?php echo ($data['shop_introduce']); ?></textarea>
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
    </div>
    
    
    
    
    
    
    
    
    
</div>
<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('index/menu');?>"></iframe>
<script src="/Public/Home/Js/hunliren_bianji.js" type="text/javascript"></script>
<script  type="text/javascript">
    var str_sc="<?php echo ($data['server_content']); ?>",str_location="<?php echo ($data['location']); ?>";
    var arr_sc=str_sc.split('|'),arr_location=str_location.split('|');
    for(var i=0;i<arr_sc.length;i++){
        var sc=arr_sc[i];
        $("input[value="+sc+"]").trigger('click');
    }
    $('select[name=address_province]').val(arr_location[0]);
    var obj_p=$('select[name=address_province]').find("option[value='"+arr_location[0]+"']");
    province_onchange(obj_p.index());
    $('select[name=address_address_city]').val(arr_location[1]);
    var obj_c=$('select[name=address_city]').find("option[value='"+arr_location[1]+"']");
    city_onchange(obj_c.index());
    $('select[name=address_county]').val(arr_location[2]);
</script>
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