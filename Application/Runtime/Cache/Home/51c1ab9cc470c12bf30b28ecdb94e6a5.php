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


 
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/index.css">
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
</script>


<div style="width:1158px;margin: 0px auto;border: 1px solid #999;padding: 10px 20px;">
    一起网婚礼人服务协议

    本协议由同意并承诺遵守本协议规定使用一起网服务的法律实体（下称“婚礼人”或“甲方”）、一起网（下称“乙方”）共同缔结，本协议具有合同效力。    

  一． 协议内容及生效： 
（一）本协议内容包括协议正文及所有一起网已经发布的或将来可能发布的各类规则。所有规则为协议不可分割的一部分，与协议正文具有同等法律效力。一起网未来有可能制定特别规则（下称“特别规则”），如特别规则与一起网其他规则存在冲突，则以特别规则为准。 
 （二）婚礼人在使用一起网提供的各项服务的同时，承诺接受并遵守各项相关规则的规定。一起网有权根据需要不时地制定、修改本协议或各类规则，如本协议有任何变更，一起网将在网站上以公示形式通知予婚礼人。如婚礼人不同意相关变更，必须立即以书面通知的方式终止本协议。任何修订和新规则一经在一起网公布即自动生效，成为本协议的一部分。登录或继续使用服务将表示婚礼人接受经修订的协议。除另行明确声明外，任何使服务范围扩大或功能增强的新内容均受本协议约束。
（三）婚礼人签署或在线接受本协议，本协议立即生效。本协议不涉及婚礼人与一起网其它用户之间因网上交易而产生的法律关系及法律纠纷。    

二． 定义：   “一起网”：指由一起提供技术支持和服务的电子商务平台网站，网址为www.17each.com。   
              “一起网上交易平台”：指一起网上供用户发布或查询商品信息，进行信息交流，达成交易意向及向用户提供其他与交易有关的辅助信息服务的空间。
              “婚礼人注册”：指婚礼人登陆一起网，按要求填写相关信息、在线接受并同意履行本协议以最终激活其一起网服务帐户的过程。   
             “一起网服务帐户”：即婚礼人完成婚礼人注册流程而获得的其将在使用服务的过程中必须与自设的帐户密码共同使用的用户名，婚礼人应妥善保管其一起网服务帐户及密码信息，婚礼人不得以任何形式擅自转让或授权他人使用自己的一起网服务帐户；
            “服务”：是指由乙方在一起网平台向婚礼人提供的互联网信息发布、商业推广及与此有关的互联网技术服务。具体服务内容如下：   1. 网络信息服务：指婚礼人根据本协议的规定利用一起网上交易平台查询商品信息、发布商品信息、作为卖方与其它用户订立商品买卖合同、评价其它用户的信用、参加一起网的有关活动以及其他由一起网同意提供的信息服务；  2．一起网平台活动推荐位服务：指一起网平台举办的商业推广活动页面中的推荐位展示服务；3．其他服务：包括但不限于市场调研、商业推广、广告等服务。 一起网保留在任何时候自行决定对服务及其相关功能、应用软件变更、升级的权利。一起网进一步保留在服务中开发新的模块、功能和软件或其它语种服务的权利。上述所有新的模块、功能、软件服务的提供，除非一起网另有说明，否则仍适用本协议。服务随时可能因一起网的单方判断而被增加或修改，或因定期、不定期的维护而暂缓提供，婚礼人将会得到相应的变更通知。婚礼人在此同意一起网在任何情况下都无需向其或第三方在使用服务时对其在传输或联络中的迟延、不准确、错误或疏漏及因此而致使的损害负责。   
     “支付服务”：由一起网向婚礼人提供的代收代付货款的中介服务。 婚礼人可随时对其账户中可提现余额进行提现，一起网将及时予以通过提现申请。如果婚礼人在服务过程中涉及到违法、违规，一起网有权从婚礼人账户中扣除相应的赔付金额。婚礼人在一起网的账户余额，如果是由于个人或者其他原因导致资金损失，一起网不付责任。
