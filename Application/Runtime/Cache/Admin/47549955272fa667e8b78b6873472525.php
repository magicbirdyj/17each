<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css"/>
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/withdraw.css" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>
<body>
    <div class="inof_div">
        <div class="big_title">提现列表</div>

        <div class="title"><!--标题行-->
            <div class='td1'>序号</div>
            <div class='td2'>会员名</div>
            <div class='td3'>账户类型</div>
            <div class='td4'>账号</div>
            <div class='td5'>提现金额</div>
            <div class='td6'>申请时间</div>
        </div>
        <?php if(is_array($withdraw)): $i = 0; $__LIST__ = $withdraw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content"><!--内容遍历-->
            <div class='td1'><?php echo ($key+1); ?></div>
            <div class='td2'><?php echo ($vo['user_name']); ?></div>
            <div class='td3'><?php echo ($vo['account_style']); ?></div>
            <div class='td4'><?php echo ($vo['account_number']); ?></div>
            <div class='td5'><?php echo ($vo['withdraw_money']); ?></div>
            <div class='td6' /><?php echo (date('Y/m/d H：i',$vo['time'])); ?></div>
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
                var url="/Admin/Shopmanage/chuchuan/leixin/cat/goods_id/"+id+"/index/"+index+"/server/"+server+".html";
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