







//给视频iframe一个正确的高
var width_iframe=$('iframe').css('width');
if(width_iframe){
    var height_iframe=(parseInt(width_iframe)/650)*380+'px';
    $('iframe').css('height',height_iframe);
}



//商品详情和累计评论变换
$('.spxq').bind('click',function(){
    $('.pinglun').css('display','none');
    $('#spxq').css('display','block');
    $('.spxq').css('background-color','#FFF');
    $('.ljpj').css('background-color','#F6F6F6');
    location.href = "#shop_a";
});
$('.ljpj').bind('click',function(){
    $('#spxq').css('display','none');
    $('.pinglun').css('display','block');
    $('.ljpj').css('background-color','#FFF');
    $('.spxq').css('background-color','#F6F6F6');
    location.href = "#shop_a";
});
   
//点击#jieshao隐藏#shop 显示#div_shangjia_info
$('#jieshao').bind('click',function(){
    $('#div_shangjia_info').css('display','block');
    window.scrollTo(0,0);
    $('#div_shangjia_info').animate({'left':'0%'},'normal',function(){
        $('#shop').css('display','none');
    });
    
    
    
});
//点击#shangjia_info_fanhui返回商品页面
$('#shangjia_info_fanhui').bind('click',function(){
    $('#shop').css('display','block');
    $('#div_shangjia_info').animate({'left':'100%'},'normal',function(){
        $('#div_shangjia_info').css('display','none');
    });

});

//点击#xuanzereiqi隐藏#shop 显示#div_xuanzereiqi
$('#xuanzeriqi').bind('click',function(){
    $('#div_xuanzeriqi').css('display','block');
    window.scrollTo(0,0);
    $('#div_xuanzeriqi').animate({'left':'0%'},'normal',function(){
        $('#shop').css('display','none');
    });
  
});
//点击#xuanzereiqi_fanhui返回商品页面
$('#xuanzeriqi_fanhui').bind('click',function(){
    $('#shop').css('display','block');
    $('#div_xuanzeriqi').animate({'left':'100%'},'normal',function(){
        $('#div_xuanzeriqi').css('display','none');
    });

});


//日历增加自己的JS功能
//让选择div移动到鼠标位置
$('body').on('click','#dateSelectionRili',function(e){
    var xx=e.pageX+10;
    var yy=e.pageY+10;
    $('#dateSelectionDiv').css({top: yy, left: xx});
});
//获取选择的日期
//$('body').unon('click','#tt td');
//$('body').on('click','#tt td'.bin,function(){
    //var year=$('#nian').html();
    //var month=$('#yue').html();
    //var day=$(this).children('font').html();
//});


/* 关闭购物车页面 */
$('#gouwuche_guanbi').bind('click',function(){
    hideOverlay('gouwuche_join');
});
/*点击加入购物车成功后的继续浏览*/
$('#gouwuche_jxll').bind('click',function(){
    hideOverlay('gouwuche_join');
});
/* 关闭收藏页面 */
$('#shoucang_guanbi').bind('click',function(){
    hideOverlay('shoucang_join');
});
/*点击加入收藏成功后的继续浏览*/
$('#shoucang_jxll').bind('click',function(){
    hideOverlay('shoucang_join');
});


/* 关闭提示选择日期div */
$('#tishi_close').bind('click',function(){
    $('#buy').css('display','block');
    $('#buy_clone').css('display','none');
});

//选择日期 关闭提示选择日期
$('body').on('click','#tt>td',function(){
    $('#buy').css('display','block');
    $('#buy_clone').css('display','none');
});
//鼠标移动到日期 变手形，边框变红
$('body').on('mouseover','#tt>td',function(){
    $(this).children('font').css('color','red');
});
$('body').on('mouseout','#tt>td',function(){
    $(this).children('font').css('color','#666');
});

//评论区的图片 宽度高度适应100*100 等比例。
$('.pinglun_img img').each(function(i,item){
        if($(item).height()<100){
            $(item).css('height','100px');
            $(item).css('width','auto');
        }
    });



    
