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
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/release_goods.css">
<script src="/Public/Common/Js/jquery.min.js"></script>
<script src="/Public/Common/Js/jquery.form.js"></script> 
<script src="/Public/Common/Js/function.js"></script>
<script src="/Public/Common/Js/kindeditor/kindeditor.js"></script>
<script src="/Public/Common/Js/kindeditor/lang/zh_CN.js"></script>
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
        <div class="div1">
            商品编辑：
        </div>
      
        <form name="sv_cont" method="post" action="<?php echo U('Member/goods_editor',"goods_id=$goods_id");?>" >
            <div class="tr">
                <div class="tr_td1">服务类型</div>
                <select name="server_content" class="tr_td2 release_select" >
                    <?php if(is_array($arr_sc)): $i = 0; $__LIST__ = $arr_sc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo); ?>" <?php echo ($$vo); ?>> <?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <span id="span_select"></span>
            </div>
            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
            <input name="sc_hidden" value="server_content" type="hidden"/>    
        </form>
        
        
        
        <form name="release_goods" method="post" enctype="multipart/form-data" action="<?php echo U('Member/bianji_check',"goods_id=$goods_id");?>" onsubmit="editor.sync()">
            <input name="server_content" value="<?php echo ($server_content); ?>" type="hidden"/> 
            <input name="goods_img" value="" type="hidden"/> 
            <div class="tr">
                <div class="tr_td1">商品标题</div>
                <input name="title" type="text" class="text" value="<?php echo ($goods['goods_name']); ?>"  />
                <span id="info_title"></span>
            </div>
            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
        
        <div  class="tr" id="insert_img">
                <div class="tr_td1" style="height: 35px;line-height: 35px;">展示图<i style="margin-left: 3px;">(<i id="img_count">0</i>/4)</i></div>
                <div class="div_goods_img"><img src="" class="empty_img" /><img class="goods_img" src="<?php echo ($goods['goods_img']); ?>" /><a title="删除"></a></div>
                <?php if(is_array($goods['goods_img_qita'])): $i = 0; $__LIST__ = $goods['goods_img_qita'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="div_goods_img"><img src="" class="empty_img" /><img class="goods_img" src="<?php echo ($vo); ?>" /><a title="删除"></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="file_jia" id="file_jia">+</div>                
                <span id="span_touxiang"></span>
                <span class="file_tishi">(请上传3：2的图片，最高5M)</span>
            </div>

            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
            





            <div class="tr" style="<?php echo ($css); ?>">
                <div class="tr_td1">性别</div>
                <div class="tr_td2">
                    <input name="radio_sex" type="radio" class="radio" value="0" <?php echo ($man); ?> />男
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="radio_sex" type="radio" class="radio" value="1" <?php echo ($woman); ?> />女
                </div>
            </div><!--第二行-->
            <div style="width:400px;height:0px;border-top:1px dashed #666;<?php echo ($css); ?>"></div>
            
            
            <div class="tr">
                <div class="tr_td1">价格</div>
                <input name="price" type="text" class="text price_text" value="<?php echo (intval($goods['price'])); ?>"  />
                <span style="font-size: 14px;">元</span>
                <span id="info_price"></span>
            </div>
            <div class="tr">
                <div class="tr_td1">原价</div>
                <input name="yuan_price" type="text" class="text price_text" value="<?php echo (intval($goods['yuan_price'])); ?>"  />
                <span style="font-size: 14px;">元</span>
                <span id="info_yuan_price"></span>
            </div>
            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
            
            <?php if(is_array($arr_shuxing)): $i = 0; $__LIST__ = $arr_shuxing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="tr">
                <div class="tr_td1"><?php echo ($key); ?></div>
                <select name="shuxing[]" class="tr_td2 release_select" >
                    <?php if(is_array($vo)): foreach($vo as $k=>$value): ?><option value="<?php echo ($value); ?>" <?php if(is_numeric($value)){$a=$key.$value;echo $$a;}else{echo $$value;} ?> > <?php echo ($value); ?></option><?php endforeach; endif; ?>
                </select>
                <span id="span_select"></span>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
            <div class="tr">
                <div class="tr_td1">参加代金券</div>
                <div class="tr_td2">
                    <input name="radio_daijinquan" type="radio" class="radio" value="1" checked="checked" id="daijinquan_y" />是
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="radio_daijinquan" type="radio" class="radio" value="0" id="daijinquan_n" />否
                    <a href="javascript:void(0)" id="daijinquan_help" style="margin-left: 30px;border: 1px solid #888;padding:1px 5px;font-size: 12px;position: relative;bottom:2px;">查看详情</a>
                </div>
            </div>
            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
            <div class="tr">
                <div class="tr_td1">参加返现</div>
                    <select name="select_fanxian" class="tr_td2 release_select" >
                        <option value="0" >不参加</option>
                        <option value="10" >10%</option>
                        <option value="20" >20%</option>
                        <option value="30" >30%</option>
                        <option value="40" >40%</option>
                    </select>
                    <a href="javascript:void(0)" id="fanxian_help" style="margin-left: 30px;border: 1px solid #888;padding:1px 5px;font-size: 12px;position: relative;bottom:2px;">查看详情</a>
            </div>
            <div style="width:400px;height:0px;border-top:1px dashed #666;"></div>
            
            <div class="tr">
                <div class="tr_td1">商品描述</div>
            </div>
            <div class="tr">
                <textarea id="content" name="content" style="width:90%;height:300px;visibility:hidden;">
                    <?php echo ($goods['goods_desc']); ?>
                </textarea>
            </div>
            
            
            <a href="javascript:void(0)" id="xiayibu" class="xyb">立刻发布</a>
        </form>
    </div>
    
<form id = "form_file_jia" enctype="multipart/form-data" action="<?php echo U('Member/file_jia');?>" method="post">   
        <input name="file_img" type="file"  style="visibility:hidden; width:0px; height: 0px;"/>
</form>    

<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('index/menu');?>"></iframe>
<script src="/Public/Home/Js/goods_editor.js" type="text/javascript"></script>
<script  type="text/javascript">
    if("<?php echo ($goods['daijinquan']); ?>"==='0'){
        $('#daijinquan_y').attr('checked','');
        $('#daijinquan_n').attr('checked','checked');
    }
    $('option[value="<?php echo ($goods['fanxian']); ?>"]').attr('selected','selected');
    var goods_img="<?php echo ($goods['goods_img']); ?>";
    $('#img_count').html($('.goods_img').length);
    <?php if(is_array($goods['goods_img_qita'])): $i = 0; $__LIST__ = $goods['goods_img_qita'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>if(goods_img===''){
        goods_img+="<?php echo ($vo); ?>";
        }else{
            goods_img+='+img+'+"<?php echo ($vo); ?>";
        }<?php endforeach; endif; else: echo "" ;endif; ?>
    $('input[name=goods_img]').attr('value',goods_img);
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