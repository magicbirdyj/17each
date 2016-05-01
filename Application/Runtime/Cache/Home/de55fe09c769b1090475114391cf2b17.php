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
<script src="/Public/Common/Js/function.js"></script> 
<!--begin 日历 -->
<link href="/Public/Common/Css/calendar.css" rel="stylesheet" type="text/css"/>
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Common/Js/calendar.js"></script>
<!-- end 日历 -->
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


<div style="width:1200px;margin:20px auto;">
    <div>
        <div class="datouxiang_fangda"></div>
     <div class="titile1">[<?php echo ($goods['cat_name']); ?>]<?php echo ($goods['goods_name']); ?></div>
     <!--<div class="titile2"><?php echo ($goods['user_name']); ?></div>  不要商家名称-->
    <div class="touxiang">
        <div class="datouxiang_div">
            <img class="datouxiang" src="<?php echo ($goods['goods_img']); ?>" />
            <img class="huise_gezi" />
        </div>
        <ul class="xiangtouxiang_ul">
            <li class="xiaotouxiang"><a href="javascript:void(0)" ><img src="<?php echo ($goods['goods_img']); ?>"/></a></li>
            <?php if(is_array($img_qita)): $i = 0; $__LIST__ = $img_qita;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="xiaotouxiang"><a href="javascript:void(0)"><img src="<?php echo ($vo); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>  
        <div class="lianxifangshi">
            <ul>
                <li id="dh"><img src="/Public/Home/Images/public/dianhua1.png" /></li>
                <li id="wx"><img src="/Public/Home/Images/public/weixin1.png" /></li>
                <li id="em"><img src="/Public/Home/Images/public/youxiang1.png" /></li>
                <li class="li_last"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($goods['qq']); ?>&site=qq&menu=yes"><img id="qqjt" src="/Public/Home/Images/public/qqjt.png"/></a></li>
                
            </ul>
        </div>
    </div>
    <div class="info">
        <div class="price">
            <div class="price1"><div class="span">价格:</div><div class="span1">&yen;&nbsp;<s><?php echo ($goods['yuan_price']); ?></s></div></div>
            <div class="price2"><div class="span">一起网价:</div><div class="span2">&yen;&nbsp;<?php echo ($goods['price']); ?></div>
                <?php if($goods['daijinquan'] == '1'): ?><span class="daijinquan" style="margin-left: 5px;">券</span><?php endif; ?>
                <?php if($goods['fanxian'] != '0'): ?><span class="daijinquan">返</span><?php endif; ?>
            </div>
        </div>
        <div class="about">
            <div>已售：<span><?php echo ($goods['buy_number']); ?></span></div>
            <div><a class="maodian_pingjia" href="<?php echo U('Goods/index',array('goods_id'=>$goods['goods_id'])).'#maodian_pingjia';?>"><span><?php echo ($goods['score']); ?></span>分</a></div>
            <div id="pingjia"><a class="maodian_pingjia" href="<?php echo U('Goods/index',array('goods_id'=>$goods['goods_id'])).'#maodian_pingjia';?>"><span><?php echo ($goods['comment_number']); ?></span>人评价</a></div>
        </div>
        <div class="xzrq">选择日期：  绿色：选中 &nbsp; &nbsp; &nbsp; &nbsp; 白色：未选 &nbsp; &nbsp; &nbsp; &nbsp; 灰色：不可选</div>
    <table class="biao" width="500px" style="table-layout: fixed; ">
                            <tbody>
                            <tr>
                                <td class="calTit" colSpan=7 style="height:30px;padding-top:3px;text-align:center;">
    
                                    <a href="javascript:void(0)" title="上一年" id="nianjian" class="ymNaviBtn lsArrow"></a>
                                    <a href="javascript:void(0)" title="上一月" id="yuejian" class="ymNaviBtn lArrow"></a>
    
                                    <div style="width:250px; float:left; padding-left:90px;">
                                                        <span id="dateSelectionRili" class="dateSelectionRili"
                                                              style="cursor:hand;color: white; border-bottom: 1px solid white;"
                                                              onclick="dateSelection.show()">
                                                        <span id="nian" class="topDateFont"></span><span
                                                                class="topDateFont">年</span><span id="yue"
                                                                                                  class="topDateFont"></span><span
                                                                class="topDateFont">月</span>
                                                        <span class="dateSelectionBtn cal_next"
                                                              onclick="dateSelection.show()">▼</span></span> &nbsp;&nbsp;<font id=GZ
                                                                                                                               class="topDateFont"></font>
                                    </div>
                                    <!--新加导航功能-->
                                    <div style="left: 250px; display: none;" id="dateSelectionDiv">
                                        <div id="dateSelectionHeader"></div>
                                        <div id="dateSelectionBody">
                                            <div id="yearList">
                                                <div id="yearListPrev" onClick="dateSelection.prevYearPage()">&lt;</div>
                                                <div id="yearListContent"></div>
                                                <div id="yearListNext" onClick="dateSelection.nextYearPage()">&gt;</div>
                                            </div>
                                            <div id="dateSeparator"></div>
                                            <div id="monthList">
                                                <div id="monthListContent"><span id="SM0" class="month"
                                                                                 onclick="dateSelection.setMonth(0)">1</span><span
                                                        id="SM1" class="month" onClick="dateSelection.setMonth(1)">2</span><span
                                                        id="SM2" class="month" onClick="dateSelection.setMonth(2)">3</span><span
                                                        id="SM3" class="month" onClick="dateSelection.setMonth(3)">4</span><span
                                                        id="SM4" class="month" onClick="dateSelection.setMonth(4)">5</span><span
                                                        id="SM5" class="month" onClick="dateSelection.setMonth(5)">6</span><span
                                                        id="SM6" class="month" onClick="dateSelection.setMonth(6)">7</span><span
                                                        id="SM7" class="month" onClick="dateSelection.setMonth(7)">8</span><span
                                                        id="SM8" class="month" onClick="dateSelection.setMonth(8)">9</span><span
                                                        id="SM9" class="month" onClick="dateSelection.setMonth(9)">10</span><span
                                                        id="SM10" class="month" onClick="dateSelection.setMonth(10)">11</span><span
                                                        id="SM11" class="month curr" onClick="dateSelection.setMonth(11)">12</span>
                                                </div>
                                                <div style="clear: both;"></div>
                                            </div>
                                            <div id="dateSelectionBtn">
                                                <div id="dateSelectionTodayBtn" onClick="dateSelection.goToday()">今天</div>
                                                <div id="dateSelectionOkBtn" onClick="dateSelection.go()">确定</div>
                                                <div id="dateSelectionCancelBtn" onClick="dateSelection.hide()">取消</div>
                                            </div>
                                        </div>
                                        <div id="dateSelectionFooter"></div>
                                    </div>
                                    <a href="javascript:void(0)" id="nianjia" title="下一年" class="ymNaviBtn rsArrow" style="float:right;"></a>
                                    <a href="javascript:void(0)" id="yuejia" title="下一月" class="ymNaviBtn rArrow" style="float:right;"></a>
    
                                </td>
                            </tr>
                            
                            <tr class="calWeekTit" style="font-size:12px; height:20px;text-align:center;">
                                <td width="100" class="red">星期日</td>
                                <td width="100">星期一</td>
                                <td width="100">星期二</td>
                                <td width="100">星期三</td>
                                <td width="100">星期四</td>
                                <td width="100">星期五</td>
                                <td width="100" class="red">星期六</td>
                            </tr>
                            <SCRIPT language="JavaScript">
    
                                var gNum;
                                for (var i = 0; i < 6; i++) {
                                    document.write('<tr align=center height="38" id="tt">');
                                    for (var j = 0; j < 7; j++) {
                                        gNum = i * 7 + j ;
                                        document.write('<td  id="GD' + gNum + '" on="0" ><font  id="SD' + gNum + '" style="font-size:14px;font-family:Microsoft YaHei;font-weight: bold;"');
                                        if (j == 0)  document.write('color=red');
                                        if (j == 6)
                                            if (i % 2 == 1)  document.write('color=red');
                                            else  document.write('color=red');
                                        document.write('  TITLE="">  </font><br><font  id="LD' + gNum + '"  size=2  style="white-space:nowrap;overflow:hidden;cursor:default;color: #999;">  </font></td>');
                                    }
                                    document.write('</tr>');
                                }
                            </SCRIPT>
                            </tbody>
                        </table>
       
        <form name="buy" action="<?php echo U('Goods/buy');?>" method="get">
            <input name="goods_id" type="hidden" value="<?php echo ($goods_id); ?>" />
            <input name="server_day" type="hidden" />
        </form>
        
        
        <div class="buy" id="buy">
            <a href="javascript:void(0)" class="goumai">立即购买 </a>
            <a href="javascript:void(0)" class="gouwuche" title="加入购物车" id="gouwuche"> </a>
            <i class="i_shoucang"></i>
            <?php if($is_sellect == null): ?><a  class="shoucang" id="shoucang">收藏商品（<strong><?php echo ($sellection_count); ?></strong>）</a>
            <?php else: ?>
                <span  class="shoucang">已收藏（<strong><?php echo ($sellection_count); ?></strong>）</span><?php endif; ?>
            <i class="i_fenxiang"></i>
              <a href="javascript:void(0)" class="shoucang fenxiang" id="fenxiang">分享</a>
        </div>
        <div class="buy buy_clone" id="buy_clone">请选择日期<a class="mini_close" id="tishi_close" href="javascript:void(0)">×</a></div>
    </div>
     <div class="jianjie_more_div">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($goods['shop_introduce']); ?><a href="javascript:void(0)" class="mini_close">×</a></div>
     <div class="dianpujieshao">
         <div class="jianjie" >
         商家承诺
         <div class="chengnuo_content">
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
         <ul class="dianpujieshao_pingfen">
             <li>
                 <div>描述</div>
                 <div class="pingfen_jt"><?php echo ($pingfen_fl[0]); ?></div>
             </li>
             <li>
                 <div>服务</div>
                 <div class="pingfen_jt"><?php echo ($pingfen_fl[1]); ?></div>
             </li>
             <li style="border-right: none;">
                 <div>专业</div>
                 <div  class="pingfen_jt"><?php echo ($pingfen_fl[2]); ?></div>
             </li>
         </ul>
         <div class="jianjie">
         婚礼人介绍
         <div><span class="jianjie_content">
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (substr($goods['shop_introduce'],0,600)); ?>
                 <?php if($shop_introduce > 600): ?><a class='jianjie_more'>更多......</a><?php endif; ?>
             </span></div>
         </div>
     </div>
    </div>
    <div class="box_b">
        <div class="box_bl">
     <div class="other">
         <ul>
             <li class="other_title" id="li_title"> <span class="span1">该商家的其它服务</span>
                 <span class="span2 hlljg">一起网价</span><span class="span2 mdj">门 店 价</span><span class="span2 ys">已售</span>
                 </li>
                 <div id="div_li">   </div>
         </ul>
         <div class="page_foot" id="page_foot_1"></div>
     </div>
    <a name='maodian_pingjia' id='maodian_pingjia'>&nbsp;</a>
    <div class="guanggao" style="margin-top: 15px;">
             <h3>该商家其它服务</h3>
            <?php if(is_array($goods_qita)): $i = 0; $__LIST__ = $goods_qita;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box_r_shopping">
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
    <div class="shop_div">
    <div class="content_title"><ul>
            <li class="spxq">服务详情</li>
            <li class="ljpj">累计评价</li>
        </ul></div>
    <div id="spxq">
    <div class="goods_shuxing">
        <div>商家：<?php echo ($goods['user_name']); ?></div>
        <div class="shuxing_title">产品属性：</div>
        <div>
        <ul>
            <?php if(is_array($shuxing)): $i = 0; $__LIST__ = $shuxing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($key); ?> ：<?php echo ($vo); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
    </div>
    <div class="goodscontent"><?php echo ($goods['goods_desc']); ?></div>
    </div>
    <div class="pinglun">
        <div class="zhengtifenshu">
            <span class="zhengtipingjia">整体评价:</span>
            <span class="score"><?php echo ($goods['score']); ?></span><span class="fen">分</span><span class="shopping_pingjia"><span class="pingjia_limian" style="width: <?php echo (xingxing_baifenbi($goods['score'])); ?>;"></span></span>共<strong><?php echo ($goods['comment_number']); ?></strong>人评价
        </div>
        <div class="leijipinglun">
            <ul id='leijipinglun'>
            </ul>
            <!--<div class="page_foot" id='page_foot_pinglun'><?php echo ($page_foot_pinglun); ?></div>-->
            <div class="page_foot" id='page_foot_pinglun'></div>
        </div>
    </div>
    </div>
