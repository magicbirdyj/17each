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


 

<link rel="stylesheet" type="text/css" href="/Public/Home/Css/zhuce.css">
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
</head>

<body>
<div class="zhuce_top">
<a href="<?php echo U('Index/index');?>"><img src="/Public/Home/Images/menu_and_foot/logo.png"/></a>
<span class="zhuce_top_spanl">账户注册</span>
<div class="zhuce_top_r">
<div class="zhuce_top_divr">已有婚啦啦账号？</div>
<a  class="a_dl" href="<?php echo U('Login/index');?>">登录</a>
</div>
</div>
<div class="zhuce_head">
<div>欢迎注册:</div>
<ul>
<li><span class="zhuce_head_self">设置登录名</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span>填写账户信息</span></li>
<li><span class="zhuce_head_jt1">&gt;&gt;</span></li>
<li><span>注册完成</span></li>
</ul>
</div>
<hr class="zhuce_hr" />
<div class="zhuce1_div_form">
    <form name="zhuce"  method="post" action="<?php echo U('zhuce/zhuce2');?>" id="form1" >
        <input type="hidden" name="hidden" value="<?php echo ($time); ?>" />
<div class="zhuce1_box">
<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">手机号码</div>
<input type="text" name="shoujihao" class="zhuce1_tr_td2" />
<span id="infor_shoujihao"></span>
</div><!--第一行-->

<div class="zhuce1_tr">
<div class="zhuce1_tr_td1">验证码</div>
<input type="text" name="yanzhengma" class="zhuce1_tr_td2"/>
<span id="infor_yanzhengma"><?php echo ($infor_yanzhengma); ?></span>
</div><!--第二行-->
<img class="zhuce1_yanzhengma" src="/Home/Zhuce/getCode" /><span>看不清？点击图片</span>
<a href="#" id="zhuce1_xiayibu" class="a_xyb">下一步</a>
</div>

