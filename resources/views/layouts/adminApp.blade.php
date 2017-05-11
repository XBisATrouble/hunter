<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>企业网申主页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/normallize.css">
    <link rel="stylesheet" type="text/css" href="/css/postJob.css">
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div class="nav_banner">
        <div class="nav">
            <ul class="nav_list">
                <li>
                    <a href="">面试管理</a>
                </li>
                <li>
                    <a href="">简历管理</a>
                </li>
                <li>
                    <a href="">找简历</a>
                </li>
                <li>
                    <a href="/admin/jobs">职位管理</a>
                </li>
                <li>
                    <a href="/admin/jobs/create">发布职位</a>
                </li>
                <li>
                    <a href="/admin" class="full_a">首页</a>
                </li>
                <li class="icon" style="padding: 15px 25px">
                    <img src="/dist/icon.png"></li>
            </ul>
            <ul class="nav_user_function">
                <li class="avatar">
                    <img src="{{ Auth::guard('admin')->user()->avatar }}"></li>
                <li>
                    <a href="">{{ Auth::guard('admin')->user()->name }}</a>
                    <ul class="nav_user_menu">
                        <li>示例连接</li>
                        <li>示例连接</li>
                        <li>
                            <a id="logout" href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">退出</a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="main_banner">@yield('content')</div>
    <div class="botoom_banner">
        <div class="bottom_content"></div>
    </div>
</body>
</html>