var nativeShare = function (elementNode, config) {  
    if (!document.getElementById(elementNode)) {  
        return false;  
    }  
  
    var qApiSrc = {  
        lower: "http://3gimg.qq.com/html5/js/qb.js",  
        higher: "http://jsapi.qq.com/get?api=app.share"  
    };  
    var bLevel = {  
        qq: {forbid: 0, lower: 1, higher: 2},  
        uc: {forbid: 0, allow: 1}  
    };  
    var UA = navigator.appVersion;  
    var isqqBrowser = (UA.split("MQQBrowser/").length > 1) ? bLevel.qq.higher : bLevel.qq.forbid;  
    var isucBrowser = (UA.split("UCBrowser/").length > 1) ? bLevel.uc.allow : bLevel.uc.forbid;  
    var version = {  
        uc: "",  
        qq: ""  
    };  
    var isWeixin = false;  
  
    config = config || {};  
    this.elementNode = elementNode;  
    this.url = config.url || document.location.href || '';  
    this.title = config.title || document.title || '';  
    this.desc = config.desc || document.title || '';  
    this.img = config.img || document.getElementsByTagName('img').length > 0 && document.getElementsByTagName('img')[0].src || '';  
    this.img_title = config.img_title || document.title || '';  
    this.from = config.from || window.location.host || '';  
    this.ucAppList = {  
        sinaWeibo: ['kSinaWeibo', 'SinaWeibo', 11, '新浪微博'],  
        weixin: ['kWeixin', 'WechatFriends', 1, '微信好友'],  
        weixinFriend: ['kWeixinFriend', 'WechatTimeline', '8', '微信朋友圈'],  
        QQ: ['kQQ', 'QQ', '4', 'QQ好友'],  
        QZone: ['kQZone', 'QZone', '3', 'QQ空间']  
    };  
  
    this.share = function (to_app) {  
        var title = this.title, url = this.url, desc = this.desc, img = this.img, img_title = this.img_title, from = this.from;  
        if (isucBrowser) {  
            to_app = to_app == '' ? '' : (platform_os == 'iPhone' ? this.ucAppList[to_app][0] : this.ucAppList[to_app][1]);  
            if (to_app == 'QZone') {  
                B = "mqqapi://share/to_qzone?src_type=web&version=1&file_type=news&req_type=1&image_url="+img+"&title="+title+"&description="+desc+"&url="+url+"&app_name="+from;  
                k = document.createElement("div"), k.style.visibility = "hidden", k.innerHTML = '<iframe src="' + B + '" scrolling="no" width="1" height="1"></iframe>', document.body.appendChild(k), setTimeout(function () {  
                    k && k.parentNode && k.parentNode.removeChild(k)  
                }, 5E3);  
            }  
            if (typeof(ucweb) != "undefined") {  
                ucweb.startRequest("shell.page_share", [title, desc, url, to_app, "", "@" + from, ""])  
            } else {  
                if (typeof(ucbrowser) != "undefined") {  
                    ucbrowser.web_share(title, desc, url, to_app, "", "@" + from, '')  
                } else {  
                }  
            }  
        } else {  
            if (isqqBrowser && !isWeixin) {  
                to_app = to_app == '' ? '' : this.ucAppList[to_app][2];  
                var ah = {  
                    url: url,  
                    title: title,  
                    description: desc,  
                    img_url: img,  
                    img_title: img_title,  
                    to_app: to_app,//微信好友1,腾讯微博2,QQ空间3,QQ好友4,生成二维码7,微信朋友圈8,啾啾分享9,复制网址10,分享到微博11,创意分享13  
                    cus_txt: "请输入此时此刻想要分享的内容"  
                };  
                ah = to_app == '' ? '' : ah;  
                if (typeof(browser) != "undefined") {  
                    if (typeof(browser.app) != "undefined" && isqqBrowser == bLevel.qq.higher) {  
                        browser.app.share(ah)  
                    }  
                } else {  
                    if (typeof(window.qb) != "undefined" && isqqBrowser == bLevel.qq.lower) {  
                        window.qb.share(ah)  
                    } else {  
                    }  
                }  
            } else {  
            }  
        }  
    };  
  
   this.html = function() {  
        var position = document.getElementById(this.elementNode);  
        var html = '<div class="am-share" id="my_fenxiang">'+  
            '<div class="am-share-sns list clearfix">'+  
            '<span data-app="weixin" class="nativeShare weixin"><i></i>微信好友</span>'+  
            '<span data-app="weixinFriend" class="nativeShare weixin_timeline"><i></i>微信朋友圈</span>'+  
            '<span data-app="sinaWeibo" class="nativeShare weibo"><i></i>新浪微博</span>'+  
            '<span data-app="QQ" class="nativeShare qq"><i></i>QQ好友</span>'+  
            '<span data-app="QZone" class="nativeShare qzone"><i></i>QQ空间</span>'+  
            /*'<span data-app="" class="nativeShare more"><i></i>更多</span>'+ */ 
            '<div class="am-share-footer"><button class="share_btn">取消</button></div>'+  
            '</div>'+  
            '</div>';  
        position.innerHTML = html;  

    };
    this.html_uc = function() {  
        var position = document.getElementById(this.elementNode);  
        

    };
  
    this.isloadqqApi = function () {  
        if (isqqBrowser) {  
            var b = (version.qq < 5.4) ? qApiSrc.lower : qApiSrc.higher;  
            var d = document.createElement("script");  
            var a = document.getElementsByTagName("body")[0];  
            d.setAttribute("src", b);  
            a.appendChild(d)  
        }  
    };  
  
    this.getPlantform = function () {  
        ua = navigator.userAgent;  
        if ((ua.indexOf("iPhone") > -1 || ua.indexOf("iPod") > -1)) {  
            return "iPhone"  
        }  
        return "Android"  
    };  
  
    this.is_weixin = function () {  
        var a = UA.toLowerCase();  
        if (a.match(/MicroMessenger/i) == "micromessenger") {  
            return true  
        } else {  
            return false  
        }  
    };  
  
    this.getVersion = function (c) {  
        var a = c.split("."), b = parseFloat(a[0] + "." + a[1]);  
        return b  
    };  
  
    this.init = function () {  
        platform_os = this.getPlantform();  
        version.qq = isqqBrowser ? this.getVersion(UA.split("MQQBrowser/")[1]) : 0;  
        version.uc = isucBrowser ? this.getVersion(UA.split("UCBrowser/")[1]) : 0;  
        isWeixin = this.is_weixin();  
        if ((isqqBrowser && version.qq < 5.4 && platform_os == "iPhone") || (isqqBrowser && version.qq < 5.3 && platform_os == "Android")) {  
            isqqBrowser = bLevel.qq.forbid  
        } else {  
            if (isqqBrowser && version.qq < 5.4 && platform_os == "Android") {  
                isqqBrowser = bLevel.qq.lower  
            } else {  
                if (isucBrowser && ((version.uc < 10.2 && platform_os == "iPhone") || (version.uc < 9.7 && platform_os == "Android"))) {  
                    isucBrowser = bLevel.uc.forbid  
                }  
            }  
        }  
        this.isloadqqApi();  
        if (isqqBrowser || isucBrowser) {
            if(isqqBrowser){
            this.html();  
            showOverlay('my_fenxiang');
            $('.am-share-footer').bind('click',function(){
                hideOverlay('none');
            });
            }else {
                this.html_uc();
            }
        } else {  
            //document.write('目前该分享插件仅支持手机UC浏览器和QQ浏览器');  
            $('#overlay,#zhishi_fenxiang').bind('click',function(){
                hideOverlay('zhishi_fenxiang');
            }); 
            showOverlay('zhishi_fenxiang');
        }  
    };  
  
    this.init();  
  
    var share = this;  
    var items = document.getElementsByClassName('nativeShare');  
    for (var i=0;i<items.length;i++) {  
        items[i].onclick = function(){  
            share.share(this.getAttribute('data-app'));  
        }  ;
    }  
    
    
    $(".am-share").removeClass("am-modal-active");  
                        setTimeout(function() {  
                            $(".sharebg-active").removeClass("sharebg-active");  
                            $(".sharebg").remove();  
                        }, 300);
    share.share('');
    return this;  
};  














