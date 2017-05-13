<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hunter</title>
    <link rel="stylesheet" type="text/css" href="/css/normallize.css">
    <link rel="stylesheet" type="text/css" href="/css/user.css">
</head>
<body>
<div class="user_nav_banner">
    <div class="user_nav_content">
        <form>
            <ul class="user_nav_search_function">
            <li id="web_icon"><img src="/dist/icon.png"></li>
            <li><a href="" class="full_a">首页</a></li>
            <li><a href="" class="full_a">测试</a></li>
            <li><a href="" class="full_a">求职</a></li>
            <li><a href="" class="full_a">面经</a></li>
            <li><a href="" class="full_a">关于</a></li>
                <li>
                    <input class="search_input" type="text" name="search_key" placeholder="搜索工作">
                </li>
                <li id="search_button">
                    <a class="full_a" href=""><img src="/dist/search.png"></a>
                </li>
            </ul>
        </form>
        @if(Auth::check())
        <ul class="user_nav_user_function">
            <li class="avatar">
                <div class="avatar_banner">
                    <img src="{{ Auth::user()->avatar }}"></div>
            </li>
            <li>
                <a class="full_a" href="">我的关注</a>
            </li>
            <li>
                <a class="full_a" href="">简历管理</a>
            </li>
            <li>
                <a class="full_a" id="logout" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">退出</a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </li>
        </ul>
        @else
        <ul class="user_nav_user_function">
            <li>
                <a class="full_a" href="/login">登陆</a>
            </li>
            <li>
                <a class="full_a" href="/register">注册</a>
            </li>
        </ul>
        @endif
    </div>
</div>

<div class="user_main_banenr">@yield('content')</div>

<div class="user_bottom_banner">
    <div class="user_bottom_content"></div>
</div>
</body>
</html>