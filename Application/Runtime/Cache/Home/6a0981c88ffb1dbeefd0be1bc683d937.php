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
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/order_appraise.css">
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


    <div class="view">
        <h2 class="view_h2">
            交易成功！服务等您评价
            <span class="h2_span"><a href='<?php echo U("Order/index");?>' class="span_a">返回我的订单</a></span>
        </h2>

        <div class="d2">
            <div class="d2_title">请您评价</div>
            <div class="d2_content">
                <div>买家小伙伴们都很关注你的点评，帮助他们购买噢</div>
                <div>亲，交易成功后，如果商品出现问题，您可以继续使用保障卡，享受相应的售后服务哦。 </div>
            </div>
            <div class="d2_title">商家信息</div>
            <div class="d2_content"><span>昵称：<?php echo ($order['shop_name']); ?></span> <span>真实姓名：<?php echo ($order['true_name']); ?> </span><span>城市：<?php echo ($order['location']); ?> </span><span>联系电话：<?php echo ($order['mobile_phone']); ?> </span></div>
            <div class="d2_title">商品信息</div>
            <div class="d2_table">
                <table>
                    <tr><th class="left">商品图片</th><th class="teshu">商品名称</th><th>价格</th><th>服务日期</th><th>状态</th><th>支付金额</th><th>返现</th></tr>
                    <tr><td class="left"><img src="<?php echo ($order['goods_img']); ?>" class="img_goods" /></td><td class="teshu"><?php echo ($order['goods_name']); ?></td><td>&yen;<?php echo ($order['price']); ?></td><td><?php echo (date_geshi1($order['server_day'])); ?></td><td><?php echo order_status($order['pay_status'],$order['status'])['status'];?></td><td>&yen;<?php echo ($order['dues']); ?></td><td>&yen;<?php echo ($order['fanxian']); ?></td></tr>
                </table>
            </div>
        </div>
        <div class='pingjia_title'>评价服务</div>
        <form name="m_appraiseform_appraise" method="post" action="<?php echo U('Order/appraise_success',array('order_id'=>$order_id));?>" enctype="multipart/form-data" >
        <input name="goods_img" value="" type="hidden"/> 
            <div class="pingjia">
            <div class="pingjia_top">
                <div class="pingjia_top_left">
                    <img class="pingjia_img" src="<?php echo ($order['goods_img']); ?>" />
                    <div class="pingjia_goodstitle"><?php echo ($order['goods_name']); ?></div>
                </div>
                <div class="pingjia_box">
                    <textarea class="pingjia_textarea" name="pingjia_text" placeholder="评价成功后，返现金额将发至您的账户余额，请注意查看" ></textarea>
                    <div class="pingjia_box_szp">
                        <div class="file_tr">
                        <div class="tr_td1" style="height: 35px;line-height: 35px;">晒照片<i style="margin-left: 3px;">(<i id="img_count">0</i>/4)</i></div>
                        <div class="file_jia" id="file_jia">+</div>
                        <span class="file_info" id="file_img_info"></span>
                        <span class="file_tishi">(上传的图片，最高5M)</span>
                        </div>    
                        
                    </div>
                </div>
            </div>
            <div class="hr"></div>
            <div style="position: relative;">
                <h2 class='des_title'>商家动态评分</h2>
                <div class="des_ul">
                    <ul>
                        <li>
                            <span class="pingjia_text">服务与描述相符</span>
                            <div class="yingcang yc_1"></div>
                            <span class="pingjia_xingxing">
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="1_1" />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="1_2"  />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="1_3"  />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="1_4"  />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="1_5"  />
                            </span>
                            <span class="pingjia_last" id="1_des">
                                
                            </span>
                        </li>
                        <li>
                            <span class="pingjia_text">商家的服务态度</span>
                            <div class="yingcang yc_2"></div>
                            <span class="pingjia_xingxing">
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="2_1"  />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="2_2" />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="2_3" />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="2_4" />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="2_5" />
                            </span>
                            <span class="pingjia_last" id="2_des">
                                
                            </span>
                        </li>
                        <li>
                            <span class="pingjia_text">商家的专业水平</span>
                            <div class="yingcang yc_3"></div>
                            <span class="pingjia_xingxing">
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="3_1" />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="3_2" />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="3_3" />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="3_4" />
                                <img src="/Public/Home/Images/public/pingjia_xingxing_kong.png" id="3_5" />
                            </span>
                            <span class="pingjia_last" id="3_des">
                               
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            <input type="hidden" name="pingfen_1" />
            <input type="hidden" name="pingfen_2" />
            <input type="hidden" name="pingfen_3" />
        </form>
        <div class="button_a_lvse" id="fabiao">发表评论</div>
    </div>

    <form id = "form_file_jia" enctype="multipart/form-data" action="<?php echo U('Order/file_jia');?>" method="post">   
        <input name="file_img" type="file"  style="visibility:hidden; width:0px; height: 0px;"/>
    </form>   