//显示遮罩层
function showOverlay(id) {
    $("#overlay").height(pageHeight());
    $("#overlay").width(pageWidth());

    // fadeTo第一个参数为速度，第二个为透明度
    // 多重方式控制透明度，保证兼容性，但也带来修改麻烦的问题
    $("#overlay").fadeTo(200, 0.7);
    $("#"+id).css('display','block');
}

/* 隐藏覆盖层 */
function hideOverlay(id) {
    $("#overlay").fadeOut(200);
    $('#'+id).css('display','none');
}

/* 当前页面高度 */
function pageHeight() {
    return document.body.scrollHeight;
}

/* 当前页面宽度 */
function pageWidth() {
    return document.body.scrollWidth;
}
















var imgUrl = 'http://topic.xcar.com.cn/201403/ad_q3/pic/banner.jpg'; 
var lineLink = 'http://topic.xcar.com.cn/201403/ad_q3/index.php'; 
var descContent = "http://topic.xcar.com.cn/201403/ad_q3/index.php"; 
var shareTitle = '【奥迪Q3开启尊享礼遇季】报名试驾，赢取精美礼品'; 
var appid = 'wxc9937e3a66af6dc8'; 
 
function shareFriend() { 
WeixinJSBridge.invoke('sendAppMessage',{ 
"appid": appid, 
"img_url": imgUrl, 
"img_width": "640", 
"img_height": "640", 
"link": lineLink, 
"desc": descContent, 
"title": shareTitle 
}, function(res) { 
_report('send_msg', res.err_msg); 
}) 
} 
function shareTimeline() { 
WeixinJSBridge.invoke('shareTimeline',{ 
"img_url": imgUrl, 
"img_width": "640", 
"img_height": "640", 
"link": lineLink, 
"desc": descContent, 
"title": shareTitle 
}, function(res) { 
_report('timeline', res.err_msg); 
}); 
} 
function shareWeibo() { 
WeixinJSBridge.invoke('shareWeibo',{ 
"content": descContent, 
"url": lineLink, 
}, function(res) { 
_report('weibo', res.err_msg); 
}); 
} 
// 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。 
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() { 
 
// 发送给好友 
WeixinJSBridge.on('menu:share:appmessage', function(argv){ 
shareFriend(); 
}); 
 
// 分享到朋友圈 
WeixinJSBridge.on('menu:share:timeline', function(argv){ 
shareTimeline(); 
}); 
 
// 分享到微博 
WeixinJSBridge.on('menu:share:weibo', function(argv){ 
shareWeibo(); 
}); 
}, false); 
