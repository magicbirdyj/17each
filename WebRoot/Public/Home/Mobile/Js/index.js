// JavaScript Document
window.onload=function(){
    var index_this=0;//index_this是当前显示的图片index
    var times,left,right;
        

     lunbo_start();
     //向左滑动触发
     $(".lunbo_div").bind("swipeleft",function(event){
         var control = navigator.control || {};
if (control.gesture) {
        control.gesture(false);
}
         event.stopPropagation();
         event.preventDefault();
         huadong_l();
        });
     //向右滑动触发
     $(".lunbo_div").bind("swiperight",function(event){
          event.stopPropagation();
          event.preventDefault();
          huadong_r();
        });


    function lunbo_start(){
        times=setInterval(huadong_l,3000);
    }

    function huadong_l(){
        switch(index_this){
            case 0:
                left='-400%';
                break;
            case 1:
                left='-500%';
                break;
            case 2:
                left='-300%';
                break;
        }
        $('.lunbo_div').animate({"left":left},'normal',function(){
            (index_this===2)?index_this=0:index_this++;
            if(index_this===2){
                $('.lunbo_div').css('left','-200%');
            }
            $('.choose div span').eq(index_this).addClass("bg_red").siblings().
            removeClass("bg_red");
        });
        
    }

    
    function huadong_r(){
        switch(index_this){
            case 0:
                right='-200%';
                break;
            case 2:
                right='-100%';
                break;
            case 1:
                right='-300%';
                break;
        }
        $('.lunbo_div').animate({"left":right},'normal',function(){
            (index_this===0)?index_this=2:index_this--;
            if(index_this===1){
                $('.lunbo_div').css('left','-400%');
            }
        });
        
        
    }



}