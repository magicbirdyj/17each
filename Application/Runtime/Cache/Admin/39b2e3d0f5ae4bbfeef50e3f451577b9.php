<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="/Public/Common/Js/jquery.min.js"></script> 
<script src="/Public/Common/Js/function.js"></script> 
<script src="/Public/Common/Js/jquery.form.js"></script> 
<script src="/Public/Common/Js/kindeditor/kindeditor.js"></script>
<script src="/Public/Common/Js/kindeditor/lang/zh_CN.js"></script>
</head>
<body>
    <div style="font-size: 16px;margin: 20px 200px;"><?php echo ($data['name']); ?>——编辑</div>
    <form name="company" method="post" enctype="multipart/form-data"  action="<?php echo U('Webinfor/bianji_check');?>">
        <input name='name' value="<?php echo ($data['name']); ?>" type="hidden" />
    <div style="margin: 0px 0px 20px 30px;" >
    <textarea id="content" name="content" style="width:90%;height:300px;visibility:hidden;">
                    <?php echo ($data['text']); ?>
    </textarea>
    </div>
    <input id='qdxg' type="submit" value="确定修改" style="margin: 20px 0px 50px 30px;" />
    </form>
    <script src="/Public/Admin/Js/kindeditor.js" type="text/javascript"></script>

    <script type="text/javascript">
        $('#qdxg').bind('click',function(event){
            var name="<?php echo ($data['name']); ?>";
            if(!window.confirm('确定要修改'+name+'吗？')){
                event.preventDefault();
            };
        });
    </script> 
</body>
</html>