//点击立即购买隐藏#shop 显示#div_xuanzereiqi
$('.back_color_buy').bind('click',function(){
    if($('input[name=server_day]').val()===''){
        $('#div_xuanzeriqi').css('display','block');
        window.scrollTo(0,0);
        $('#div_xuanzeriqi').animate({'left':'0%'},'normal',function(){
            $('#shop').css('display','none');
        });
    }else{
                var user_id="<{$user_id}>";
                var goods_user_id="<{$goods['user_id']}>";
                if(user_id===goods_user_id){
                    alert('不能购买自己的商品');
                }else{
                    $('form[name=buy]').submit();
                }
                
    }
    
    
    
    
});




//点击加入收藏
$('#shoucang').bind('click',function(){
    var is_success=false;
        if($('input[name=server_day]').val()===''){
             $('#div_xuanzeriqi').css('display','block');
            window.scrollTo(0,0);
            $('#div_xuanzeriqi').animate({'left':'0%'},'normal',function(){
                $('#shop').css('display','none');
            });
        }else{
            is_login=check_login();
            if(is_login!==0){
                var server_day=$('input[name=server_day]').val();
                var url='/Home/Goods/sellection_join.html';
                var data={
                    server_day:server_day,
                    goods_id:$('input[name=goods_id]').val(),
                    check:"sellection_join"
                };
                $.ajax({
                    type:'post',
                    async : false,
                    url:url,
                    data:data, 
                    datatype:'json',
                    success:function(msg){
                        if(msg=='-1'){
                            alert('加入收藏失败，请重新加入');                                
                        }
                        if(msg=='1'){
                            alert('成功加入收藏'); 
                            is_success=true;                               
                        }
                    }
                });
                if(is_success){
                    $('.foot_shoucang').css('color','#f90');
                    $('.foot_shoucang').next('span').html('已收藏');
                    $('#shoucang').attr('id','yishoucang');
                }
            }else{
                window.location.href="/Home/Login/index.html"; 
            }
        }    
    });
    
    
    //点击加入购物车
$('#gouwuche').bind('click',function(){
    var is_success=true;
        if($('input[name=server_day]').val()==''){
            $('#div_xuanzeriqi').css('display','block');
            window.scrollTo(0,0);
            $('#div_xuanzeriqi').animate({'left':'0%'},'normal',function(){
                $('#shop').css('display','none');
            });
        }else{
            is_login=check_login();
            if(is_login!==0){
                 var server_day=$('input[name=server_day]').val();
                    var url='/Home/Goods/cart_join.html';
                    var data={
                        server_day:server_day,
                        goods_id:$('input[name=goods_id]').val(),
                        check:"cart_join"
                    };
                    $.ajax({
                        type:'post',
                        async : false,
                        url:url,
                        data:data,
                        datatype:'json',
                        success:function(msg){
                            if(msg=='9'){
                                is_success=false;
                                alert('该商品的该日期你已经加入购物车，请重新选择日期');                                
                            }
                            if(msg=='-1'){
                                is_success=false;
                                alert('加入购物车失败，请重新加入');                                
                            }
                        }
                    });
                    if(is_success){
                        alert('成功加入购物车');
                    }
                }else{ 
                    window.location.href="/Home/Login/index.html"; 
                }
            }
    });