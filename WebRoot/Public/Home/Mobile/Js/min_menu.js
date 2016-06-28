 $("#min_menu").bind("click", function() {  
                    var config = {  
                        url: window.location.href, //分享url  
                        title: '分享网站 我的一起网', //内容标题  
                        desc: '17网，您的婚礼专家', //描述  
                        img: 'www.17each.com/Public/Uploads/image/goods/20160311/14576949864868468673.jpg', //分享的图片  
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