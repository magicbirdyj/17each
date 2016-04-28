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
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/order_view.css">
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script>
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
            订单详情
            <span class="h2_span">
                <?php if($user_id == $order['user_id']): ?><a href='<?php echo U("Order/index");?>' class="span_a">返回我的订单</a>
                <?php elseif($user_id == $order['shop_id']): ?>
                <a href='<?php echo U("Member/goods_sold");?>' class="span_a">返回已售商品</a><?php endif; ?>
            </span>
        </h2>
        <div class="view_info">
            <?php if($order['deleted'] == '1'): ?><div>当前订单状态：<span class="red">该订单已被删除</span></div>
             <?php else: ?>   
                <div>当前订单状态：<span class="red"><?php echo order_status($order['pay_status'],$order['status'],$order['order_id'],$order['server_day'],$order['goods_id'])['status'];?></span></div>
                <?php if($order['status'] == '4'): ?><a class="button_a_lvse" href="<?php echo ($order['order_id']); ?>">删除订单</a>  
                <?php elseif(($order['status'] == '1') and ($order['pay_status'] == '0')): ?>
                    <div>请及时付款，不然该日期就被别人预订了</div>
                    <div class="d1">
                        <a href="<?php echo order_status($order['pay_status'],$order['status'],$order['order_id'],$order['server_day'],$order['goods_id'])['status_url'];?>" class="button_a_lvse"><?php echo order_status($order['pay_status'],$order['status'],$order['order_id'],$order['server_day'],$order['goods_id'])['status_button'];?></a>
                        <a class="button_a_lvse" id='quxiao_order' name="<?php echo ($vo['order_id']); ?>">取消订单</a>
                    </div>
                <?php elseif(($order['status'] == '1') and ($order['pay_status'] == '1')): ?>
                    <div>请服务完成后再点确认，不然可能货财两空</div>
                    <div class="d1">
                        <a href="<?php echo order_status($order['pay_status'],$order['status'],$order['order_id'],$order['server_day'],$order['goods_id'])['status_url'];?>" class="button_a_lvse"><?php echo order_status($order['pay_status'],$order['status'],$order['order_id'],$order['server_day'],$order['goods_id'])['status_button'];?></a>
                        <a class="button_a_lvse" href='<?php echo U("Order/tuikuang",array("order_id"=>$vo["order_id"]));?>'>申请退款</a>
                    </div>
                <?php elseif(($order['status'] == '2')): ?>
                    <div>请及时评价，会有意外惊喜</div>
                    <div class="d1">
                        <a href="<?php echo order_status($order['pay_status'],$order['status'],$order['order_id'],$order['server_day'],$order['goods_id'])['status_url'];?>" class="button_a_lvse"><?php echo order_status($order['pay_status'],$order['status'],$order['order_id'],$order['server_day'],$order['goods_id'])['status_button'];?></a>
                        <a class="button_a_lvse" href='<?php echo U("Order/shouhou",array("order_id"=>$vo["order_id"]));?>'>申请退款</a>
                    </div>
                <?php else: ?>
                    <div class="d1">
                        <a class="button_a_lvse" href="<?php echo ($order['order_id']); ?>">删除订单</a>
                    </div><?php endif; endif; ?>
        </div>
        <div class="d2">
            <div class="d2_title">订单信息</div>
            <div class="d2_content"><span>订单编号：<?php echo ($order['order_no']); ?></span> <span>创建时间：<?php echo (date('Y-m-d H：i',$order['created'])); ?> </span><span>更新时间：<?php echo (date('Y-m-d H：i',$order['updated'])); ?> </span></div>
            <div class="d2_title">商家信息</div>
            <div class="d2_content"><span>昵称：<?php echo ($order['shop_name']); ?></span> <span>真实姓名：<?php echo ($order['true_name']); ?> </span><span>城市：<?php echo ($order['location']); ?> </span><span>联系电话：<?php echo ($order['mobile_phone']); ?> </span></div>
            <div class="d2_title">买家信息</div>
            <div class="d2_content"><span>昵称：<?php echo ($maijia['user_name']); ?></span><span>联系电话：<?php echo ($maijia['mobile_phone']); ?> </span></div>
            <div class="d2_title">商品信息</div>
            <div class="d2_table">
                <table>
                    <tr><th class="left">商品图片</th><th class="teshu">商品名称</th><th>价格</th><th>服务日期</th><th>状态</th><th>支付金额</th></tr>
                    <tr><td class="left"><img src="<?php echo ($order['goods_img']); ?>" class="img_goods" /></td><td class="teshu"><?php echo ($order['goods_name']); ?></td><td>&yen;<?php echo ($order['price']); ?></td><td><?php echo (date_geshi1($order['server_day'])); ?></td><td><?php echo order_status($order['pay_status'],$order['status'])['status'];?></td><td>&yen;<?php echo ($order['dues']); ?></td></tr>
                </table>
            </div>
        </div>
    </div>

   

<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('index/menu');?>"></iframe>
<script type="text/javascript">
    $('.button_a_lvse:contains("删除订单")').bind('click',function(event){
        event.preventDefault();
        if(confirm("确定要删除订单吗？")){
            var url='/Home/Order/delete_order.html';
            var data={
                    order_id:$(this).attr('href'),
                    check:"delete_order"
                }
            $.ajax({
                    type:'get',
                    async : false,
                    url:url,
                    data:data,
                    datatype:'json',
                    success:function(msg){
                        if(msg){ 
                            location="/Home/Order/index.html";                        
                        }else{
                            alert('删除订单失败'); 
                        }
                    }
                }); 
        }
    });
    $('#quxiao_order').bind('click',function(){
        if(confirm("确定要取消订单吗？")){
            var url='/Home/Order/quxiao_order.html';
            var data={
                    order_id:$(this).attr('name'),
                    check:"quxiao_order"
                }
            $.ajax({
                    type:'get',
                    async : false,
                    url:url,
                    data:data,
                    datatype:'json',
                    success:function(msg){
                        if(msg){ 
                            location=location;                        
                        }else{
                            alert('取消订单失败'); 
                        }
                    }
                });    
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