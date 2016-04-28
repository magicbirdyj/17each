<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/Public/Home/Css/public.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/head.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/footer.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/Css/release_goods.css">
<script src="/Public/Common/Js/jquery.min.js"></script>
<script src="/Public/Common/Js/jquery.form.js"></script> 
<script src="/Public/Common/Js/function.js"></script>
<script src="/Public/Common/Js/kindeditor/kindeditor.js"></script>
<script src="/Public/Common/Js/kindeditor/lang/zh_CN.js"></script>
</head>

<body>
    
    
    <div class="release">
        <div class="div1">
            商品编辑：
        </div>
      
        <form name="sv_cont" method="post" action="<?php echo U('Goodsmanage/goods_editor',"goods_id=$goods_id");?>" >
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
        
        
        
        <form name="release_goods" method="post" enctype="multipart/form-data" action="<?php echo U('Goodsmanage/bianji_check',"goods_id=$goods_id");?>" onsubmit="editor.sync()">
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
    
<form id = "form_file_jia" enctype="multipart/form-data" action="<?php echo U('Goodsmanage/file_jia');?>" method="post">   
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