// JavaScript Document
//onfocus
//onblur
var obj_form=document.zhuce;
var yanzhengma,shoujihao;
$.ajaxSetup({ 
    async : false 
});     
obj_form.shoujihao.onfocus=function (){yzshouji_foucs();}
obj_form.shoujihao.onblur=function (){yzshouji_blur();}
obj_form.yanzhengma.onfocus=function (){yanzhengma_foucs();}


function yzshouji_foucs(){
	var obj=document.getElementById("infor");
	obj.style.cssText="color:#666;";
	obj.innerHTML="请输入你的手机号码";
	}
function yzshouji_blur(){
	var obj=document.getElementById("infor");
	if(obj_form.shoujihao.value===""){
		obj.style.cssText="color:red;";
		obj.innerHTML="手机号码为空，请输入";
		return false;
		}
		else if(!is_shoujihao(obj_form.shoujihao.value)){
			obj.style.cssText="color:red;";
			obj.innerHTML="不正确，请输入正确的手机号码";
			return false;
			}
		else{
                    var data={
                            shoujihao:$('input[name=shoujihao]').val(),
                            check:"shoujihao"
                            };
                    var url='/Home/zhuce/check.html';
                    $.ajax({
                        type:'post',
                        url:url,
                        data:data,
                        datatype:'json',
                        beforeSend:function(){
                            obj.innerHTML="检验中...";
                        },
                        success:function(msg){
                        shoujihao=msg;
                        if(msg==='1'){
                            obj.style.cssText="color:red;";
                            obj.innerHTML="手机号已被注册，请重新填写";
                            }else if(msg==='0'){
                                obj.style.cssText="color:#666;";
                                obj.innerHTML="手机号可用 &radic;";
                                }else{
                                    obj.style.cssText="color:red;";
                                    obj.innerHTML="系统错误，请重试";
                                }
                        }
                    });
                    if(shoujihao==='0'){
                        return true;
                    }else{
                        return false;
                    }
		}
	}

function yanzhengma_foucs(){
	var obj=document.getElementById("infor");
	obj.style.cssText="color:#666;";
	obj.innerHTML="请输入图片中的验证码";
	}
function yanzhengma_blur(){
    var obj=document.getElementById("infor");
    if($('input[name=yanzhengma]').val()===''){
        obj.style.cssText="color:red;";
        obj.innerHTML="验证码为空，请输入验证码";
        return false;
    }else{
    var data={
        yanzhengma:$('input[name=yanzhengma]').val(),
        check:"yanzhengma"
    };
    var url='/Home/zhuce/check.html';
    $.post(url,data,function(msg){
         yanzhengma=msg;
        if(msg===0){
            obj.style.cssText="color:red;";
            obj.innerHTML="验证码错误，请重新输入";
        }
        else if(msg===-1){
            obj.style.cssText="color:red;";
            obj.innerHTML="验证码过期，请点击图片刷新";
        }
        else if(msg===1){
            obj.style.cssText="color:#666;";
            obj.innerHTML="验证码正确&radic;";
        }
    });
    }
    if(yanzhengma===1){
        return true;
    }else{
        return false; 
    }
}

$('#zhuce1_xiayibu').bind('click',function(event){
    event.preventDefault();
    checkForm();
});
function checkForm(){
	if(yzshouji_blur()&&yanzhengma_blur()){
		obj_form.submit();
                return false;
	}else{
            return false;
        }
  }
  

        
        
        
//验证码刷新
var captcha_img=$('.zhuce1_yanzhengma');
captcha_img.attr('title','点击刷新');
var captcha_img_src=captcha_img.attr('src');
captcha_img.bind('click',yanzhengma_click);
function yanzhengma_click(){
    if(captcha_img_src.indexOf('?')>0){  
        $(this).attr("src", captcha_img_src+'&date='+new Date().getTime());  
    }else{  
        $(this).attr("src", captcha_img_src.replace(/\?.*$/,'')+'?'+new Date().getTime());  
    }
}

