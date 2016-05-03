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


 


<link rel="stylesheet" type="text/css" href="/Public/Home/Css/category.css">
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<title>一起网_分类商品</title>
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


<div class="box">
<div class="box_l">
<div class="box_l_menu">
<div class="box_l_menu_tr">
<div class="menu_tr_head" style='margin-right: 0px;border: none;font-weight: 900;'><?php echo ($cat_name); ?></div>
<?php if($get['sex'] != null): ?><div class="menu_tr_head"><a href="<?php echo U('Category/index',$get_cs['no_sex']);?>">性别: <?php echo ($get['sex']==0?'男性':'女性'); ?> &nbsp;<span class="guanbi">×</span></a></div><?php endif; ?>
<?php if($get['form'] != null): ?><div class="menu_tr_head"><a href="<?php echo U('Category/index',$get_cs['no_form']);?>">形式: <?php echo ($get['form']==0?'个人':'团队'); ?> &nbsp;<span class="guanbi">×</span></a></div><?php endif; ?>
<?php if($get['location'] != null): ?><div class="menu_tr_head"><a href="<?php echo str_replace('/location/'.urlencode($get['location']),'',$url['full']);?>">区域: <?php echo ($get['location']); ?> &nbsp;<span class="guanbi">×</span></a></div><?php endif; ?>
<?php if($get['price'] != null): ?><div class="menu_tr_head"><a href="<?php echo str_replace('/price/'.urlencode($get['price']),'',$url['full']);?>">价格: <?php echo ($get['price']); ?> &nbsp;<span class="guanbi">×</span></a></div><?php endif; ?>

    <?php if(is_array($shuxing)): $i = 0; $__LIST__ = $shuxing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="menu_tr_head"><a href="<?php echo quxiao_shuxing($url['full'],$vo);?>"><?php echo ($vo); ?> &nbsp;<span class="guanbi">×</span></a></div><?php endforeach; endif; else: echo "" ;endif; ?>

</div>
    <?php if($sex_and_form == 1): else: ?>
<div class="box_l_menu_tr">
    <?php if($get['sex'] == null): ?><div class="first_div">
<div class="menu_tr_title">性别&nbsp;:</div>
<ul class="menu_tr_ul" style="width:auto;">
    <li><a href="<?php echo U('Category/index',$get_cs['sex_0']);?>">男性</a></li>
<li><a href="<?php echo U('Category/index',$get_cs['sex_1']);?>">女性</a></li>
</ul>
        </div>
<?php else: endif; ?>
    <?php if($get['form'] == null): ?><div class="first_div">
    <div class="menu_tr_title">形式 :</div>
<ul class="menu_tr_ul" style="width:auto;">
<li><a href="<?php echo U('Category/index',$get_cs['form_1']);?>">团队</a></li>
<li><a href="<?php echo U('Category/index',$get_cs['form_0']);?>">个人</a></li>
</ul>
        </div>
    <?php else: endif; ?>
</div><?php endif; ?>
    <div class="box_l_menu_tr" style="border-bottom: none;">
