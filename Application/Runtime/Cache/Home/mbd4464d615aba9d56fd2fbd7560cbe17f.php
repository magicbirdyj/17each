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
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/public.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/head.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/footer.css">
<title><?php echo ($title); ?></title>


 
<link rel="stylesheet" type="text/css" href="/Public/Home/Mobile/Css/index.css">
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 

</head>
<body>



<a name="top"></a>
<div class="bottom"><!--顶部-->
<div class="bottom1">
    <!--
<span class="span1">
    <?php echo ($yonghuxinxi); ?>
</span>
    -->

    <ul class="span" />
        <li><a href="<?php echo U('Index/index');?>">首页</a></li>
        <li><a   href="<?php echo U('Member/index');?>">我的一起网</a></li>
        <li><a  href="<?php echo U('Member/cart');?>">购物车</a></li>
        <li><a  href="<?php echo U('Member/hunlirenshangjiaxinxi');?>">我是婚礼人</a></li>
    </ul>
    
</div>
</div><!--//顶部-->
<div class="logo_fixed">
<div class="logo"><!--logo-->
    <a href="<?php echo U('Index/index');?>" class="logol"><img style="height: 30px;" src="/Public/Home/Mobile/Images/menu_and_foot/logo.png" /></a>
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
        </a>
    </div>
</div>
</div><!--//logo-->
</div>
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
    $('#17weixin').bind('click',function(){
        if($('.weixin_erweima').css('display')!=='none'){
            $('.weixin_erweima').css('display','none');
        }else{
            $('.weixin_erweima').css('display','block');
        }
    });
</script>


