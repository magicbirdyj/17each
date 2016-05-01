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
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/hunliren_shangjiaxinxi.css">
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
    <a id="noborder" href="#">手机婚拉拉</a>
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
<div class="phone1"><img src="/Public/Home/Images/menu_and_foot/phone-blue.jpg" /></div>
<div class="phone23">
<div class="phone2">婚礼咨询免费热线</div>
<div class="phone3">0731-83975029</div>
</div>
</div>
</div><!--//logo-->
<div class="menu"><!--导航-->
<div class="menu_l">特色婚啦啦</div>
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
<li><a href="<?php echo U('Category/index',array('cid'=>9));?>">舞美</a></li>
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
                <li><a href='#'>代金卷管理</a></li>
            </ul>
            <div class="d1">我是商家</div>
            <ul class="left_ul">
                <li><a href="<?php echo U('Member/release_goods');?>">发布商品</a></li>
                <li><a href="<?php echo U('Member/goods_sold');?>">已售商品</a></li>
                <li><a href="<?php echo U('Member/goods_list');?>">商品列表</a></li>
            </ul>
            <div class="d1">我的账户</div>
            <ul class="left_ul">
                <li><a href="<?php echo U('Member/balance');?>">我的余额</a></li>
                <li><a href="<?php echo U('Member/tixian');?>">申请提现</a></li>
                <li><a href="<?php echo U('Member/zhanghushezhi');?>">账户设置</a></li>
                <li><a href='#'>安全中心</a></li>
            </ul>
        </div>

    <div class="right">
        <div class="right_head">
            <div class="hlr_touxiang">
                <img src="<?php echo ($touxiang_url); ?>" class="img" />
                <img src='/Public/Home/Images/public/circle_f6f6f6.png' class="img_circle" />
            </div>
            <div class="hlr_name"><?php echo ($day_time); ?>， <?php echo ($userdata['user_name']); ?></div>
        </div>
        <div class="title">
            会员余额
        </div>
        <div class="content">
            <ul>
                <li>会员名： <?php echo ($userdata['user_name']); ?></li>
                <li>账户余额：&yen;  <?php echo ($userdata['credit_line']); ?></li>
                <form name="tixian" action="<?php echo U('Member/tixian_check');?>" method="post">
                <li>
                    申请提现：
                    <input class="tixian_text" type="text" name="tixian" /> 元
                    <input class="tixian_submit" type="submit" value="确定" />
                    <span id='tixian_tishi'></span>
                </li>
                </form>
            </ul>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
</div>
<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('index/menu');?>"></iframe>
<script src="/Public/Home/Js/tixian.js"></script> 
<script type="text/javascript">
    function yanzheng_tixian(obj){
    var str=obj.val();
    var yu_e="<?php echo ($userdata['credit_line']); ?>";
    if(is_tixian(parseFloat(str))){
        if(parseFloat(str)>parseFloat(yu_e)){
            $('#tixian_tishi').html('您输入的金额大于账户余额，请重新输入');
            $('#tixian_tishi').css('color','red');
            return false;
        }else{
            $('#tixian_tishi').html('您将提现: &yen;'+parseFloat(str).toFixed(2));
            $('#tixian_tishi').css('color','#666');
            return true;
        }
    }else{
        $('#tixian_tishi').html('您输入的金额不符合规范，请重新输入');
        $('#tixian_tishi').css('color','red');
        return false;
    }
}
</script> 
    </body>
</html>


<div class="footer"><!--//网页脚部-->
<div class="footer_content"><!--//网页脚部内容-->
<div class="site-info"><!--//网页脚部信息--><h3>关注我们</h3>
<ul><li><a href="#">婚拉拉微信</a></li><li><a href="#">婚拉拉APP</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>公司信息</h3>
<ul><li><a href="company/about_company.php">关于婚拉拉</a></li><li><a href="#">婚拉拉承诺</a></li><li><a href="#">用户协议</a></li><li><a href="#">商家协议</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>合作联系</h3>
<ul><li><a href="#">联系我们</a></li><li><a href="#">加入我们</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>用户帮助</h3>
<ul><li><a href="#">婚拉拉流程</a></li><li><a href="#">申请退款</a></li><li><a href="#">常见问题</a></li></ul>
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