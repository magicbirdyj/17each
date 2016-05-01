<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css"/>
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/lanrenhunli_edit.css" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>
<body>
    <div class="inof_div">
        <div class="big_title">懒人婚礼——<?php echo ($combo['combo_name']); ?>：编辑</div> <input type='button' value='确定发布'id='edit_queding' /><div style="clear: both;"></div>
        <form id='edit_form' name="lanrenhunli_edit"  method="post"   action="<?php echo U('Advert/lanrenhunli_check');?>">
            <input type="hidden" name='combo_id' value="<?php echo ($combo['combo_id']); ?>" />
            <?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="combo_good">
                    <?php echo ($key); ?>： 商品ID:
                    <input name="<?php echo ($key); ?>" type="text" readonly="readonly" class="combo_input" value="<?php echo ($vo); ?>" />
                    <input type="button" value="删除" class="del_button" />
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </form>
        <form name="sv_cont"  method="post"   action="<?php echo U('Advert/lanrenhunli_edit');?>">
            <div class="tr">
                <div class="tr_td1">服务分类</div>
                <select name="server_content" class="tr_td2 release_select" >
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cat_name']); ?>" <?php echo ($$vo['cat_name']); ?> ><?php echo ($vo['cat_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="serch_div">
                <div class="tr_td1">输入商品名</div>
                <input type="text" name="serch" class="text_serch" value="<?php echo ($serch_name); ?>" />
                <input type="button" name="serch_sm" value="搜索"/>
            </div>
        </form>
        <div class="title"><!--标题行-->
            <div class='td1'>序号</div>
            <div class='td2'>商品名称(id)</div>
            <div class='td3'>商品图片</div>
            <div class='td4'>价格</div>
            <div class='td5'>添加时间</div>
            <div class='td6'>操作</div>
        </div>
        <div id='goods_list'></div>
        <!--
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content">
            <div class='td1'><?php echo ($key+1); ?></div>
            <div class='td2'><?php echo ($vo['goods_name']); ?> (id:<?php echo ($vo['goods_id']); ?>)</div>
            <div class='td3'><a href="<?php echo U('/Home/Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>" class="img_zst"/></a></div>
            <div class='td4'>&yen;<?php echo ($vo['price']); ?></div>
            <div class='td5'><?php echo (date('Y/m/d H：i',$vo['add_time'])); ?></div>
            <div class='td6'><input type="button" class="input_button" id="<?php echo ($vo['goods_id']); ?>"  name="<?php echo ($vo['goods_name']); ?>"  value="加入" /></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?> 
        -->
    
        
        
        <div class="page_foot"></div>
    </div>
   
    
    
    <script src="/Public/Admin/Js/lanrenhunli_edit.js">
    </script> 
    <script>
        var combo_name="<?php echo ($combo_name); ?>";
    </script>

</body>
</html>