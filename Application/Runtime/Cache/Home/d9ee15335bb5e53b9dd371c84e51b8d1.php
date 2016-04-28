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


 

<link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/goods.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/buy.css">
<script src="/Public/Common/Js/function.js"></script> 

<script src="/Public/Common/Js/jquery.min.js"></script> 

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
<div class="buy_div">
<div class="logo"><!--logo-->
    <a class="logol" href="<?php echo U('index/index');?>"></a>
<div class="zhuce_head">
<div>欢迎下单:</div>
<ul>
<li><span>提交订单</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span class="zhuce_head_self">选择支付方式</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span>购买成功</span></li>
</ul>
</div>
</div>

    <form name="qufukuang" method="get" action="<?php echo U('Goods/alipay');?>">
<table class="buy_table" cellspacing="0">
<tr class="buy_table_head">
    <th class="shangjia">商家</th>
    <th class="desc">项目</th>
    <th class="price">价格</th>
    <th class="daijin">日期</th>
    <th class="yingfu">应付</th>
</tr>
<tr class="buy_table_head buy_table_content">
    <td class="shangjia"><?php echo ($goods['shop_name']); ?></td>
    <td class="desc">[<?php echo ($goods['cat_name']); ?>]<?php echo ($goods['goods_name']); ?></td>
    <td class="price">&yen <?php echo ($goods['price']); ?></td>
    <td class="daijin"><?php echo (date_geshi1($goods['server_day'])); ?></td>
    <td class="yingfu">&yen <?php echo ($goods['price']); ?></td>
</tr>
<tr class="buy_table_head buy_table_content">
    <td colspan="3" class="yingfu">代金卷：<?php echo ($goods['daijinjuan']); ?></td>
    <td colspan="2" class="yingfu">应付金额：&yen <?php echo ($goods['dues']); ?></td>
</tr>


</table>
        <input type="hidden" name="order_id" value="<?php echo ($order_id); ?>" />
    </form>
    
    
    <div class="wxzhifu_div">
        <div class="wxzhifu_left">
            <div class="left_content">
                <div class="qrcode-header">
                    <div class="ft-center">扫一扫付款（元）</div>
                    <div class="ft-center qrcode-header-money"><?php echo ($goods['dues']); ?></div>
                </div>
                <div class="qrguide-area" id="J_qrguideArea" seed="NewQr_animationClick">
                    <img style="display: block;" smartracker="on" seed="J_qrguideArea-qrguideAreaImgT1" src="/Public/Home/Images/public/saoyisao_big.jpg" class="qrguide-area-img active">
                </div>
                <div class="qrcode-img-wrapper">
                    <div class="qrcode-img-area">
                        <div style="position: relative;display: inline-block;">
                            <img height="190" width="190" src="<?php echo U('Buy/getQRPHP');?>?data=<?php echo ($payurl); ?>" style="position: relative;left:-10px;" />
                        </div>
                    </div>
                    <div class="qrcode-img-explain fn-clear">
                        <img smartracker="on" seed="qrcodeImgExplain-tImagesT1bdtfXfdiXXXXXXXX" class="fn-left" src="/Public/Home/Images/public/saoyisao.png" alt="扫一扫标识">
                        <div class="fn-left">打开手机支付宝<br>扫一扫继续付款</div>
                    </div>
                </div>
                <div class="botton_zhifu"><a class="button_a_lvse" href='<?php echo U("Goods/gmcg_wx","order_id=$order_id");?>'>支付成功，如未跳转请点击</a></div>
            </div>
        </div>
        <div class="wxzhifu_right">
            <div class="right_content">
                 <p>支付方法：</p>请用手机打开微信，点击发现，点击扫一扫对准二维码即可。
            </div>
        </div>
    </div>
    
    
    
    

</div>
<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('index/menu');?>"></iframe>
<script type="text/javascript">
    var order_id_get="<?php echo ($order_id); ?>";
    var setIn_id=setInterval("jiance_pay()",3000);//1000为1秒钟
    function jiance_pay(){
        var pay_status;
        var url='/Home/Goods/jiance_pay.html';
        var data={
            order_id:order_id_get,
            check:"wx_zhifu"
            };
        $.ajax({
            type:'post',
            async : false,
            url:url,
            data:data,
            datatype:'json',
            success:function(msg){
                pay_status=msg;
            }
        });
        if(pay_status==='1'){
            clearInterval(setIn_id);
            window.location.href='<?php echo U("Goods/gmcg_wx","order_id=$order_id");?>';
        }
    }
</script>


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