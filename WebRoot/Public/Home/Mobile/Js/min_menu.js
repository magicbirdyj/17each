 $("#min_menu").bind("click", function() {  
                    var config = {  
                        url: '', //分享url  
                        title: '', //内容标题  
                        desc: '', //描述  
                        img: '', //分享的图片  
                        img_title: '', //图片名称  
                        from: '' //来源  
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