</div>
        <div class="guanggao">
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
    </div>
</div>
        
<div id="overlay"></div><!--遮罩层div-->
<div class="mini_login" id="mini_login">
    <div class="mini_head">账号登录<a  class="a_zhuce" href="<?php echo U('Zhuce/index');?>" style="width: 60px;">免费注册</a><a class="mini_close" id="mini_close" href="javascript:void(0)" title="关闭此窗口">×</a></div>
    <div class="mini_div">
         
<!DOCTYPE html">
<html>
<head>
<title><?php echo ($title); ?></title>
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/mini_login.css">
</head>

<body>
<div class="zhuce1_div_form">
    <form name="zhuce"  method="post" action="<?php echo U('Login/chenggong');?>" id="form1" >
        <input type="hidden" name="hidden" value="<?php echo ($time); ?>" />
        <input type="hidden" name="leixing" value="mini_login" />
<div class="zhuce1_box">
<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">手机号码：</div>
<span id="infor_shoujihao"></span>
<input type="text" name="shoujihao" class="zhuce1_tr_td2" />
</div><!--第一行-->

<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">密码：</div>
<span id="infor_mima"><?php echo ($infor_mima); ?></span>
<input type="password" name="mima" class="zhuce1_tr_td2"/>
</div><!--第二行-->
<a href="javascript:void(0)" id="zhuce1_xiayibu" class="a_xyb" onClick="return login(this)" style="float: left;" >登录</a>
<div id="info_login" style="font-size: 14px; float: left; margin: 40px 0px 0px 20px;"></div>
</div>

