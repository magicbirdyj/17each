<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css"/>
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/shopmanger.css" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>
<body>
    <div class="inof_div">
        <div class="big_title">商品页面橱窗管理</div>
        <form name="sv_cont"  method="get"   action="<?php echo U('Shopmanage/shangpinyemian');?>">
            <div class="tr">
                <div class="tr_td1">服务分类</div>
                <select name="server_content" class="tr_td2 release_select" >
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cat_name']); ?>" <?php echo ($$vo['cat_name']); ?> ><?php echo ($vo['cat_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="serch_div">
                <div class="tr_td1">输入商品名</div>
                <input type="text" name="serch" class="text_serch" value="<?php echo ($serch_name); ?>" />
                <input type="submit" name="serch_sm" value="搜索"/>
            </div>
        </form>
        <div class="title"><!--标题行-->
            <div class='td1'>序号</div>
            <div class='td2'>商品名称</div>
            <div class='td3'>商品图片</div>
            <div class='td4'>橱窗排序</div>
            <div class='td5'>添加时间</div>
            <div class='td6'>操作</div>
        </div>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content"><!--内容遍历-->
            <div class='td1'><?php echo ($key+1); ?></div>
            <div class='td2'><?php echo ($vo['goods_name']); ?></div>
            <div class='td3'><a href="<?php echo U('/Home/Goods/index',array('goods_id'=>$vo['goods_id']));?>"><img src="<?php echo ($vo['goods_img']); ?>" class="img_zst"/></a></div>
            <div class='td4'><?php echo ($vo['advert_shop_order']); ?></div>
            <div class='td5'><?php echo (date('Y/m/d H：i',$vo['add_time'])); ?></div>
            <div class='td6'><input class="index_input" placeholder="输入橱窗（1-12）" type="text" value="" name="index" /><input type="button" class="input_button" id="<?php echo ($vo['goods_id']); ?>"  name="<?php echo ($vo['goods_name']); ?>'"  value="确定" /></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?> 
    
        
        
        <div class="page_foot"><?php echo ($page_foot); ?></div>
    </div>
   
    
    

<script type="text/javascript">
    $('select[name=server_content]').bind('change',function(){sc_change();});
    function sc_change(){
        $('form[name=sv_cont]').submit();
    }
    $('.input_button').bind('click',function(){
        var index=$(this).prev().val();
        if(index===''){
            alert('请输入需要放入的橱窗编号');
        }else if(!(parseInt(index)>0&&parseInt(index)<13)){
            alert('橱窗编号必须是1到12之间');
        }else{
            var id=$(this).attr('id');
            var name=$(this).attr('name');
            if(window.confirm('确定要把 ['+name+']放入橱窗 吗？')){
                var server=$('option:selected').val();
                var url="/Admin/Shopmanage/chuchuan/leixin/shop/goods_id/"+id+"/index/"+index+"/server/"+server+".html";
                $.ajax({
                    type:'get',
                    async : false,
                    url:url,
                    datatype:'json'
                });
                window.location.href=window.location.href;
            }else{
                return false;
            }
        }
        
    });
    
    
    
</script>
</body>
</html>