<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('index/menu');?>"></iframe>
<script src="/Public/Home/Js/order_appraise.js" type="text/javascript"></script>
<script type="text/javascript">
    var src="/Public/Home/Images/public/pingjia_xingxing_kong.png";
    var src1=src,src2=src,src3=src,i1=1,i2=1,i3=1;
    $('.pingjia_xingxing>img').bind('mouseover',function(){
    if($(this).index()<2){
        $(this).parent().children(":lt("+($(this).index()+1)+")").attr('src',"/Public/Home/Images/public/pingjia_xingxing_hui.png");
        $(this).parent().children(":gt("+$(this).index()+")").attr('src',"/Public/Home/Images/public/pingjia_xingxing_kong.png");
    }else{
        $(this).parent().children(":lt("+($(this).index()+1)+")").attr('src',"/Public/Home/Images/public/pingjia_xingxing.png");
        $(this).parent().children(":gt("+$(this).index()+")").attr('src',"/Public/Home/Images/public/pingjia_xingxing_kong.png");
    }
});
$('.pingjia_xingxing>img').bind('mouseout',function(){
    if($(this).attr('id').substr(0,1)==='1'){
        $(this).parent().children(":lt("+i1+")").attr('src',src1);
        $(this).parent().children(":gt("+(i1-1)+")").attr('src',"/Public/Home/Images/public/pingjia_xingxing_kong.png");
    }else if($(this).attr('id').substr(0,1)==='2'){
        $(this).parent().children(":lt("+i2+")").attr('src',src2);
        $(this).parent().children(":gt("+(i2-1)+")").attr('src',"/Public/Home/Images/public/pingjia_xingxing_kong.png");
    }else{
        $(this).parent().children(":lt("+i3+")").attr('src',src3);
        $(this).parent().children(":gt("+(i3-1)+")").attr('src',"/Public/Home/Images/public/pingjia_xingxing_kong.png");
    }
    
});