</form>
</div>


<script src="/Public/Home/Js/denglu.js" type="text/javascript"></script>

</body>
</html>

    </div>
</div>

<div class="gouwuche_join" id="gouwuche_join">
    <a  id="gouwuche_guanbi" class="gouwuche_guanbi" hidefocus="true"></a>
    <div class="gouwuche_body">
	<div id="gouwuche_top" class="gouwuche_top">
            
		<div class="gouwuche_top_left">
                    <i></i>
			<h5>成功加入购物车</h5>

			<p>购物车内共有<strong>1</strong>种商品</p>

		</div>

		<div class="gouwuche_top_right">
			<a href="javascript:void(0);"  class="gouwuche_top_right_a1" id="gouwuche_jxll"><<继续浏览</a>
                        <a href="<?php echo U('Member/cart');?>"  class="gouwuche_top_right_a2">去购物车结算>></a>
		</div>

 	</div>     
    </div>
</div>
<!--收藏成功div-->
<div class="gouwuche_join" id="shoucang_join">
    <a  id="shoucang_guanbi" class="gouwuche_guanbi" hidefocus="true"></a>
    <div class="gouwuche_body">
	<div id="gouwuche_top" class="gouwuche_top">
            
		<div class="gouwuche_top_left">
                    <i></i>
			<h5>成功加入收藏</h5>

			<p>共收藏了<strong><?php echo ($sellection_count+1); ?></strong>种商品</p>

		</div>

		<div class="gouwuche_top_right">
			<a href="javascript:void(0);"  class="gouwuche_top_right_a1" id="shoucang_jxll"><<继续浏览</a>
                        <a href="<?php echo U('Member/sellection');?>"  class="gouwuche_top_right_a2">去看我的收藏>></a>
		</div>

 	</div>     
    </div>
