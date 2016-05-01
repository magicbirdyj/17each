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
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/cart.css">
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
    <a href=<?php echo U('Index/index');?>><div class="logol"></div></a>
<div class="zhuce_head">
<div>欢迎下单:</div>
<ul>
<li><span class="zhuce_head_self">提交订单</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span>选择支付方式</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span>购买成功</span></li>
</ul>
</div>
</div>
    <div class="cart_head">
        <i></i>
        <span class="cart_title">我的购物车</span>
        <span style="font-size: 14px;"><span style="color: #F76120"><?php echo ($count); ?></span>/10</span>
    </div>
    <form method="post" action="<?php echo U('Member/cart_zhifu');?>" name='cart_tjdd'>    
<table class="buy_table" cellspacing="0">
<tr class="buy_table_head">
    <th class="xuanze">
        <input type="checkbox" class="ui-checkbox" id='quanxuan' checked="true"/>
        <label>全选</label>
    </th>
    <th class="desc">商品</th>
    <th class="price">门店价</th>
    <th class="daijin">价格</th>
    <th class="yingfu">操作</th>
</tr>
<?php if(is_array($mycart)): $i = 0; $__LIST__ = $mycart;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="buy_table_head buy_table_content">
    <td class="xuanze"><input type="checkbox" class="ui-checkbox" name="cart_item[]" value="<?php echo ($vo['cart_id']); ?>" checked="true" /></td>
    <td class="desc"><a href="#" class="desc_left"><img src="<?php echo ($vo['goods_img']); ?>" /></a>
        <div class="desc_right">
            <a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a>
            <p class="color_999">商品日期：<?php echo (date_geshi1($vo['server_day'])); ?></p>
            <p class="color_2BB8AA">商家：<?php echo ($vo['shop_name']); ?></p>
        </div>
    </td>
    <td class="price"><del>&yen <?php echo ($vo['yuan_price']); ?></del></td>
    <td class="daijin" >&yen <span id="price"><?php echo ($vo['goods_price']); ?></span></td>
    <td class="yingfu"><a href="javascript:void(0);" onclick="Del(<?php echo ($vo['cart_id']); ?>)">删除</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr class="buy_table_head buy_table_content">
    <td colspan="5" class="yingfu">代金卷：0</td>
</tr>
<tr class="buy_table_head buy_table_content">
    <td colspan="5" class="yingfu">应付金额：&yen <span id="money"></span></td>
</tr>
</table>
    </form>
    <div class="shuoming">提交订单后，商家将再次确认订单日期是否有档期，如没有，将全额退款</div>

    <a href="javascript:void(0)" class="a_tjdd" >提交订单</a>
</div>
<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('index/menu');?>"></iframe>
<script type="text/javascript">
    $('.a_tjdd').bind('click',function(){
        $('form[name=dingdan]').submit();
    })
    function Del(id){
        if(window.confirm('确定要删除吗？')){
            url="/Home/Member/cart_del/cart_id/"+id+".html";
            $.ajax({
                        type:'post',
                        async : false,
                        url:url,
                        datatype:'json'
                    });
             window.location.href=window.location.href;
        }else{
            return false;
        }
    }
    

    var money=0;
    $('.ui-checkbox').not('#quanxuan').each(function(){
        if($(this).prop("checked")){
            money+=parseFloat($(this).parent().next().next().next().children().text());
        }
        $('#money').html(money.toFixed(2));
    });
    $('.ui-checkbox').not('#quanxuan').bind('change',function(){
        money=parseFloat($('#money').html());
       if($(this).prop("checked")){
            money+=parseFloat($(this).parent().next().next().next().children().text());
        }else{
            money-=parseFloat($(this).parent().next().next().next().children().text());
        }
        $('#money').html(money.toFixed(2));
        
        if($('.ui-checkbox:checked').not('#quanxuan').length==$('.ui-checkbox').not('#quanxuan').length){
            $('#quanxuan').prop("checked",'true');
        }else if($('.ui-checkbox:checked').not('#quanxuan').length==0){
            $('#quanxuan').removeAttr("checked");
        };
    });
    $('#quanxuan').bind('change',function(){
        money=0;
        $(".ui-checkbox").not('#quanxuan').prop('checked',this.checked);
        if($(this).prop('checked')){
            $('.ui-checkbox').not('#quanxuan').each(function(){
                if($(this).prop("checked")){
                    money+=parseFloat($(this).parent().next().next().next().children().text());
                }
                $('#money').html(money.toFixed(2));
            });
        }else{
            $('#money').html('0.00');
        }
        
    });
    
    $('.a_tjdd').bind('click',function(){
        $('form[name=cart_tjdd]').submit();
    });
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