<div class="lunbo"><!--//轮播-->
<div class="lunbo_l">
<ul>
<li><div class="lunbo_l_m">
<div class="lunbo_l_m_l">策划师</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="/Home/Category/index/cid/1/form/1.html">团队</a></td><td><a target="_blank" href="/Home/Category/index/cid/1/form/0.html">个人</a></td><td><a target="_blank" href="/Home/Category/index/cid/1/shuxing/风格-中式.html">中式</a></td></tr>
<tr><td><a target="_blank" href="/Home/Category/index/cid/1/shuxing/风格-西式.html">西式</a></td><td><a target="_blank" href="/Home/Category/index/cid/1/shuxing/风格-定制.html">定制</a></td><td><a target="_blank" href="/Home/Category/index/cid/1/shuxing/风格-户外.html">户外</a></td></tr>
</table></div>
</div></li>
<li><div class="lunbo_l_m">
<div class="lunbo_l_m_l">司仪</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="/Home/Category/index/cid/2/sex/0.html">男性</a></td><td><a target="_blank" href="/Home/Category/index/cid/2/sex/1.html">女性</a></td><td><a target="_blank" href="/Home/Category/index/cid/2/shuxing/主持形式-搞笑幽默.html">幽默</a></td></tr>
<tr><td><a target="_blank" href="/Home/Category/index/cid/2/shuxing/主持形式-优雅大方.html">优雅</a></td><td><a target="_blank" href="/Home/Category/index/cid/2/shuxing/主持形式-大气磅礴.html">大气</a></td><td><a target="_blank" href="/Home/Category/index/cid/2/shuxing/主持形式-综合多变.html">综合</a></td></tr>
</table></div>
</div></li>
<li><div class="lunbo_l_m">
<div class="lunbo_l_m_l">布置</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="/Home/Category/index/cid/3/shuxing/色系-粉色.html">粉色</a></td><td><a target="_blank" href="/Home/Category/index/cid/3/shuxing/色系-蓝色.html">蓝色</a></td><td><a target="_blank" href="/Home/Category/index/cid/3/shuxing/色系-黄色.html">黄色</a></td></tr>
<tr><td><a target="_blank" href="/Home/Category/index/cid/3/shuxing/布置形式-桁架和喷绘.html">喷绘</a></td><td><a target="_blank" href="/Home/Category/index/cid/3/shuxing/布置形式-支架和纱幔.html">纱幔</a></td><td><a target="_blank" href="/Home/Category/index/cid/3/shuxing/风格-户外.html">户外</a></td></tr>
</table></div>
</div></li>
<li><div class="lunbo_l_m">
<div class="lunbo_l_m_l">摄像</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="/Home/Category/index/cid/4/shuxing/画质-超高清.html">超高清</a></td><td><a target="_blank" href="/Home/Category/index/cid/4/shuxing/画质-高清.html">高清</a></td><td><a target="_blank" href="/Home/Category/index/cid/4/shuxing/画质-标清.html">标清</a></td></tr>
<tr><td><a target="_blank" href="/Home/Category/index/cid/4/shuxing/拍摄形式-大摇臂.html">大摇臂</a></td><td><a target="_blank" href="/Home/Category/index/cid/4/shuxing/拍摄形式-小摇臂.html">小摇臂</a></td><td><a target="_blank" href="/Home/Category/index/cid/4/shuxing/拍摄形式-航拍.html">航拍</a></td></tr>
</table></div>
</div></li>
<li><div class="lunbo_l_m">
<div class="lunbo_l_m_l">摄影</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="/Home/Category/index/cid/5/shuxing/镜头数-多镜头.html">多镜头</a></td><td><a target="_blank" href="/Home/Category/index/cid/5/shuxing/镜头数-单镜头.html">单镜头</a></td><td><a target="_blank" href="/Home/Category/index/cid/5/shuxing/拍照设备-普通单反.html">普通</a></td></tr>
<tr><td><a target="_blank" href="/Home/Category/index/cid/5/shuxing/拍照设备-半画幅单反.html">半画幅</a></td><td><a target="_blank" href="/Home/Category/index/cid/5/shuxing/拍照设备-全画幅单反.html">全画幅</a></td><td><a target="_blank" href="/Home/Category/index/cid/5/form/1.html">团队</a></td></tr>
</table></div>
</div></li>
<li><div class="lunbo_l_m">
<div class="lunbo_l_m_l">跟妆</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="/Home/Category/index/cid/6/shuxing/跟妆形式-早妆.html">早妆</a></td><td><a target="_blank" href="/Home/Category/index/cid/6/shuxing/跟妆形式-全程.html">全程</a></td><td><a target="_blank" href="/Home/Category/index/cid/6/shuxing/风格-甜美.html">甜美</a></td></tr>
<tr><td><a target="_blank" href="/Home/Category/index/cid/6/shuxing/风格-中式.html">中式</a></td><td><a target="_blank" href="/Home/Category/index/cid/6/shuxing/风格-韩式.html">韩式</a></td><td><a target="_blank" href="/Home/Category/index/cid/6/shuxing/风格-奢华.html">奢华</a></td></tr>
</table></div>
</div></li>
<li><div class="lunbo_l_m">
<div class="lunbo_l_m_l">车队</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="/Home/Category/index/cid/7/shuxing/品牌-宝马.html">宝马</a></td><td><a target="_blank" href="/Home/Category/index/cid/7/shuxing/品牌-奔驰.html">奔驰</a></td><td><a target="_blank" href="/Home/Category/index/cid/7/shuxing/品牌-路虎.html">路虎</a></td></tr>
<tr><td><a target="_blank" href="/Home/Category/index/cid/7/shuxing/车型-越野车.html">越野车</a></td><td><a target="_blank" href="/Home/Category/index/cid/7/shuxing/车型-跑车.html">跑车</a></td><td><a target="_blank" href="/Home/Category/index/cid/7/shuxing/车型-直升机.html">直升机</a></td></tr>
</table></div>
</div></li>
<li><div class="lunbo_l_m">
<div class="lunbo_l_m_l">演艺</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="/Home/Category/index/cid/8/shuxing/种类-歌手.html">歌手</a></td><td><a target="_blank" href="/Home/Category/index/cid/8/shuxing/种类-提琴.html">提琴</a></td><td><a target="_blank" href="/Home/Category/index/cid/8/shuxing/种类-舞蹈.html">舞蹈</a></td></tr>
<tr><td><a target="_blank" href="/Home/Category/index/cid/8/shuxing/种类-魔术.html">魔术</a></td><td><a target="_blank" href="/Home/Category/index/cid/8/shuxing/种类-钢琴.html">钢琴</a></td><td><a target="_blank" href="/Home/Category/index/cid/8/shuxing/种类-乐队.html">乐队</a></td></tr>
</table></div>
</div></li>
<li><div class="lunbo_l_m">
<div class="lunbo_l_m_l">婚纱</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="/Home/Category/index/cid/9/shuxing/样式-婚纱.html">婚纱</a></td><td><a target="_blank" href="/Home/Category/index/cid/9/shuxing/样式-礼服.html">礼服</a></td><td><a target="_blank" href="/Home/Category/index/cid/9/shuxing/风格-田园清新.html">清新</a></td></tr>
<tr><td><a target="_blank" href="/Home/Category/index/cid/9/shuxing/风格-气质淑女.html">淑女</a></td><td><a target="_blank" href="/Home/Category/index/cid/9/shuxing/风格-公主.html">公主</a></td><td><a target="_blank" href="/Home/Category/index/cid/9/shuxing/元素-镂空.html">镂空</a></td></tr>
</table></div>
</div></li>
<li><div class="lunbo_l_m">
<div class="lunbo_l_m_l">酒店</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="/Home/Category/index/cid/10/shuxing/星级-五星级.html">五星级</a></td><td><a target="_blank" href="/Home/Category/index/cid/10/shuxing/星级-四星级.html">四星级</a></td><td><a target="_blank" href="/Home/Category/index/cid/10/shuxing/星级-三星级.html">三星级</a></td></tr>
<tr><td><a target="_blank" href="/Home/Category/index/cid/10/shuxing/厅大小-小厅.html">小厅</a></td><td><a target="_blank" href="/Home/Category/index/cid/10/shuxing/厅大小-中厅.html">中厅</a></td><td><a target="_blank" href="/Home/Category/index/cid/10/shuxing/厅大小-大厅.html">大厅</a></td></tr>
</table></div>
</div></li>
<li><div class="lunbo_l_m" style=" border-color:#FFFFFF;">
<div class="lunbo_l_m_l">囍铺</div>
<div class="lunbo_l_m_r"><table  cellspacing="0">
<tr><td><a target="_blank" href="#">请帖</a></td><td><a target="_blank" href="#">喜糖盒</a></td><td><a target="_blank" href="#">车喜</a></td></tr>
<tr><td><a target="_blank" href="#">酒水</a></td><td><a target="_blank" href="#">签到簿</a></td><td><a target="_blank" href="#">对联</a></td></tr>
</table></div>
</div></li>
</ul>
</div>
<div class="lunbo_mm" >
<!--                        轮         播          上                            -->
<div class="lunbo_m0"  id="lunbo_m0">
<div class="lunbo_m"  id="lunbo_m">
<div class="lunbo_m_gd" id="lunbo_m_gd">
<?php if(is_array($lunbo_shang)): $i = 0; $__LIST__ = $lunbo_shang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U($vo['url']);?>"><img  src="<?php echo ($vo['img_url']); ?>" /></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
<div class="icon icon_left" id="icon_l"  ></div>
<div class="icon icon_right" id="icon_r"  ></div>
</div><!--轮播上-->
<!--                        轮         播          下                            -->
<div class="lunbo_mx0"  id="lunbo_mx0">
<div class="lunbo_mx"  id="lunbo_mx">
<div class="lunbo_mx_gd" id="lunbo_mx_gd">
<?php if(is_array($lunbo_xia)): $i = 0; $__LIST__ = $lunbo_xia;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U($vo['url']);?>"><img  src="<?php echo ($vo['img_url']); ?>" /></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
<div class="iconx icon_left" id="iconx_l"  ></div>
<div class="iconx icon_right" id="iconx_r" ></div>
</div>                                  <!--轮播下-->
</div>
    