</div>

<!--分享的弹出div-->
<div  class="fenxiang_tanchu_div" id="fenxiang_tanchu_div">
    <div >
        <div>
            <div class="deal-share">
                <ul>
                    <li><a class="im deal-share-im" href="javascript:void(0);" id="fenxiang_qq_a" ><i class="icon-share"></i><span>QQ/MSN</span></a></li>
                    <li><a id="weibo_a" galabel="default" href="http://v.t.sina.com.cn/share/share.php?appkey=2455095087&url=<?php echo ($goods['url']['url']); ?>&title=<?php echo ($goods['url']['goods_name']); ?>&pic=<?php echo ($goods['url']['goods_img']); ?>" target="_blank" ><i class="icon-share icon-share--sina"></i><span>微博</span></a></li>
                    <li><a galabel="default" href="http://share.renren.com/share/buttonshare.do?link=<?php echo ($goods['url']['url']); ?>&amp;title=<?php echo ($goods['url']['goods_name']); ?>" target="_blank" gaevent="content/main/share/renren"><i class="icon-share icon-share--renren"></i><span>人人</span></a></li>
                    <li><a galabel="default" href="http://www.douban.com/recommend/?url=<?php echo ($goods['url']['url']); ?>&amp;title=<?php echo ($goods['url']['goods_name']); ?>" target="_blank" gaevent="content/main/share/douban"><i class="icon-share icon-share--douban"></i><span>豆瓣</span></a></li>
                    <li><a galabel="default" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=<?php echo ($goods['url']['goods_name']); ?>&amp;url=<?php echo ($goods['url']['url']); ?>&amp;pics=<?php echo ($goods['url']['goods_img']); ?>&amp;summary=<?php echo ($goods['url']['summary']); ?>" target="_blank" gaevent="content/main/share/qzone"><i class="icon-share icon-share--qzone"></i><span>QQ空间</span></a></li>
                </ul>
            </div>
