 $("#min_menu").bind("click", function() {  
     var img=$('#lunbo_div img:first').attr('src');
     var title=$('.titile1').html();
                    var config = {  
                        url: window.location.href, //分享url  
                        title: '一起网，您的婚礼专家： '+title, //内容标题  
                        desc: '要“17”，不要“each”，节省50%费用，拥有梦幻婚礼不再是梦', //描述  
                        img: 'www.17each.com'+img, //分享的图片  
                        img_title: '我的一起网图片', //图片名称  
                        from: '17each' //来源  
                    };  
                    var share_obj = new nativeShare('nativeShare', config);  
                    $(".am-share").addClass("am-modal-active");  
                    if ($(".sharebg").length > 0) {  
                        $(".sharebg").addClass("sharebg-active");  
                    } else {  
                        $("body").append('<div class="sharebg"></div>');  
                        $(".sharebg").addClass("sharebg-active");  
                    }  
                    $(".sharebg-active,.share_btn").click(function() {  
                        $(".am-share").removeClass("am-modal-active");  
                        setTimeout(function() {  
                            $(".sharebg-active").removeClass("sharebg-active");  
                            $(".sharebg").remove();  
                        }, 300);  
                    })  
                    
                    
            }); 
            
            
  $('div:not(#min_menu)').bind('click',function(){
        hideOverlay('zhishi_fenxiang');
    });      
 
 

            
            

            
            