<ul class="menu_tr_ul menu_tr_ul_shuxing">
<?php if(is_array($arr_shuxing[0])): $i = 0; $__LIST__ = $arr_shuxing[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="first_div">
    <li class="menu_tr_title teshu_li"><?php echo ($key); ?> :</li>
    <?php if(is_array($vo)): foreach($vo as $k=>$value): ?><li class="shuxing_jq"><a href="<?php echo U(shuxing_url($url['teshu'],$key.'-'.$value)); echo ($url['houmian']); ?>"><?php echo ($value); ?></a></li><?php endforeach; endif; ?>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
    <?php if(is_array($arr_shuxing)): $i = 0; $__LIST__ = array_slice($arr_shuxing,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$first): $mod = ($i % 2 );++$i;?><div class="box_l_menu_tr" style="border-bottom: none;padding-top: 0px;">
<ul class="menu_tr_ul menu_tr_ul_shuxing">
<?php if(is_array($first)): $i = 0; $__LIST__ = $first;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="first_div">
    <li class="menu_tr_title teshu_li"><?php echo ($key); ?> :</li>
    <?php if(is_array($vo)): foreach($vo as $k=>$value): ?><li class="shuxing_jq"><a href="<?php echo U(shuxing_url($url['teshu'],$key.'-'.$value)); echo ($url['houmian']); ?>"><?php echo ($value); ?></a></li><?php endforeach; endif; ?>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
    <?php if($get['location'] == null): ?><div class="box_l_menu_tr" style="border-top: 1px dotted #DDD;">
<div class="menu_tr_title">区域&nbsp;:</div>
<ul class="menu_tr_ul">
<li><a href="<?php echo U($url['teshu'].'/location/芙蓉区').$url['houmian'];?>">芙蓉区</a></li>
<li><a href="<?php echo U($url['teshu'].'/location/雨花区').$url['houmian'];?>">雨花区</a></li>
<li><a href="<?php echo U($url['teshu'].'/location/天心区').$url['houmian'];?>">天心区</a></li>
<li><a href="<?php echo U($url['teshu'].'/location/开福区').$url['houmian'];?>">开福区</a></li>
<li><a href="<?php echo U($url['teshu'].'/location/岳麓区').$url['houmian'];?>">岳麓区</a></li>
<li><a href="<?php echo U($url['teshu'].'/location/望城县').$url['houmian'];?>">望城县</a></li>
<li><a href="<?php echo U($url['teshu'].'/location/宁乡县').$url['houmian'];?>">宁乡县</a></li>
<li><a href="<?php echo U($url['teshu'].'/location/浏阳市').$url['houmian'];?>">浏阳市</a></li>
<li><a href="<?php echo U($url['teshu'].'/location/长沙县').$url['houmian'];?>">长沙县</a></li>
</ul>
</div>
        <?php else: endif; ?>
    <?php if($get['price'] == null): ?><div class="box_l_menu_tr">
<div class="menu_tr_title">价格&nbsp;:</div>
<ul class="menu_tr_ul">
    <li><a href="<?php echo U($url['teshu'].'/price/400元以下');?>">400元以下</a></li>
<li><a href="<?php echo U($url['teshu'].'/price/400-600元');?>">400-600元</a></li>
<li><a href="<?php echo U($url['teshu'].'/price/600-800元');?>">600-800元</a></li>
<li><a href="<?php echo U($url['teshu'].'/price/800-1000元');?>">800-1000元</a></li>
<li><a href="<?php echo U($url['teshu'].'/price/1000元以上');?>">1000元以上</a></li>
<li><span>价格区间：</span>
    <form style="display:inline;" action="<?php echo ($url['full']); ?>" >
        <input type="text" name="price_s" value="" placeholder="&yen;" style="padding:0px 2px;"/><span style="padding:0px 2px;">-</span>
<input type="text" name="price_b" value="" placeholder="&yen;" style="padding:0px 2px;"/>
<input type="submit" class="submit_sr" value="确定" />
</form>
</li>
</ul>
</div>
        <?php else: endif; ?>
</div><!---左边选项菜单-->
<div class="box_l_menu">
<div>
<ul class="menu_tr_ul menu_tr_ul2">
    <li id="moren"><a href="<?php echo U('Category/index',$get_cs['order_moren']);?>">默认</a></li>
    <li id="number"><a href="<?php echo U('Category/index', $get_cs['order_xiaoliang']);?>">销量<span class="jiantou"></span></a></li>
    <li id="price"><a href="<?php echo U('Category/index', $get_cs['order_price_desc']);?>">价格<span class="jiantou"></span></a></li>
    <li id="pinglun"><a href="<?php echo U('Category/index', $get_cs['order_pinglun']);?>">好评<span class="jiantou"></span></a></li>
    <li id="update"><a href="<?php echo U('Category/index', $get_cs['order_update']);?>">发布时间<span class="jiantou"></span></a></li>
</ul>
</div>
<div>
    <a href="#" class="menu_tr_check" id="daijinquan"><span class="icon_check"></span>
<span>代金券</span></a>
<a href="#" class="menu_tr_check" id="fanxian"><span class="icon_check"></span>
<span>评价返现</span></a>
</div>
</div><!--左边选项菜单2-->
<div class="shopping_table">
    
    
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="shopping">
    <div class="shopping_img"><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>"/></a></div>
<div class="shopping_title">
<div class="shopping_title_name">商品</div>
<a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a>
<?php if($vo['daijinquan'] == '1'): ?><span class="daijinquan" style="margin-left: 5px;">券</span><?php endif; ?>
<?php if($vo['fanxian'] != '0'): ?><span class="daijinquan">返</span><?php endif; ?>
</div>
<div class="shopping_tr2">
<div class="shopping_title_name"><?php echo ($cat_name); ?></div>
<span><?php echo ($vo['user_name']); ?></span>
<div class="shopping_didian"><img src="/Public/Home/Images/index/didian.png"  /><div><?php echo (str_replace('市'.$a,' ',str_replace('省'.$a,' ',$vo['area']))); ?></div></div>
</div><!--第二行信息-->
<div class="shopping_pricepj">
    <div class="shopping_price">&yen;<?php echo ($vo['price']); ?><span class="yuan_price">门店价 <del>&yen;<?php echo (floor($vo['yuan_price'])); ?></del></span></div>
    <span class="shopping_sale">已售 <?php echo ($vo['buy_number']); ?></span>
</div>
<div class="pingjia_div"><div class="shopping_pjrenshu"><a href="#"><?php echo ($vo['comment_number']); ?>人评价</a></div>
<div class="shopping_pingjia"><div class="pingjia_limian" style="width:<?php echo (xingxing_baifenbi($vo['score'])); ?>;"></div></div></div>
</div><!--商品1--><?php endforeach; endif; else: echo "" ;endif; ?>
    
    
</div><!--商品列表-->
<div class="page_foot"><?php echo ($page_foot); ?></div>
</div><!--左边主内容-->
<div class="box_r">
    <h3>猜你喜欢</h3>
    <?php if(is_array($guanggao)): $i = 0; $__LIST__ = $guanggao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box_r_shopping">
        <a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>">
            <img src="<?php echo ($vo['goods_img']); ?>"/>
        </a>
        <h4><a href="<?php echo U('Goods/index',array('goods_id'=>$vo['goods_id']));?>"><?php echo ($vo['goods_name']); ?></a></h4>
        <p>
            <span class="guanggao_price">&yen;<?php echo ($vo['price']); ?></span>
            <span>已售 <span class="red"><?php echo ($vo['buy_number']); ?></span></span>
        </p>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div><!--主内容盒子-->
<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('index/menu');?>"></iframe>
<script src="/Public/Home/Js/category.js" type="text/javascript"></script>



<!--价格搜索框显示自己填写的价格区间-->
<script  type="text/javascript">
    $('input[name=price_s]').val(<?php echo ($get['price_s']); ?>);
    $('input[name=price_b]').val(<?php echo ($get['price_b']); ?>);
    $('.submit_sr').bind('click',function(){
        var price_s=$('input[name=price_s]').val()==''?0:$('input[name=price_s]').val();
        var price_b=$('input[name=price_b]').val()==''?99999:$('input[name=price_b]').val();
        $('input[name=price_s]').val(price_s);
        $('input[name=price_b]').val(price_b);
    })
    var order = "<?php echo ($get['order']); ?>";
    if(order===''){
        $('#moren a').css('color','#03BA8A');
    }else if(order==='number_desc'){
        $('#number a').css('color','#03BA8A');
        $('#number .jiantou').css('background-position','0px -810px');
    }else if(order==='price_desc'){
        $('#price a').css('color','#03BA8A');
        $('#price .jiantou').css('background-position','0px -810px');
        $('#price a').attr('href',"<?php echo U('Category/index', $get_cs['order_price_asc']);?>");
    }else if(order==='price_asc'){
        $('#price a').css('color','#03BA8A');
        $('#price .jiantou').css('background-position','0px -11px');
        $('#price a').attr('href',"<?php echo U('Category/index', $get_cs['order_price_desc']);?>");
    }else if(order==='pinglun_desc'){
        $('#pinglun a').css('color','#03BA8A');
        $('#pinglun .jiantou').css('background-position','0px -810px');
    }else if(order==='update_desc'){
        $('#update a').css('color','#03BA8A');
        $('#update .jiantou').css('background-position','0px -810px');
    };

    var daijinquan = "<?php echo ($get['daijinquan']); ?>";
    if(daijinquan=='1'){
        $('#daijinquan').children('.icon_check').css('background-position','-435px -151px');
        $('#daijinquan').attr('href',"<?php echo U('Category/index',$get_cs['no_daijinquan']);?>");
    }else{
        $('#daijinquan').children('.icon_check').css('background-position','-435px -128px');
        $('#daijinquan').attr('href',"<?php echo U('Category/index',$get_cs['daijinquan']);?>");
    }
    var fanxian = "<?php echo ($get['fanxian']); ?>";
    if(fanxian=='1'){
        $('#fanxian').children('.icon_check').css('background-position','-435px -151px');
        $('#fanxian').attr('href',"<?php echo U('Category/index',$get_cs['no_fanxian']);?>");
    }else{
        $('#fanxian').children('.icon_check').css('background-position','-435px -128px');
        $('#fanxian').attr('href',"<?php echo U('Category/index',$get_cs['fanxian']);?>");
    }
    
    //属性用js控制是否显示
    var shuxing="<?php echo ($get['shuxing']); ?>";
    if(shuxing!==''){
        var arr_shuxing=shuxing.split('+');
        for(i=0;i<arr_shuxing.length;i++){
            var arr_1=arr_shuxing[i].split('-');
            $('li:contains('+arr_1[0]+')').parent().css('display','none');
        }
        var shuxing_count=<?php echo ($shuxing_count); ?>;
        if(arr_shuxing.length==shuxing_count){
            $('.menu_tr_ul_shuxing').parent().css('display','none');
        }
    }
    
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