</div></div></div>

<!--分享到QQ的弹出div-->
<div  class="fenxiang_qq_div" id="fenxiang_qq_div">
    <div class="yui3-overlay-content yui3-widget-stdmod" id="yui_3_16_0_1_1451799391828_2921">
        <div id="yui_3_16_0_1_1451799391828_3030" class="yui3-widget-bd">
            <div id="yui_3_16_0_1_1451799391828_3029" class="mt-dialog">
                <h3 id="yui_3_16_0_1_1451799391828_3028" class="head">分享给QQ好友
                    <span id="fenxiang_qq_close" class="close"></span>
                </h3>
                <div class="body">
                    <p class="error" style="display:none">&nbsp;</p>
                    <div>通过QQ、电子邮件发送链接给你的朋友</div>
                    <input class="deal-share-qq-input" value="" maxlength="40" type="text" id="fenxiang_qq_url">
                    <input class="deal-share-qq-copy" value="复制"  type="button" id="fenxiang_qq_copy" style="display: none" >
                </div>
            </div>
        </div>
    </div>
    <div class="mt-overlay-underlay"></div>
</div>


<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('index/menu');?>"></iframe>
<script src="/Public/Home/Js/goods.js" type="text/javascript"></script>
<script type="text/javascript">
    //检测是否登录
    var is_login=check_login();
    //弹出联系方式
    $('#dh').bind('mouseover',function(e){
        var xx=e.pageX+10;
        var yy=e.pageY+10;
        is_login=check_login();
        if(is_login!=0){
            var dh='<div id="div_tanchu"><button type="button">电话：<?php echo ($goods["mobile_phone"]); ?></button></div>';
        }else{
            var dh='<div id="div_tanchu"><button type="button">点我登录获取电话</button></div>';
            $('#dh').bind('click',function(e){
                showOverlay('mini_login');
            });
        }
        $('body').append(dh);
        $('#div_tanchu').css({top: yy, left: xx});
    });
    $('#wx').bind('mouseover',function(e){
        var xx=e.pageX+10;
        var yy=e.pageY+10;
        is_login=check_login();
        if(is_login!=0){
            var dh='<div id="div_tanchu"><button type="button">微信：<?php echo ($goods["weixin"]); ?></button></div>';
            var erweima='<?php echo ($goods["weixin_erweima"]); ?>';
            if(erweima!==''){
                var img_erweima='<img class="erweima" src="'+erweima+'" />';
            }
        }else{
            var dh='<div id="div_tanchu"><button type="button">点我登录获取微信</button></div>';
            $('#wx').bind('click',function(e){
                showOverlay('mini_login');
            });
        }
        $('body').append(dh);
        $('body').append(img_erweima);
        $('#div_tanchu').css({top: yy, left: xx});
        $('.erweima').css({top: yy, left: xx-130});
    });
    $('#em').bind('mouseover',function(e){
        var xx=e.pageX+10;
        var yy=e.pageY+10;
        is_login=check_login();
        if(is_login!=0){
            var dh='<div id="div_tanchu" style="width:220px;"><button type="button">email：<?php echo ($goods["email"]); ?></button></div>';
        }else{
            var dh='<div id="div_tanchu"><button type="button">点我登录获取email</button></div>';
            $('#em').bind('click',function(e){
                showOverlay('mini_login');
            });
        }
        $('body').append(dh);
        $('#div_tanchu').css({top: yy, left: xx});
    });
    
    //鼠标移开 删除弹出
    $('#dh,#wx,#em,.li_last').bind('mouseout',function(){
        $('#div_tanchu').remove();
        $('.erweima').remove();
    });
    
    //如果没登录 点击QQ弹出请先登录,并且title内容改变
    if(is_login==0){
        $('.li_last>a').attr('title','请先点我登录一起网');
    }else{
        $('.li_last>a').attr('title','给我发QQ消息');
    }
    $('.li_last>a').bind('click',function(event){
        if(is_login==0){
            event.preventDefault();
            showOverlay('mini_login');  
        }
    });
    //点击购买
    $('.goumai').bind('click',function(){
        if($('input[name=server_day]').val()==''){
            $('#buy').css('display','none');
            $('#buy_clone').css('display','block');
        }else{
            is_login=check_login();
            if(is_login!=0){
                var user_id="<?php echo ($user_id); ?>";
                var goods_user_id="<?php echo ($goods['user_id']); ?>";
                if(user_id===goods_user_id){
                    alert('不能购买自己的商品');
                }else{
                    $('form[name=buy]').submit();
                }
                }else{
                    //通过请求让控制器记录$_SESSION['ref']
                    var server_day=$('input[name=server_day]').val();
                    var url='/Home/Goods/buy/server_day/'+server_day+'/goods_id/'+$('input[name=goods_id]').val()+'.html';
                    $.ajax({
                        type:'post',
                        async : true,
                         url:url,
                         datatype:'json'
                    });
                    
                    showOverlay('mini_login');  
                }
            }
    });
