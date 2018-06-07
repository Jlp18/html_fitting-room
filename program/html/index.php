<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
<link rel="stylesheet" href="../css/css.css" media="all" type="text/css">
<script src="../js/jquery-1.11.2.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/jquery.cookies.2.2.0.js"></script>
<link rel="stylesheet" href="../css/style.css" type="text/css">
    <script>
    $(document).ready(function() {
           if($.cookies.get('userName') != '' && $.cookies.get('userName') != null && $.cookies.get('userName') != undefined){
               $("#login").html($.cookies.get('userName'));
           }
        $('.theme-login').click(function(){
            $('.theme-popover-mask').fadeIn(100);
            $('.theme-popover').slideDown(200);
        });
        $('.theme-poptit .close').click(function(){
            $('.theme-popover-mask').fadeOut(100);
            $('.theme-popover').slideUp(200);
        });

        $('#submit').click(function(){
            $.get("login.php",{name:$("#log").val(),ps:$("#psw").val()}, function (date) {
                $('#nameError').fadeOut(10);
                $('#nameSpace').fadeOut(10);
                $('#pswSpace').fadeOut(10);
                $('#pswError').fadeOut(10);
                if(date == '1'){//用户名为空
                    $('#nameSpace').fadeIn(10);
                }else if(date == '2'){//密码为空
                    $('#pswSpace').fadeIn(10);
                }else if (date == '3'){//无用户名
                    $('#nameError').fadeIn(10);
                }else if(date == '4'){
                    $('#nameError').fadeOut(10);
                    $('#nameSpace').fadeOut(10);
                    $('#pswSpace').fadeOut(10);
                    $('#pswError').fadeOut(10);
                    $('.theme-popover-mask').fadeOut(100);
                    $('.theme-popover').slideUp(200);
                    if($.cookies.get('userName') != '' && $.cookies.get('userName') != null && $.cookies.get('userName') != undefined){
                        $("#login").html($.cookies.get('userName'));
                    }
                }else if(date == '5'){
                    alert("yulandfadf");
                    $('#pswError').fadeIn(10);
                }
            })
        });
})
</script>

</head>
<body bgcolor="#EDEDE2">
<div class="quanbu" >

<img src="../images/Hot.png"  class="hl" id=Hot2  onMouseOver="this.className='hl htp'" onMouseOut="this.className='hl'">
<img id=Search src="../images/Search.png"  onMouseOver="this.className='sl htp'" onMouseOut="this.className='sl'" class="sl">
<img id=Classify src="../images/Classify.png"  onMouseOver="this.className='cl htp'" onMouseOut="this.className='cl'" class="cl">
<a href="share.html"target="_blank"><img id=Share src="../images/Share.png"  onMouseOver="this.className='shl htp'" onMouseOut="this.className='shl'" class="shl"></a>
<img id=Collect src="../images/Collect.png"  onMouseOver="this.className='col htp'" onMouseOut="this.className='col'" class="col">
<img id=Personal src="../images/Personal.png"  onMouseOver="this.className='Pl htp'" onMouseOut="this.className='Pl'" class="Pl">
<a href="http://www.taobao.com/"target="_blank"><img id="Taobao" src="../images/Taobao.png"  onMouseOver="this.className='Tl htp'" onMouseOut="this.className='Tl'" class="Tl"></a>
<a href="http://www.jd.com/"target="_blank"><img id="Jd" src="../images/Jd.png"  onMouseOver="this.className='Jl htp'" onMouseOut="this.className='Jl'" class="Jl"></a>
<a href="http://www.amazon.cn/"target="_blank"><img id="Jd" src="../images/Amazon.png"  onMouseOver="this.className='Al htp'" onMouseOut="this.className='Al'" class="Al"></a>
<img id="Jd" src="../images/Ce.png"   class="Cel">
<div class="d"> COPYRIGHT@2015.03 BEGObego</div>
<img id=Biao src="../images/Biao.png" class="biao">

</div>
<div class="zhuce"><a href="register.html" target="_self">注册</a></div>

<div class="theme-buy">
<a class=" btn-large theme-login" href="javascript:;" id="login">登陆</a>
</div>
<div class="theme-popover">
     <div class="theme-poptit">
          <a href="javascript:;" title="关闭" class="close">×</a>
          <h3>登陆了就再也不能回头了！</h3>
     </div>
     <div class="theme-popbod dform">
           <form class="theme-signin" name="loginform" action="" method="get">
                <ol>
                     <li><h4>请再下面登陆</h4></li>
                     <li><strong>用户名：</strong><input class="ipt" type="text" id="log" value="扬哥" size="20" /><span id="nameError" class="red">*用户名错误</span><span id="nameSpace" class="red">*用户名空</span></li>
                     <li><strong>密码：</strong><input class="ipt" type="password" id="psw" value="***" size="20" /><span id="pswError" class="red">*密码错误</span><span id="pswSpace" class="red">*密码为空</span></li>
                     <li><input class="btnn btn-primary" type="button" id="submit" value=" 登 录 " /></li>
                </ol>
           </form>
     </div>
</div>
<div class="theme-popover-mask"></div>


</body>
</html>