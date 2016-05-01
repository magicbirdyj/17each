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
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/order.css">
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

    <div class="release">
        <select class="order_select">
            <option value="<?php echo U('Member/goods_sold');?>" <?php echo ($selected['all']); ?> >全部状态</option>
            <option value="<?php echo U('Member/goods_sold?status=no_pay');?>" <?php echo ($selected['no_pay']); ?> >未付款</option>
            <option value="<?php echo U('Member/goods_sold?status=daiqueren');?>" <?php echo ($selected['daiqueren']); ?> >待确认</option>
            <option value="<?php echo U('Member/goods_sold?status=daipingjia');?>" <?php echo ($selected['daipingjia']); ?> >待评价</option>
        </select>
        <div class="kuaijietishi">快捷提示：您有
            <a href="<?php echo U('Member/goods_sold');?>" class="em">全部状态（<?php echo ($status_count['all']); ?>）</a>
            <a href="<?php echo U('Member/goods_sold?status=no_pay');?>" class="em">待付款（<?php echo ($status_count['no_pay']); ?>）</a>
            <a href="<?php echo U('Member/goods_sold?status=daiqueren');?>" class="em">待确认（<?php echo ($status_count['daiqueren']); ?>）</a>
            <a href="<?php echo U('Member/goods_sold?status=daipingjia');?>" class="em">待评价（<?php echo ($status_count['daipingjia']); ?>）</a>
        </div>

        <div class="title"><!--标题行-->
            <div class='td1'>商品</div>
            <div class='td2'>价格</div>
            <div class='td3'>实付款</div>
            <div class='td4'>订单状态</div>
            <div class='td5'>操作</div>
        </div>
        
        
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content"><!--内容遍历-->
            <div class="order_title">订单编号：
                <a href="#"><?php echo ($vo['order_no']); ?></a>
                订单更新时间：<?php echo (date('Y-m-d H：i',$vo['updated'])); ?>
            </div>
            <div class="order_row">
                <div class='td1'>
                    <div class="picture"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"></a></div>
                    <div class="info"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a><p class="color_999">商品日期：<?php echo (date_geshi1($vo['server_day'])); ?></p><p class="color_2BB8AA">买家：<?php echo ($vo['user_name']); ?></p></div>
                </div>
                <div class='td2'>&yen;<?php echo ($vo['price']); ?></div>
                <div class='td3'>&yen;<?php echo ($vo['price']); ?></div>
                <div class='td4'><p><?php echo order_status($vo['pay_status'],$vo['status'])['status'];?></p><a href="<?php echo U('Order/view',array('order_id'=>$vo['order_id']));?>">订单详情</a></div>
                <div class='td5'>
                    <a class="button_a_lvse" name="<?php echo ($vo['mobile_phone']); ?>" style="margin-top: 20px;">联系买家</a>
                </div>
                
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        
    
        
        
        <div class="page_foot"><?php echo ($page_foot); ?></div>
        
    </div>
   

<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('index/menu');?>"></iframe>
<script type="text/javascript">
    $('.order_select').bind('change',function(){
        location.replace(this.value);
    });
    //弹出联系方式
    $('.button_a_lvse').bind('mouseover',function(e){
        var xx=e.pageX+10;
        var yy=e.pageY+10;
        var dianhua=$(this).attr('name');
        var dh='<div id="div_tanchu"><button type="button">电话：'+dianhua+'</button></div>';
        $('body').append(dh);
        $('#div_tanchu').css({top: yy, left: xx-60});
    });
    //鼠标移开 删除弹出
    $('#dh').bind('mouseout',function(){
        $('#div_tanchu').remove();
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