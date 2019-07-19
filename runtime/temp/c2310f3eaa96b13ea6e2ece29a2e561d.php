<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"/home/wwwroot/ke.lnmp.org/tp5/public/../app/index/view/index/list.html";i:1563456887;s:56:"/home/wwwroot/ke.lnmp.org/tp5/app/index/view/layout.html";i:1563456819;}*/ ?>
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
        <div id="img-show">
    <img src="" alt="">
</div>
<div id="container">
    <ul class="list">
        <li hidden>
            <img src="img/1.jpg">
            <h4>厉害了我的国</h4>
            <small>2019-10-1</small>
        </li>
    </ul>
</div>
<script>
    $(document).ready(()=>{
        $.getJSON("?s=index/index/listAPI&id=<?php echo $id; ?>",(res)=>{
            if (res.code!=200){
                location.href="/";
                return;
            }
            document.title=res.data.info.name;
            $("#title").text(res.data.info.name);
            $("#img-show img").attr("src",res.data.info.pic)
            $(".list").empty();
            for (let li of res.data.list){
                let html=`
                 <li onclick='location.href="?s=index/index/info&id=${li.id}"'>
                    <img src="${li.pic}">
                    <h4>${li.title}</h4>
                    <small>${li.date}</small>
                </li>
                `
                $(".list").append(html);
            }
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