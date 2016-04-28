<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css"/>
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/general.css" />
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/menu.css" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 


</head>
<body>
<div id="tabbar-div">
<p>
  <span class="tab-front" id="menu-tab">菜单</span>
</p>
</div>
<div id="main-div">
<div id="menu-list">
<ul id="menu-ul">
  <li class="explode" key="01_webinfor" name="menu">
      <a class="jibie_1">网站管理</a>        
      <ul>
          <li class="menu-item"><a href="<?php echo U('Webinfor/index');?>" target="main-frame">网站信息</a></li>
      </ul>
  </li>
  <li class="explode" key="02_guanggao" name="menu">
        <a class="jibie_1">广告管理</a>
        <ul>
            <li class="menu-item"><a href="<?php echo U('Advert/advert?id=1');?>" target="main-frame">轮播广告（上）</a></li>
            <li class="menu-item"><a href="<?php echo U('Advert/advert?id=2');?>" target="main-frame">轮播广告（下）</a></li>
            <li class="menu-item"><a href="<?php echo U('Advert/advert?id=3');?>" target="main-frame">首页右侧</a></li>
        </ul>
  </li>
  <li class="explode" key="06_stats" name="menu">
    <a class="jibie_1">属性管理</a>
    <ul>
            <li class="menu-item"><a href="<?php echo U('Category/manger');?>" target="main-frame">分类属性管理</a></li>
        </ul>
      </li>
  <li class="explode" key="07_content" name="menu">
        <a class="jibie_1">广告位橱窗管理</a>
        <ul>
            <li class="menu-item"><a href="<?php echo U('Shopmanage/fenleiyemian');?>" target="main-frame">分类页面橱窗</a></li>
            <li class="menu-item"><a href="<?php echo U('Shopmanage/shangpinyemian');?>" target="main-frame">商品页面橱窗</a></li>
        </ul>
      </li>
  <li class="explode" key="08_withdraw" name="menu">
        <a class="jibie_1">提现管理</a>
        <ul>
            <li class="menu-item"><a href="<?php echo U('Withdraw/index');?>" target="main-frame">提现列表</a></li>
        </ul>
      </li>
  <li class="explode" key="combo" name="menu">
        <a class="jibie_1">懒人婚礼</a>
        <ul>
            <li class="menu-item"><a href="<?php echo U('Advert/lanrenhunli');?>" target="main-frame">懒人婚礼</a></li>
        </ul>
      </li>
  <li class="explode" key="10_members" name="menu">
    <a class="jibie_1">活动介绍</a>
    <ul>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=代金券规则');?>" target="main-frame">代金券规则</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=返现规则');?>" target="main-frame">返现规则</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=双倍赔付规则');?>" target="main-frame">双倍赔付规则</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=随时退规则');?>" target="main-frame">随时退规则</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=保证金规则');?>" target="main-frame">保证金规则</a></li>
    </ul>
      </li>
  <li class="explode" key="12_template" name="menu">
    <a class="jibie_1">公司信息</a>
    <ul>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=关于一起网');?>" target="main-frame">关于一起网</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=一起网承诺');?>" target="main-frame">一起网承诺</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=用户协议');?>" target="main-frame">用户协议</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=商家协议');?>" target="main-frame">商家协议</a></li>
    </ul>
      </li>
  <li class="explode" key="13_backup" name="menu">
    <a class="jibie_1">关于我们</a>
    <ul>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=一起网微信');?>" target="main-frame">一起网微信</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=一起网APP');?>" target="main-frame">一起网APP</a></li>
    </ul>
      </li>
  <li class="explode" key="14_sms" name="menu">
    <a class="jibie_1">合作联系</a>
    <ul>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=联系我们');?>" target="main-frame">联系我们</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=加入我们');?>" target="main-frame">加入我们</a></li>
    </ul>
      </li>
  <li class="explode" key="15_rec" name="menu">
    <a class="jibie_1">用户帮助</a>
    <ul>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=一起网流程');?>" target="main-frame">一起网流程</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=申请退款');?>" target="main-frame">申请退款</a></li>
        <li class="menu-item"><a href="<?php echo U('Webinfor/company','name=常见问题');?>" target="main-frame">常见问题</a></li>
    </ul>
      </li>
  <li class="explode" key="users_manage" name="menu">
    <a class="jibie_1">会员管理</a>
    <ul>
        <li class="menu-item"><a href="<?php echo U('Usersmanage/index');?>" target="main-frame">会员列表</a></li>
    </ul>
      </li>
    <li class="explode" key="goods_manage" name="menu">
    <a class="jibie_1">商品管理</a>
    <ul>
        <li class="menu-item"><a href="<?php echo U('Goodsmanage/index');?>" target="main-frame">商品列表</a></li>
    </ul>
      </li>
</ul>
</div>
<div id="help-div" style="display:none">
<h1 id="help-title"></h1>
<div id="help-content"></div>
</div>
</div>
    
    
<script src="/Public/Admin/Js/menu.js"></script> 
</body>
</html>