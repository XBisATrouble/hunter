<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>企业网申主页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/normallize.css">
    <link rel="stylesheet" type="text/css" href="/css/postJob.css"></head>
    <script type="text/javascript" src="/js/city.js"></script>
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div class="nav_banner">
        <div class="nav">
            <ul class="nav_list">
                <li><a href="">面试管理</a></li>
                <li><a href="">简历管理</a></li>
                <li><a href="">找简历</a></li>
                <li><a href="">职位管理</a></li>
                <li><a href="">发布职位</a></li>
                <li><a href="">首页</a></li>
                <li class="icon" style="padding: 15px 25px">
                    <img src="/dist/icon.png"></li>
            </ul>
            <ul class="nav_user_function">
                <li class="avatar"><img src=""></li>
                <li><a href="">阿里巴巴</a></li>
                <li><a href="">退出</a></li>
            </ul>
        </div>
    </div>

    <div class="main_banner">@yield('content')</div>
    <div class="botoom_banner">
        <div class="bottom_content"></div>
    </div>
    <script src="/js/postJob.js"></script>
    <script type="text/javascript">first("job_province","job_city","job_info",0,0);</script>
</body>
</html>