//点击加入购物车
$('#gouwuche').bind('click',function(){
    var is_success=true;
        if($('input[name=server_day]').val()==''){
            $('#buy').css('display','none');
            $('#buy_clone').css('display','block');
        }else{
            is_login=check_login();
            if(is_login!=0){
                 var server_day=$('input[name=server_day]').val();
                    var url='/Home/Goods/cart_join.html';
                    var data={
                        server_day:server_day,
                        goods_id:$('input[name=goods_id]').val(),
                        check:"cart_join"
                    };
                    $.ajax({
                        type:'post',
                        async : false,
                        url:url,
                        data:data,
                        datatype:'json',
                        success:function(msg){
                            if(msg=='9'){
                                is_success=false;
                                alert('该商品的该日期你已经加入购物车，请重新选择日期');                                
                            }
                            if(msg=='-1'){
                                is_success=false;
                                alert('加入购物车失败，请重新加入');                                
                            }
                        }
                    });
                    if(is_success){
                        showOverlay('gouwuche_join');  
                    }
                }else{ 
                    showOverlay('mini_login');  
                }
            }
    });
    
    //点击商店介绍的更多
    $('.jianjie_more').bind('click',function(){
        $('.jianjie_more_div').css('display','block');
    });
    $('.jianjie_more_div .mini_close').bind('click',function(){
        $('.jianjie_more_div').css('display','none');
    });
    
    //日历js的主函数，循环填写每天的日期
    function drawCld(SY, SM) {
        var buy_server_day=new Array();
        var x=0;
        <?php if(is_array($buy_server_day)): $i = 0; $__LIST__ = $buy_server_day;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>buy_server_day[x]=<?php echo ($vo); ?>;
            x++;<?php endforeach; endif; else: echo "" ;endif; ?>
    var jinri=addZ(today.getFullYear())+addZ(today.getMonth()+1)+addZ(today.getDate());
    var i,sD,s,size;
    cld = new calendar(SY, SM);


    $("#GZ")[0].innerHTML = '  农历' + cyclical(SY - 1900 + 36) + '年&nbsp;【' + Animals[(SY - 4) % 12] + '年】';

    for (i = 0; i < 42; i++) {
        sObj = $("#SD" + i)[0];

        lObj = $("#LD" + i)[0];

        sObj.className = '';

        sD = i - cld.firstWeek;

        if (sD > -1 && sD < cld.length) {  //日期内
            sObj.innerHTML = sD + 1;
            //wly 注册点击事件
						$("#GD" + i).unbind('click').click(function(){mOck(this,sD + 1);});
						var nowDays = SY+''+addZ((SM+1))+addZ((sD+1));
                                                //如果是过去的日期，显示灰色 并且取消点击事件，并加入点击事件，弹出对话框提示
                                                if(jinri>nowDays){
                                                    $("#GD" + i).addClass("unover");
                                                    $("#GD" + i).unbind('click').click(function(){
                                                        alert('该日期已经过去，请选择今天以后的日期');
                                                        $('input[name=server_day]').val('');
                                                        $('td[class=selday]').attr('on','0');
                                                        $('td[class=selday]').removeClass('selday');
                                                    });
                                                }
                                                var y=0;
                                                for(y in buy_server_day){
                                                        if(nowDays==buy_server_day[y]){
                                                        $("#GD" + i).addClass("unover");
                                                        $("#GD" + i).unbind('click').click(function(){
                                                            alert('商品的该日期已被购买，请选择其它商品');
                                                            $('input[name=server_day]').val('');
                                                            $('td[class=selday]').attr('on','0');
                                                            $('td[class=selday]').removeClass('selday');
                                                        });
                                                    }
                                               }
                                                
						var hstr = hDays.join();
						if(hstr.indexOf(nowDays)>-1){
							 $("#GD" + i).addClass("selday");
							}
            if (cld[sD].isToday)  $("#GD" + i).addClass("jinri");  //今日颜色

            sObj.style.color = cld[sD].color;  //国定假日颜色

            if (cld[sD].lDay == 1)  //显示农历月
                lObj.innerHTML = '<b>' + (cld[sD].isLeap ? '闰' : '') + cld[sD].lMonth + '月' + (monthDays(cld[sD].lYear, cld[sD].lMonth) == 29 ? '小' : '大') + '</b>';
            else  //显示农历日
                lObj.innerHTML = cDay(cld[sD].lDay);

            s = cld[sD].lunarFestival;
            if (s.length > 0) {  //农历节日
                if (s.length > 8)  s = s.substr(0, 5) + '...';
                s = s.fontcolor('red');
            }
            else {  //国历节日
                s = cld[sD].solarFestival;
                if (s.length > 0) {
                    if (s.length > 8)  s = s.substr(0, 5) + '...';
                    s = (s == '黑色星期五') ? s.fontcolor('black') : s.fontcolor('#0066FF');
                }
                else {  //廿四节气
                    s = cld[sD].solarTerms;
                    if (s.length > 0)  s = s.fontcolor('limegreen');
                }
            }
            if (cld[sD].solarTerms == '清明') s = '清明节'.fontcolor('red');
            if (cld[sD].solarTerms == '芒种') s = '芒种'.fontcolor('red');
            if (cld[sD].solarTerms == '夏至') s = '夏至'.fontcolor('red');
            if (cld[sD].solarTerms == '冬至') s = '冬至'.fontcolor('red');

            if (s.length > 0)  lObj.innerHTML = s;

        }
        else {  //非日期
            $("#GD" + i).addClass("unover");

        }
    }
}