<div class="lunbo_r">
    <!--
    <div class="lunbo_r_lrhl">
<div class="lunbo_r_lrhl_t" style="text-align:center; height:50px;"><h1>懒人婚礼</h1><h4>(一键搜索，策划师全程安排)</h4></div>
<form name="lrhlform" action="lrhl.php" method="get"><table cellspacing="0">
<tr><td>婚礼预算:</td><td><input class="lrhlys" type="text" name="lrhlys" value="20000"  maxlength="10" /></td></tr>
<tr><td>婚礼风格:</td><td><input class="lrhlfg" type="text" name="lrhlfg" value="中式" maxlength="10" /></td></tr>
<tr><td>区域选择:</td><td><input class="lrhlys" type="text" name="lrhlys" value="雨花区"  maxlength="10" /></td></tr>
</table>
<input class="lrhlss" type="submit" name="lrhlss" value="开始定制"  />
</form>
</div>-->
    <?php if(is_array($shouye_right)): $i = 0; $__LIST__ = $shouye_right;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="guanggao">
    <a href="<?php echo U($vo['url']);?>">
    <img src="<?php echo ($vo['img_url']); ?>" />
    <span><?php echo ($vo['title']); ?></span>
    </a>
</div><?php endforeach; endif; else: echo "" ;endif; ?>

