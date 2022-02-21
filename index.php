<head>
    <meta charset="utf-8">
    <title>布鲁 | github图床 - 布鲁网络www.i8o.cc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/mdui/css/mdui.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"/>
    <link rel="stylesheet" href="/css/main.css">
    <!-- 背景 -->
    <link rel="stylesheet" href="/css/index.css">
     <!-- 头像 --> 
    <link rel="icon" href="https://cdn.jsdelivr.net/gh/7ik/image/122127mxhnsh088oxh3zmp.png.icon.ico">
</head>
<body>
  <div id="container">
    <video id="background_video" loop muted></video>
    <div id="video_cover"></div>
    <div id="overlay"></div>

    <div id="video_controls">
      <span id="play">
        <img src="play.png">
      </span>
      <span id="pause">
        <img src="pause.png">
      </span>
    </div>
    <section id="main_content">
      
    <div id="rin-headimg"></div>
    <div class="rin-name">布鲁</div>
    <div class="rin-description"><h2> 
    <script type="text/javascript" src="https://yi.i8o.cc/yyan/?format=js&=utf-8"></script> 
    <script>yyan()</script>
    </h2></div>
    <div class="rin-tr"></div>
    <div id="links">
       <a class="mdui-btn mdui-btn-raised rin-btn mdui-text-capitalize"  style="font-size: 30px;display: inline; cursor: pointer" onclick="myimg.click()"> 🔝 </a>
      </div>
     <br>
     
  <center>
<font size="4" color="#7FFFD4" face="Helvetica"> <div id="neirong"></div> </font>
     </center> 
<div id="head">
        <div id="rin-bg"></div>
             <main id="rin-main">
                 
  </div>
</main>
 <input type="file" id="myimg" onchange="imgChange(this)" style="visibility: hidden;" accept="image/png,image/gif,image/jpeg">
 
 <div class="panel panel-primary">
      <div class="panel-body">

    </div>
    </div>
    </section>
<footer id="rin-footer">
    <div>©2020-2021 Blue. | Made with love by Blue. | BG: <a href="https://cdn.jsdelivr.net/gh/用户名/仓库名@main/">
	   <img class="badge" src="https://data.jsdelivr.com/v1/package/gh/用户名/仓库名/badge"></a>
		</div>
</footer>
<script src="bideo.js"></script>
  <script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/gh/AyagawaSeirin/homepage@double/mdui/js/mdui.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/AyagawaSeirin/homepage@double/assets/js/main.js"></script>
<script src="https://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
function uploadimg(file){
      var timestamp=new Date().getTime();//获取时间戳
      var nameofimg=timestamp+"."+houzhui;//以事件戳重命名
      var picurl="https://cdn.jsdelivr.net/gh/用户名/仓库名@main/"+nameofimg;
    var settings = {
    "url": "https://api.github.com/repos/用户名/仓库名/contents/"+nameofimg,
    "method": "PUT",
    "timeout": 0,
    "headers": {
        "Authorization": "Bearer 这里填写生成的tokens",
        "Content-Type": "text/plain"
    },
    "data": "{\r\n  \"message\": \"upload\",\r\n  \"content\": \""+ file +"\"\r\n}",
    };
    $.ajax(settings).done(function (response) {
        imgurlmd="Markdown:![]("+picurl+")";//markdown格式的链接
        url="Imgurl:"+picurl;//图片原链接
        my="My:{% fb_img "+picurl+"  "+nameofimg+" %}";//自定义的格式，这里是我的自定义
        var final="<li>"+imgurlmd+"</li>"+"<li>"+url+"</li>"+"<li>"+my+"</li>";
        document.getElementById("neirong").innerHTML=final;//写道html里面
    });
}
function imgChange(img) {
    const reader = new FileReader();
    reader.onload = function (ev) {
        var imgFile =ev.target.result;//imgFile就是图片的base64编码
        base64url=imgFile.replace(/(.*)?,/,'');//用正则消除前面的data之类的字符
        // console.log(imgFile);
        houzhui = imgFile.substring( imgFile.indexOf("/") + 1, imgFile.indexOf(";") );//获取图片原本的格式
        uploadimg(base64url);//上传
    }
    reader.readAsDataURL(img.files[0]);
}
//按键触发 

 document.onkeydown = function(){
            //禁止 ctrl+u
            if (event.ctrlKey && window.event.keyCode==85){
                return false;
            }
            //禁止 F12
            if (window.event && window.event.keyCode == 123) {
                event.keyCode = 0;
                event.returnValue = false;
            }
     }
</script>
</body>
</html>