</form>
</div>
<div class="zcxy" id="zcxy">
<h2>注册协议</h2>
<p>&nbsp;&nbsp;&nbsp;&nbsp;一起网是由湖南婚云网络科技有限公司独立开发、运营的第三方电子商务平台。本协议适用于一起网的用户（以下简称"用户"、"您"），若您使用一起网（包括但不限于以任何形式接通、进入、浏览一起网，或者使用一起网的各项服务、功能等），您的使用行为将被视为对本用户协议全部内容的知晓、认可与同意遵守。</p>
<h3>一、接受条款</h3>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;以任何方式进入一起网即表示您已充分阅读、理解并同意自己已经与一起网订立本协议，且您将受本协议的条款和条件(“条款”)约束。一起网保留随时自行全权决定更改“条款”的权力。如“条款”有任何变更，一起网将在其网站上刊载公告，通知予您。如您不同意相关变更，必须停止使用一起网。经修订的“条款”一经在一起网网站的公布后，立即自动生效。一旦您继续使用一起网，则表示您已接受经修订的“条款”，当您与一起网发生争议时，应以最新的服务协议为准。
<br />&nbsp;&nbsp;&nbsp;&nbsp;本服务协议内容包括协议正文及所有一起网已经发布或将发布的各类规则。所有规则为协议不可分割的一部分，与协议正文具有同等法律效力。</p>
<h3>二、会员用户</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1、一起网的用户是能够承担法律责任的自然人、法人及其他组织。若您不具备此资格，请不要使用一起网。
<br />&nbsp;&nbsp;&nbsp;&nbsp;2、一起网禁止被一起网永久取消用户资格的自然人、法人及其他组织再次使用一起网。
<br />&nbsp;&nbsp;&nbsp;&nbsp;3、一起网可随时自行全权决定禁止任何人士使用一起网。</p>
<h3>三、注册条款</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1、若您在使用一起网的过程中注册成为会员，您必须根据一起网的要求，提供真实、准确、即时、完整的个人信息，包括但不限于您的姓名或名称、联系地址、联系电话、电子邮箱地址；维护并及时更新个人信息以保持其真实、准确、即时、完整。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2、如您代表其他自然人、法人及其他组织在一起网上注册会员，则您声明并保证，您已获得授权并有权使前述法律主体受本协议的约束。</p>
<h3>四、使用条款</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1、您在使用一起网时，须保证遵守国家的法律法规和规章制度，遵守一起网的有关协议、规定、规则、程序和惯例，不得利用一起网从事任何非法活动。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2、注册过程中，您可自主选择一个登录名和密码。注册成功后，您有权使用该登录名及密码随时登陆一起网。您应妥善保管您在一起网的登录名和密码，并对通过该帐号进行的所有行为负责：<br />
&nbsp;&nbsp;&nbsp;&nbsp;•因为您的不慎，泄露了登录名和密码，有可能导致您的权利受损，一起网对此不承担责任；<br />
&nbsp;&nbsp;&nbsp;&nbsp;•您应确保每次使用一起网后正确地离开该站点；<br />
&nbsp;&nbsp;&nbsp;&nbsp;•一起网禁止任何未经许可的帐号出售或授权使用。您同意在发现上述行为时立即通知一起网。<br />
&nbsp;&nbsp;&nbsp;&nbsp;3、为保护您的合法利益，在您需要更改重要注册信息，应向一起网提供有效的证明文件，经一起网相关客服人员审核之后方可修改。<br />
&nbsp;&nbsp;&nbsp;&nbsp;4、您对通过一起网发布的所有信息（内容包括但不限于个人信息、商业信息，形式包括但不限于文字、图片、视频）的真实性、准确性、即时性、完整性和合法性独立承担所有责任。<br />
&nbsp;&nbsp;&nbsp;&nbsp;5、任何一起网的通知都将以电子邮件形式，向您的电子邮箱地址发送（您同意，如您修改原注册时提交的电子邮箱地址、并通过一起网审核的，以新电子邮箱地址为准）。该电子邮件进入前述电子邮箱接收系统时，视为送达。<br />
&nbsp;&nbsp;&nbsp;&nbsp;6、以下信息在一起网上禁止发布：<br />
&nbsp;&nbsp;&nbsp;&nbsp;•有关政治、宗教、种族或性别等的贬损言辞，或含淫秽、色情、侮辱、诽谤等内容的信息；<br />
&nbsp;&nbsp;&nbsp;&nbsp;•侵犯任何第三方著作权、专利、商标、商业秘密、隐私权、名誉权或其它权利的信息；<br />
&nbsp;&nbsp;&nbsp;&nbsp;•各类国家明令禁止交易的产品信息，具体可参考《禁止发布的关键词列表》；<br />
&nbsp;&nbsp;&nbsp;&nbsp;•一起网认为应该禁止或者不适合在一起网上发布、交易的产品信息；<br />
&nbsp;&nbsp;&nbsp;&nbsp;•其它任何违反国家法律法规、规章制度等的信息。<br />
&nbsp;&nbsp;&nbsp;&nbsp;具体可咨询网站相关客服人员。<br />
&nbsp;&nbsp;&nbsp;&nbsp;7、一起网有权审核、发布或删除会员提交的信息。一起网将尽力核查会员提交的信息，但并不能完全保证信息的真实性、准确性和合法性，同时也不承担由此引至的任何法律责任。<br />
&nbsp;&nbsp;&nbsp;&nbsp;8、一起网含有与其他网站的链接。一起网并不能控制这些网站及其所提供的资源，所以对链接网站上的内容、广告、服务、产品信息的真实、准确、即时、完整性不做任何承诺，并且对链接网站不承担任何法律责任。<br />
&nbsp;&nbsp;&nbsp;&nbsp;9、对于您选择并张贴在一起网中可公开获取区域的公司、产品或其他信息（包括但不限于文字、图片、视频），您同意一起网在全世界范围内具有免费的、永久的、不可撤销的、非独家的和完全的许可和再许可的权利，以使用、复制、修改、改编、出版、翻译、据以创作衍生作品，传播、表演和展示前述内容（整体或部分），和/或将前述内容编入其他任何形式的作品、媒体、或技术中，不论是当前已知的或以后开发的。同时，您同意一起网在未改变您提供信息的实质内容的情况下免于承担因该信息引起的任何法律责任。<br />
</p>
<h3>五、信息收集</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;当您在一起网注册成为会员时，一起网需要收集您的姓名、电子邮箱（Email）地址等信息。当您浏览一起网时，服务器会自动收集您的IP地址及浏览页面等信息。同时，一起网收集中国供应商及其产品信息、全球采购商的需求信息，构建其数据库系统。<br />
&nbsp;&nbsp;&nbsp;&nbsp;除非用户许可或法律需要，一起网不会泄露与某一用户直接相关的上述信息。<br />
</p>
<h3>六、费用</h3>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;注册免费会员及使用相应服务是免费的；选择其他收费服务，具体费用标准请参看一起网上公布的相应说明或者直接向一起网相关工作人员咨询。一起网保留修改费用条款的权利，一旦费用条款被修改，将立即在一起网上公布。<br />
&nbsp;&nbsp;&nbsp;&nbsp;请注意：<br />
&nbsp;&nbsp;&nbsp;&nbsp;•一起网不负责对您因使用一起网的服务而需支付的软硬件、税收、通讯、网络服务费及其它费用。<br />
&nbsp;&nbsp;&nbsp;&nbsp;•一起网有权在未经通知的情况下随时改变或不继续提供某些或全部服务（暂时性的或永久的）。<br />
&nbsp;&nbsp;&nbsp;&nbsp;<br />
</p>
<h3>七、纠纷、争议及投诉处理</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1、用户同意在使用一起网的过程中，当发现任何可能侵害自己或一起网权利的事实时，应及时通知一起网并提供相应的证明材料。因投诉不实给一起网或第三方造成损失的，用户应承担法律责任。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2、一起网有权接受并处理您与其他用户间因使用一起网而产生的纠纷、争议及投诉，有权通过电子邮件等联系方式向您了解情况、并将所了解的情况通过电子邮件等方式通知对方。您有义务在收到一起网通知后、在指定的时间内提供相应的资料，配合纠纷、争议及投诉的情况了解与处理，否则，一起网有权单方面独立判断其他用户对您的投诉及（或）偿付要求是否成立，做出对您不利的处理结果。若一起网判断用户的偿付要求成立，则您应及时进行偿付，同时，一起网有权立即中止或终止您的相关一起网服务或者拒绝您以任何形式使用一起网、向权利人提供您必要的身份信息。一起网不对因此给您造成的服务减少等承担任何责任。<br />
&nbsp;&nbsp;&nbsp;&nbsp;3、因一起网并非司法机关等国家权利机关，您完全理解并承认：一起网对证据的鉴别能力及对纠纷的处理能力有限，受理、处理纠纷、争议及投诉完全是基于您的授权，不保证处理结果符合您的期望，亦不对处理结果承担任何责任。一起网有权决定是否参与争议的处理。<br />
&nbsp;&nbsp;&nbsp;&nbsp;4、经生效法律文书确认用户存在违法或违反本协议行为或者一起网自行判断会员涉嫌存在违法或违反本协议行为的，一起网有权公布用户的违法行为并做出相应处理，包括但不限于终止服务、永久禁止使用一起网等。<br />
</p>
<h3>八、中止与终止</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;对于用户的以下行为，一起网有权在告知或未告知的情况下中止或终止其相关服务或者拒绝其以任何形式使用一起网，且不对因此给您造成的服务减少等承担任何责任，并保留追究您法律责任的权利：<br />
&nbsp;&nbsp;&nbsp;&nbsp;1、会员的营业执照等证照信息与个人信息不一致时，未及时更新个人信息，或实际经营信息与证照信息不一致时，未及时更新证照信息；<br />
&nbsp;&nbsp;&nbsp;&nbsp;2、利用一起网滥发重复信息，发布国家法律法规等禁止或限制发布的信息，发布不属于会员经营范围的信息，或与一起网服务无关的信息；<br />
&nbsp;&nbsp;&nbsp;&nbsp;3、未经请求或授权向一起网会员发送大量与业务不相关的信息；<br />
&nbsp;&nbsp;&nbsp;&nbsp;4、冒用其他企业的名义发布商业信息，进行商业活动；<br />
&nbsp;&nbsp;&nbsp;&nbsp;5、计划破坏、攻击一起网网站电脑系统、网络的完整性，或者试图擅自进入一起网网站电脑系统、网络；<br />
&nbsp;&nbsp;&nbsp;&nbsp;6、使用或提供含有毁坏、干扰、截取或侵占任何系统、数据或个人资料的任何电脑病毒、伪装破坏程序、电脑蠕虫、定时程序炸弹或其他破坏性程序；<br />
&nbsp;&nbsp;&nbsp;&nbsp;7、盗用他人在一起网上的登录名和/或密码；<br />
&nbsp;&nbsp;&nbsp;&nbsp;8、未经一起网同意的帐号出售或授权使用行为；<br />
&nbsp;&nbsp;&nbsp;&nbsp;9、通过或从事涉及一起网的欺诈活动；<br />
&nbsp;&nbsp;&nbsp;&nbsp;10、通过或从事涉及一起网的知识产权侵权行为；<br />
&nbsp;&nbsp;&nbsp;&nbsp;11、违反国家法律法规、规章制度、一起网有关协议、规定、规则、程序和惯例的其他行为。<br />
&nbsp;&nbsp;&nbsp;&nbsp;12、发布商标或者专利涉及侵权的产品。<br />
&nbsp;&nbsp;&nbsp;&nbsp;13、发布网监局禁止发布的产品或信息。<br /></p>
<h3>九、责任声明</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1、一起网仅作为客户寻找交易对象，就货物和服务的交易进行协商，以及获取各类与贸易相关的服务的平台。但是，一起网不能控制交易所涉及的物品的质量、安全或合法性，商贸信息的真实性或准确性，以及交易方履行其在贸易协议项下的各项义务的能力。一起网不能也不会控制交易各方能否履行协议义务。此外，您应注意到，与外国国民、未成年人或以欺诈手段行事的人进行交易的风险是客观存在的。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2、一起网不保证网站是不受干扰的、没有故障的，也不对使用效果做任何保证。一起网不对因人为或非人为因素造成的用户与一起网服务器之间的连接受阻而无法访问负责。您同意独立承担因网站意外中断、操作或传输的迟延、电脑病毒、网络连接故障、未经授权的进入等引起的损失。<br />
&nbsp;&nbsp;&nbsp;&nbsp;3、一起网将尽最大努力来减少错误，但网站上提供的服务和信息仍可能包含错误内容，一起网对用户因使用一起网而造成的损失不负法律责任。一起网对其服务和信息不作保证，不论什么情况下对用户因使用一起网而造成的直接、间接、偶尔的、特殊的、惩罚性的损害或其他一切损害不负法律责任，即便事先被告知损害存在的可能性也是如此。若您对一起网提供的部分或所有服务不满，您唯一的补救措施是停止使用这些服务。<br />
&nbsp;&nbsp;&nbsp;&nbsp;4、对由于用户在使用一起网的过程中，违反本协议或通过提及而纳入本协议的条款和规则或用户违反任何法律或第三方的权利而产生或引起的每一种类和性质的任何索赔、要求、诉讼、损失和损害（实际、特别及后果性的）而言，无论是已知或未知的，包括合理的律师费，用户同意就此对浙江一起网洛科技有限公司、一起网、员工、所有者及代理人进行补偿并使其免受损害。<br />
&nbsp;&nbsp;&nbsp;&nbsp;5、用户自己承担因使用一起网而产生的风险。一起网对用户在一起网上公布的信息中查找到的内容不负责任，对信息的真实性、即时性、安全性和正确性也不作保证。一起网、员工、所有者及代理对用户使用一起网上公布的信息而造成的损失或伤害以及用户相信一起网上的公布的信息内容而做出的决定或采取的行动不负责任。一起网、员工、所有者及代理对用户使用或无法使用一起网的服务而造成的直接的、间接的、偶尔的、特殊的或其他损害不负法律责任，即便事先被告知损害存在的可能性也是如此。<br />
</p>
<h3>十、不可抗力</h3>
<p>对于因本公司合理控制范围以外的原因，包括但不限于自然灾害、罢工或骚乱、物质短缺或定量配给、暴动、战争行为、政府行为、通讯或其他设施故障或严重伤亡事故等，致使本公司延迟或未能履约的，一起网不对您承担任何责任。</p>
<h3>十一、知识产权</h3>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;1、一起网上所有内容的选材、整理、编排、排版、汇编，以及由一起网创作的文字、图片等作品的著作权，无论是否明示，均属一起网所有。任何自然人、法人及其他组织未经一起网书面授权或许可，不得修改、出版、传播、参与传播、销售、制作衍生作品，或以其他任何方式使用整体或部分的一起网上的内容，包括但不限于公司信息、产品信息，一起网将保留追究其法律责任的权利。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2、未经一起网授权，任何人不得使用一起网设计、使用、所有的商标，其它在一起网上出现的商标为它们各自的权利人所有。<br />
&nbsp;&nbsp;&nbsp;&nbsp;3、一起网对其开发或者合作开发的系统等享有知识产权。一起网的所有权利受法律保护。<br />
&nbsp;&nbsp;&nbsp;&nbsp;4、一起网上所有可阅读的资料等都受到《中华人民共和国著作权法》、《中华人民共和国商标法》等的法律保护。一起网尊重和保护他人的知识产权，不允许在没有著作权、商标权或其他专有权权利人明确许可的情况下，发布或者传播任何可能侵犯他人权利的信息、图片，否则，行为人承担由此产生的全部责任。<br />
</p>
<h3>十二、法律适用及管辖</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1、本协议的订立、变更、执行和解释，以及与本协议有关的争议解决，均应适用中华人民共和国法律。如与本协议有关的某一特定事项缺乏明确法律规定，则应参照通用的国际商业惯例和行业惯例。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2、如因本协议内容或其执行发生争议，双方应友好协商解决；协商不成时，任何一方均可向一起网所在地有管辖权的人民法院提起诉讼。<br />
</p>
<h3>十三、其他</h3>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;1、您使用一起网相关服务时，亦应知晓、认可并同意遵守相关服务的额外条款及条件。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2、如本协议中的任何条款无论因何种原因完全或部分无效或不具有执行力，本协议的其余条款仍应有效并且有约束力。<br />
&nbsp;&nbsp;&nbsp;&nbsp;3、本协议中的标题仅为方便而设，不具有任何法律效力。<br />
</p>
<a href="javascript:void(0)" class="tyxy" id="tyxy">同意协议</a>
</div>


<script src="/Public/Home/Js/zhuce1.js" type="text/javascript"></script>

</body>
</html>



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