//点击加入收藏
$('#shoucang').bind('click',function(){
    var is_success=false;
        if($('input[name=server_day]').val()===''){
            $('#buy').css('display','none');
            $('#buy_clone').css('display','block');
        }else{
            is_login=check_login();
            if(is_login!=0){
                var server_day=$('input[name=server_day]').val();
                var url='/Home/Goods/sellection_join.html';
                var data={
                    server_day:server_day,
                    goods_id:$('input[name=goods_id]').val(),
                    check:"sellection_join"
                };
                $.ajax({
                    type:'post',
                    async : false,
                    url:url,
                    data:data,
                    datatype:'json',
                    success:function(msg){
                        if(msg=='-1'){
                            alert('加入收藏失败，请重新加入');                                
                        }
                        if(msg=='1'){
                            is_success=true;                               
                        }
                    }
                });
                if(is_success){
                    $('#shoucang').replaceWith('<span  class="shoucang">已收藏（<strong><?php echo ($sellection_count+1); ?></strong>）</span>');
                    showOverlay('shoucang_join');  
                }
            }else{
                showOverlay('mini_login');  
            }
        }    
    });
    
    //点击分享按钮
    $('#fenxiang').bind('click',function(){
    if($('#fenxiang_tanchu_div').css('display')==='none'){
        //给分享到微博等的a添加url
        var self_url_escape=escape(window.location.href);
        var title_escape=escape('一起网:www.17each.com '+" [<?php echo ($goods['cat_name']); ?>]<?php echo ($goods['goods_name']); ?>");
        var weibo_url="http://v.t.sina.com.cn/share/share.php?appkey=579809138&amp;url="+self_url_escape+";title="+title_escape;
        //$('#weibo_a').attr('href',weibo_url);
        $('#fenxiang_tanchu_div').css('display','block');
    }else{
        $('#fenxiang_tanchu_div').css('display','none');
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