$('.pingjia_xingxing>img').bind('click',function(){
      switch($(this).attr('id')){
         case '1_1':
             $('#1_des').html('<strong>1 分</strong>- 很差，严重与描述不相符合，缺东少西');
             $('#1_des').css('color','#666');
             src1="/Public/Home/Images/public/pingjia_xingxing_hui.png";
             i1=1;
             $('input[name=pingfen_1]').attr('value','1');
             break;
         case '1_2':
             $('#1_des').html('<strong>2 分</strong>- 不满，部分与描述不相符合');
             $('#1_des').css('color','#666');
             src1="/Public/Home/Images/public/pingjia_xingxing_hui.png";
             i1=2;
             $('input[name=pingfen_1]').attr('value','2');
             break;
         case '1_3':
             $('#1_des').html('<strong>3 分</strong>- 一般，基本与描述相符合，中规中矩');
             $('#1_des').css('color','#666');
             src1="/Public/Home/Images/public/pingjia_xingxing.png";
             i1=3;
             $('input[name=pingfen_1]').attr('value','3');
             break;
         case '1_4':
             $('#1_des').html('<strong>4 分</strong>- 满意，与描述相符合，符合自己的预期');
             $('#1_des').css('color','#666');
             src1="/Public/Home/Images/public/pingjia_xingxing.png";
             i1=4;
             $('input[name=pingfen_1]').attr('value','4');
             break;
         case '1_5':
             $('#1_des').html('<strong>5 分</strong>- 超级满意，超出自己的预期');
             $('#1_des').css('color','#666');
             src1="/Public/Home/Images/public/pingjia_xingxing.png";
             i1=5;
             $('input[name=pingfen_1]').attr('value','5');
             break;
         case '2_1':
             $('#2_des').html('<strong>1 分</strong>- 很差，不守时，态度差');
             $('#2_des').css('color','#666');
             src2="/Public/Home/Images/public/pingjia_xingxing_hui.png";
             i2=1;
             $('input[name=pingfen_2]').attr('value','1');
             break;
         case '2_2':
             $('#2_des').html('<strong>2 分</strong>- 不满，对新人的承诺不兑现');
             $('#2_des').css('color','#666');
             src2="/Public/Home/Images/public/pingjia_xingxing_hui.png";
             i2=2;
             $('input[name=pingfen_2]').attr('value','2');
             break;
         case '2_3':
             $('#2_des').html('<strong>3 分</strong>- 一般，态度一般、服务不主动');
             $('#2_des').css('color','#666');
             src2="/Public/Home/Images/public/pingjia_xingxing.png";
             i2=3;
             $('input[name=pingfen_2]').attr('value','3');
             break;
         case '2_4':
             $('#2_des').html('<strong>4 分</strong>- 满意，沟通流畅、服务主动');
             $('#2_des').css('color','#666');
             src2="/Public/Home/Images/public/pingjia_xingxing.png";
             i2=4;
             $('input[name=pingfen_2]').attr('value','4');
             break;
         case '2_5':
             $('#2_des').html('<strong>5 分</strong>- 超级满意，考虑周全、完全超出预期');
             $('#2_des').css('color','#666');
             src2="/Public/Home/Images/public/pingjia_xingxing.png";
             i2=5;
             $('input[name=pingfen_2]').attr('value','5');
             break;
         case '3_1':
             $('#3_des').html('<strong>1 分</strong>- 很差，水平很差，影响活动进行');
             $('#3_des').css('color','#666');
             src3="/Public/Home/Images/public/pingjia_xingxing_hui.png";
             i3=1;
             $('input[name=pingfen_3]').attr('value','1');
             break;
         case '3_2':
             $('#3_des').html('<strong>2 分</strong>- 不满，水平差，将就着用');
             $('#3_des').css('color','#666');
             src3="/Public/Home/Images/public/pingjia_xingxing_hui.png";
             i3=2;
             $('input[name=pingfen_3]').attr('value','2');
             break;
         case '3_3':
             $('#3_des').html('<strong>3 分</strong>- 一般，家人、自己没有不满意，中规中矩');
             $('#3_des').css('color','#666');
             src3="/Public/Home/Images/public/pingjia_xingxing.png";
             i3=3;
             $('input[name=pingfen_3]').attr('value','3');
             break;
         case '3_4':
             $('#3_des').html('<strong>4 分</strong>- 满意，亲朋好友说比较好，符合自己预期');
             $('#3_des').css('color','#666');
             src3="/Public/Home/Images/public/pingjia_xingxing.png";
             i3=4;
             $('input[name=pingfen_3]').attr('value','4');
             break;
         case '3_5':
             $('#3_des').html('<strong>5 分</strong>- 超级满意，速度快、水平高，完全超出自己预期');
             $('#3_des').css('color','#666');
             src3="/Public/Home/Images/public/pingjia_xingxing.png";
             i3=5;
             $('input[name=pingfen_3]').attr('value','5');
             break;
     }
  });
</script>





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