三、证明文件提交：   
   （一）证明文件提交：婚礼人欲使用本协议下服务，必须向一起网提交其在申请服务时提供信息的相关证明。具体证明信息内容如下：  1. 营业执照副本扫描件或婚礼人身份证正面扫描件； 2.其他一起网认为需查验的信息。  
   （二）信息变更的通知：协议期内，上述信息（包括相关证明文件）的任何变更婚礼人都应及时通知一起网，如上述信息变更后使得婚礼人不再具备履行本协议的情形出现时，一起网有权立即终止或中止本协议。   
   （三）责任条款：婚礼人同意为其未及时的通知或更新其信息承担全部责任，婚礼人保证其向一起网提供的全部证明文件真实、准确且不存在超过时效问题（即保证所有证明文件在整个合同履行期间都处于有效期内）如因上述原因发生纠纷或被相关国家主管机关处罚，婚礼人应当独立承担全部责任，如给一起网造成损失的，婚礼人同意赔偿其全部损失。  


四、婚礼人的声明与保证   
   （一）其符合婚礼人的申请条件，且向一起网提供真实、合法、准确、有效的注册资料，并保证其诸如电子邮件地址、联系电话、联系地址、邮政编码等内容的有效性及安全性，保证一起网及其他用户可以通过上述联系方式与自己进行联系。同时，婚礼人也有义务在相关资料实际变更时及时更新有关注册资料。婚礼人保证不以他人资料在一起网进行注册。 
  （二）其承诺遵守本协议以及所有公示于一起网的规则和流程。 
  （三）其有合法的权利缔结本协议，使用服务。 
  （四）其发布于一起网的所有信息真实、准确，符合相关法律法规及一起网的规则。 
  （五）其对其发布于一起网的交易信息中所涉商品有合法的销售权。 
  （六）其将按照不低于《中华人民共和国消费者权益保护法》及其他法规、部门规章和国家强制性标准规定的要求。  
  （七）其在一起网出售商品，有义务按照买家实际支付的现金金额为买家开具发票，相关税收应按国家相关规定由婚礼人自行承担。
  （八）其保证在使用服务进行交易的过程中遵守诚实信用的原则，不在交易过程中采取不正当竞争行为，不扰乱网上交易的正常秩序，不从事与网上交易无关的行为。  
  （九）其保证在使用服务时实施的所有行为均遵守国家法律、法规和一起网的相关规定以及各种社会公共利益或公共道德。如有违反导致任何法律后果的发生，婚礼人将以自己的名义独立承担所有相应的法律责任；  
 （十）其同意不对一起网上任何数据作商业性利用，包括但不限于在未经一起网事先书面批准的情况下，以复制、传播或向他方披露等方式使用在一起网上其他用户展示的任何资料；   （十一）其承诺拥有合法的权利和资格向一起网上传有关商品销售信息并进行销售，且前述行为未对任何第三方合法权益，包括但不限于第三方知识产权、物权等构成侵害，如因其行为导致一起遭受任何第三方提起的索赔，诉讼或行政责任，其将承担相应责任并使一起网免责。

</div>
<iframe height="1" frameborder="0" width="1" style="position:absolute;top:0;left:-9999px;" src="<?php echo U('Index/menu');?>"></iframe>





<div class="footer"><!--//网页脚部-->
<div class="footer_content"><!--//网页脚部内容-->
<div class="site-info"><!--//网页脚部信息--><h3>关注我们</h3>
<ul><li><a href="#">一起网微信</a></li><li><a href="#">一起网APP</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>公司信息</h3>
<ul><li><a href="company/about_company.php">关于一起网</a></li><li><a href="#">一起网承诺</a></li><li><a href="#">用户协议</a></li><li><a target="blank" href="<?php echo U('Company/hunliren_protocol');?>">商家协议</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>合作联系</h3>
<ul><li><a href="#">联系我们</a></li><li><a href="#">加入我们</a></li></ul>
</div><!--//网页脚部信息-->
<div class="site-info"><!--//网页脚部信息-->
<h3>用户帮助</h3>
<ul><li><a href="#">一起网流程</a></li><li><a href="#">申请退款</a></li><li><a href="#">常见问题</a></li></ul>
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