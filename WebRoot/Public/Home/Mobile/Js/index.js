// JavaScript Document
window.onload=function(){
    width_height();
    $(window).bind('resize',function(){
        width_height();
    });
//首页图片宽高比
    function width_height(){
        $('.shopping_img img').each(function(i,item){
            var img=new Image();
            img.src=$(item).attr('src');
            if(img.height*3/2<img.width){
                var height=$(item).parent().css('padding-bottom');
                $(item).css('height',height);
                $(item).css('width','auto');
               
            }
        });
    }

};