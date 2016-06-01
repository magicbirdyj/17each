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