</div>
</div><!--轮播-->


<div class="box"><!--大盒子-->
<!--                              策   划  模    块   开     始                                        -->
<a name="a_gj_1" id="a_gj_1">&nbsp;</a>
<div class="shangpindkj">
<div class="shangpindkj_title"><a target="_blank" href="<?php echo U('Category/index',array('cid'=>1));?>">策划</a></div>
<div class="shangpindkj_content">

    
<?php if(is_array($cehua)): $i = 0; $__LIST__ = $cehua;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($vo['cat_name']); ?></div>
<?php echo ($vo['user_name']); ?>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id'])).'#maodian_pingjia';?>"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>

</div><!--shangpindkj_content-->
<div class="shangpin_foot"><a href="<?php echo U('Category/index',array('cid'=>1));?>" target="_blank">更多策划请点击</a></div>
</div><!--shangpindkj-->

<!--                              策   划  模    块   结         束                                       -->
<!--                              司   仪   模    块   开        始                                        -->


<a name="a_gj_2" id="a_gj_2">&nbsp;</a>
<div class="shangpindkj">
<div class="shangpindkj_title"><a target="_blank" href="<?php echo U('Category/index',array('cid'=>2));?>">司仪</a></div>
<div class="shangpindkj_content">

    
<?php if(is_array($siyi)): $i = 0; $__LIST__ = $siyi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($vo['cat_name']); ?></div>
<?php echo ($vo['user_name']); ?>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id'])).'#maodian_pingjia';?>"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>

</div><!--shangpindkj_content-->
<div class="shangpin_foot"><a href="<?php echo U('Category/index',array('cid'=>2));?>" target="_blank">更多司仪请点击</a></div>
</div><!--shangpindkj-->

<!--                              司   仪 模    块   结         束                                       -->
<!--                              布   置   模    块   开        始                                        -->


<a name="a_gj_3" id="a_gj_3">&nbsp;</a>
<div class="shangpindkj">
<div class="shangpindkj_title"><a target="_blank" href="<?php echo U('Category/index',array('cid'=>3));?>">布置</a></div>
<div class="shangpindkj_content">

    
<?php if(is_array($buzhi)): $i = 0; $__LIST__ = $buzhi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($vo['cat_name']); ?></div>
<?php echo ($vo['user_name']); ?>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id'])).'#maodian_pingjia';?>"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>

</div><!--shangpindkj_content-->
<div class="shangpin_foot"><a href="<?php echo U('Category/index',array('cid'=>3));?>" target="_blank">更多布置请点击</a></div>
</div><!--shangpindkj-->

<!--                              布  置  模    块   结         束                                       -->
<!--                              摄  像  师  模    块   开        始                                        -->
<a name="a_gj_4" id="a_gj_4">&nbsp;</a>
<div class="shangpindkj">
<div class="shangpindkj_title"><a target="_blank" href="<?php echo U('Category/index',array('cid'=>4));?>">摄像师</a></div>
<div class="shangpindkj_content">
    