//如果url存在maodian_pingjia那么显示评价
var url_dangqian=window.location.href;
if(url_dangqian.lastIndexOf('#maodian_pingjia')!='-1'||url_dangqian.lastIndexOf('/p/')!='-1'){
    $('#spxq').css('display','none');
    $('.pinglun').css('display','block');
    $('.ljpj').css('background-color','#FFF');
    $('.spxq').css('background-color','#F6F6F6');
}

//商品页面内的maodian_pingjia点击显示评价
$('.maodian_pingjia').bind('click',function(){
    $('#spxq').css('display','none');
    $('.pinglun').css('display','block');
    $('.ljpj').css('background-color','#FFF');
    $('.spxq').css('background-color','#F6F6F6');
});

//网页一开始就需要获取累计评论ajax信息
    var url_y=window.location.href;
    var url_pinglun=url_y.replace('index','pinglun');
    $.ajax({
            type:'post',
            async : true,
            url:url_pinglun,
            datatype:'json',
            success:function(msg){
                var str="";
                $(msg.li).each(function(i,item){
                    var newtime=new Date(item.updated*1000);  
                    str+='<li><div class="pinglun_left"><img src="'+item.head_url+'" class="img"><p class="user_name">'+item.user_name+'</p></div>';
                    str+='<div class="pinglun_right"><div class="xingxing_div"><span class="pingjia_xiao"><span class="pingjia_xiao_limian" style="width:'+xingxing_baifenbi(item.score)+';"></span></span>';
                    str+='<span>'+newtime.getFullYear()+'-'+newtime.getMonth()+'-'+newtime.getDate()+'&nbsp;&nbsp;&nbsp;&nbsp;'+newtime.toLocaleTimeString()+'</span></div><div class="pinglun_text">'+item.appraise+'</div><div class="pinglun_img">';
                    $(item.appraise_img).each(function(i1,item1){
                        str+='<a><img src="'+item1+'" /></a>';
                    });
                    str+='</div></div></li>';
                });
                
                
                
                $('#leijipinglun').html(str);
                    $('#page_foot_pinglun').html(msg.page_foot);
            }
        });
        
//动态生成的必须用$('body').on('click','.num',function()｛｝）添加事件
$('body').on('click','#page_foot_pinglun a',function(event){
    event.preventDefault();
    var url=$(this).attr('href');
    $.ajax({
            type:'post',
            async : true,
            url:url,
            datatype:'json',
            success:function(msg){
                var str='';
                $(msg.li).each(function(i,item){
                    var newtime=new Date(item.updated*1000); 
                    str+='<li><div class="pinglun_left"><img src="'+item.head_url+'" class="img"><p class="user_name">'+item.user_name+'</p></div>';
                    str+='<div class="pinglun_right"><div class="xingxing_div"><span class="pingjia_xiao"><span class="pingjia_xiao_limian" style="width:'+xingxing_baifenbi(item.score)+';"></span></span>';
                    str+='<span>'+newtime.getFullYear()+'-'+newtime.getMonth()+'-'+newtime.getDate()+'&nbsp;&nbsp;&nbsp;&nbsp;'+newtime.toLocaleTimeString()+'</span></div><div class="pinglun_text">'+item.appraise+'</div><div class="pinglun_img">';
                    $(item.appraise_img).each(function(i1,item1){
                        str+='<a><img src="'+item1+'" /></a>';
                    });
                    str+='</div></div></li>';
                });
                
                
                
                $('#leijipinglun').html(str);
                $('#page_foot_pinglun').html(msg.page_foot);
                }
        });
    });
    
//鼠标点击评论区的图片放大  再点击 收回  同样必须用 动态生成的元素绑定
$('body').on('mouseover','.pinglun_img img',function(){
    var img_src=$(this).attr('src');
    //var img_eq=$('.pinglin_img img').index($(this));
    //var img_id="#pinglun_fangda_"+img_eq;
    var img_fangda='<img class="pinglun_fangda" id="pinglun_fangda" />';
    $(this).parent().parent().after(img_fangda);
    $("#pinglun_fangda").attr('src',img_src);
});
$('body').on('mouseout','.pinglun_img img',function(){
    $('#pinglun_fangda').remove();
    });
    
$('.box_r_shopping:last').css('border','none');//广告商品最后一个取消边框
$('.goodscontent img').css('max-width','970px;');//设置商品描述里面图片的最大宽度



