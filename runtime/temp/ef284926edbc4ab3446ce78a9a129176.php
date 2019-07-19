<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"/home/wwwroot/ke.lnmp.org/tp5/public/../app/index/view/index/info.html";i:1563456852;s:56:"/home/wwwroot/ke.lnmp.org/tp5/app/index/view/layout.html";i:1563456819;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>红细胞e站</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/tp5/hxb/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/tp5/hxb/static/css/common.css">
    <script src="/tp5/hxb/static/js/jquery.js"></script>
</head>
<body>
<header>
    <h4 id="title">
        红细胞e站
    </h4>
</header>
    <main>
        <div style="margin: 9px">
    <a href="" onclick="history.back();return false;">返回</a>
</div>
<img src="" style="width: 100%" id="info-img">
<pre></pre>
<script>
    $(document).ready(()=>{
        $.getJSON("?s=index/index/infoAPI&id=<?php echo $id; ?>",(res)=>{
            if (res.code!=200){
                location.href="/";
                return;
            }
            document.title=res.data.title;
            $("#title").text(res.data.title);
            $("#info-img").attr("src",res.data.pic)
            $("pre").empty();
            $("pre").html(res.data.content);
        })
    })
</script>
    </main>
<footer>
    <nav>
        <a href="?">首页</a>
        <a href="">课程</a>
        <a href="">我的</a>
    </nav>
</footer>
<script src="/tp5/hxb/static/js/bootstrap.min.js"></script>
<script src="/tp5/hxb/static/js/main.js"></script>
</body>
</html>