<?php if(is_array($shexiang)): $i = 0; $__LIST__ = $shexiang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($vo['cat_name']); ?></div>
<?php echo ($vo['user_name']); ?>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id'])).'#maodian_pingjia';?>"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>
    
</div><!--shangpindkj_content-->
<div class="shangpin_foot"><a href="<?php echo U('Category/index',array('cid'=>4));?>" target="_blank">更多摄像师请点击</a></div>
</div><!--shangpindkj-->

<!--                              摄  像  师  模    块   结         束                                       -->
<!--                              摄  影  师  模    块   开        始                                        -->
<a name="a_gj_5" id="a_gj_5">&nbsp;</a>
<div class="shangpindkj">
<div class="shangpindkj_title"><a target="_blank" href="<?php echo U('Category/index',array('cid'=>5));?>">摄影师</a></div>
<div class="shangpindkj_content">
    
<?php if(is_array($sheying)): $i = 0; $__LIST__ = $sheying;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($vo['cat_name']); ?></div>
<?php echo ($vo['user_name']); ?>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id'])).'#maodian_pingjia';?>"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>
    
</div><!--shangpindkj_content-->
<div class="shangpin_foot"><a href="<?php echo U('Category/index',array('cid'=>5));?>" target="_blank">更多摄影师请点击</a></div>
</div><!--shangpindkj-->

<!--                              摄影师  模    块   结         束    -->
<!--                              跟妆师  模    块   开         始                                        -->
<a name="a_gj_6" id="a_gj_6">&nbsp;</a>
<div class="shangpindkj">
<div class="shangpindkj_title"><a target="_blank" href="<?php echo U('Category/index',array('cid'=>6));?>">跟妆师</a></div>
<div class="shangpindkj_content">
<?php if(is_array($genzhuang)): $i = 0; $__LIST__ = $genzhuang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($vo['cat_name']); ?></div>
<?php echo ($vo['user_name']); ?>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id'])).'#maodian_pingjia';?>"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>
    
</div><!--shangpindkj_content-->
<div class="shangpin_foot"><a href="<?php echo U('Category/index',array('cid'=>6));?>" target="_blank">更多跟妆请点击</a></div>
</div><!--shangpindkj-->

<!--                              跟妆师   模    块   结         束    -->
<!--                              车队  模    块   开         始                                        -->
<a name="a_gj_7" id="a_gj_7">&nbsp;</a>
<div class="shangpindkj">
<div class="shangpindkj_title"><a target="_blank" href="<?php echo U('Category/index',array('cid'=>7));?>">车队</a></div>
<div class="shangpindkj_content">
<?php if(is_array($chedui)): $i = 0; $__LIST__ = $chedui;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($vo['cat_name']); ?></div>
<?php echo ($vo['user_name']); ?>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id'])).'#maodian_pingjia';?>"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>
    
</div><!--shangpindkj_content-->
<div class="shangpin_foot"><a href="<?php echo U('Category/index',array('cid'=>7));?>" target="_blank">更多车队请点击</a></div>
</div><!--shangpindkj-->

<!--                              车队  模    块   结         束    -->
<!--                              演艺  模    块   开         始      -->
<a name="a_gj_8" id="a_gj_8">&nbsp;</a>
<div class="shangpindkj">
<div class="shangpindkj_title"><a target="_blank" href="<?php echo U('Category/index',array('cid'=>8));?>">演艺</a></div>
<div class="shangpindkj_content">
<?php if(is_array($yanyi)): $i = 0; $__LIST__ = $yanyi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($vo['cat_name']); ?></div>
<?php echo ($vo['user_name']); ?>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id'])).'#maodian_pingjia';?>"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>
    
