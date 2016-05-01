<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css"/>
<link type="text/css" rel="stylesheet" href="/Public/Admin/Css/lanrenhunli.css" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
</head>
<body>
    <div class="inof_div">
        <div class="big_title">懒人婚礼管理</div>
        <form name="combo"  method="get"   action="<?php echo U('Advert/lanrenhunli');?>">
            <div class="tr">
                <div class="tr_td1">套餐 ID</div>
                <select name="combo_id" class="tr_td2 release_select" >
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['combo_id']); ?>" ><?php echo ($vo['combo_id']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <input type="button" name="add" value="添加" class="add_button" />
                <input type="button" name="del" value="删除" class="add_button" />
            </div>
            <div class="serch_div">
                <div class="tr_td1">输入套餐名</div>
                <input type="text" name="combo_name" class="text_serch" value="<?php echo ($combo['combo_name']); ?>" />
            </div>
            <div class="serch_div">
                <div class="tr_td1">套餐介绍：</div>
                <textarea class="combo_jieshao" name='combo_jieshao' value="<?php echo ($combo['combo_jieshao']); ?>"><?php echo ($combo['combo_jieshao']); ?></textarea>
            </div>
           
        
            <div class="tr">
                <div class="tr_td1"></div>
                <input type="button" name="edit" value="编辑" class="edit_button" />
            </div>
        </form>
    </div>
      
    
    
<script src="/Public/Admin/Js/lanrenhunli.js"></script> 
<script type="text/javascript">
    var select_val="<?php echo ($combo_id); ?>";
    $("select[name=combo_id]").val(select_val);
    $('select[name=combo_id]').bind('change',function(){sc_change();});
    function sc_change(){
        var form_url="<?php echo U('Advert/lanrenhunli');?>";
        $('form[name=combo]').attr('action',form_url);
        $('form[name=combo]').submit();
    }
    $('.edit_button').bind('click',function(){
        if(window.confirm('确定要修改套餐名和套餐介绍并进入编辑页面吗？')){
             var url='/admin/Advert/queding_bianji.html';
             var data={
                 combo_id:$('option:selected').val(),
                 combo_name:$('input[name=combo_name]').val(),
                 combo_jieshao:$('textarea[name=combo_jieshao]').val()
             };
             $.ajax({
                 type:'post',
                 async : false,
                 url:url,
                 datatype:'json',
                 data:data,
                 success:function(){
                     //alert('修改成功');
                 }
             });
         }else{
             return false;
         }
        var form_url="<?php echo U('Advert/lanrenhunli_edit');?>";
        $('form[name=combo]').attr('action',form_url);
        $('form[name=combo]').submit();
    });
   
    
    
</script>
</body>
</html>