</div><!--shangpindkj_content-->
<div class="shangpin_foot"><a href="<?php echo U('Category/index',array('cid'=>8));?>" target="_blank">更多演艺请点击</a></div>
</div><!--shangpindkj-->
<!--                              演艺  模    块   结         束    -->
<!--                              舞美  模    块   开         始                                        -->
<a name="a_gj_9" id="a_gj_9">&nbsp;</a>
<div class="shangpindkj">
<div class="shangpindkj_title"><a target="_blank" href="<?php echo U('Category/index',array('cid'=>9));?>">婚纱礼服</a></div>
<div class="shangpindkj_content">
<?php if(is_array($wumei)): $i = 0; $__LIST__ = $wumei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($vo['cat_name']); ?></div>
<?php echo ($vo['user_name']); ?>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id'])).'#maodian_pingjia';?>"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>
    
</div><!--shangpindkj_content-->
<div class="shangpin_foot"><a href="<?php echo U('Category/index',array('cid'=>9));?>" target="_blank">更多舞美请点击</a></div>
</div><!--shangpindkj-->
<!--                              舞美  模    块   结         束    -->
<!--                              酒店  模    块   开         始                                        -->
<a name="a_gj_10" id="a_gj_10">&nbsp;</a>
<div class="shangpindkj">
<div class="shangpindkj_title"><a target="_blank" href="<?php echo U('Category/index',array('cid'=>10));?>">酒店</a></div>
<div class="shangpindkj_content">
<?php if(is_array($jiudian)): $i = 0; $__LIST__ = $jiudian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a target="_blank" href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($vo['cat_name']); ?></div>
<?php echo ($vo['user_name']); ?>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id'])).'#maodian_pingjia';?>"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>
    
</div><!--shangpindkj_content-->
<div class="shangpin_foot"><a href="<?php echo U('Category/index',array('cid'=>10));?>" target="_blank">更多酒店请点击</a></div>
</div><!--shangpindkj-->
<!--                              酒    店      模    块   结         束    -->
<a name="a_gj_11" id="a_gj_11">&nbsp;</a>
</div><!--//大盒子-->






<div class="gj_r"><a href="#top"></a></div><!--右侧挂件1-->
<div class="gj_l" id="gj_l">
<ul>
<li><a class="a_gj_1" onclick="click_miaodian(this)" id="gj_l_1" onMouseOver="a_mouse(this)" onMouseOut="a_out(this)">策划</a></li>
<li><a class="a_gj_2" onclick="click_miaodian(this)" id="gj_l_2" onMouseOver="a_mouse(this)" onMouseOut="a_out(this)">司仪</a></li>
<li><a class="a_gj_3" onclick="click_miaodian(this)" id="gj_l_3" onMouseOver="a_mouse(this)" onMouseOut="a_out(this)">布置</a></li>
<li><a class="a_gj_4" onclick="click_miaodian(this)" id="gj_l_4" onMouseOver="a_mouse(this)" onMouseOut="a_out(this)">摄像</a></li>
<li><a class="a_gj_5" onclick="click_miaodian(this)" id="gj_l_5" onMouseOver="a_mouse(this)" onMouseOut="a_out(this)">摄影</a></li>
<li><a class="a_gj_6" onclick="click_miaodian(this)" id="gj_l_6" onMouseOver="a_mouse(this)" onMouseOut="a_out(this)">跟妆</a></li>
<li><a class="a_gj_7" onclick="click_miaodian(this)" id="gj_l_7" onMouseOver="a_mouse(this)" onMouseOut="a_out(this)">车队</a></li>
<li><a class="a_gj_8" onclick="click_miaodian(this)" id="gj_l_8" onMouseOver="a_mouse(this)" onMouseOut="a_out(this)">演艺</a></li>
<li><a class="a_gj_9" onclick="click_miaodian(this)" id="gj_l_9" onMouseOver="a_mouse(this)" onMouseOut="a_out(this)">婚纱</a></li>
<li><a class="a_gj_10" onclick="click_miaodian(this)" id="gj_l_10" onMouseOver="a_mouse(this)" onMouseOut="a_out(this)">酒店</a></li>
</ul>
</div><!--左侧挂件1-->
<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('Index/menu');?>"></iframe>
<script src="/Public/Home/Js/index.js" type="text/javascript"></script>




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