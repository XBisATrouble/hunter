<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hunter</title>
    <link rel="stylesheet" type="text/css" href="/css/normallize.css">
    <link rel="stylesheet" type="text/css" href="/css/user.css">
    <!-- 	<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
-->
</head>
<body>
<div class="user_nav_banner">
    <div class="user_nav_content">
        <ul class="user_nav_search_function">
            <li>搜索功能</li>
            <li>搜索按钮</li>
        </ul>
        @if(Auth::check())
        <ul class="user_nav_user_function">
            <li>
                <img src="{{ Auth::user()->avatar }}"></img>
            </li>
            <li>我的关注</li>
            <li>简历管理</li>
            <li>
                <a id="logout" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">退出</a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </li>
        </ul>
        @else
        <ul class="user_nav_user_function">
            <li><a href="/login">登陆</a></li>
            <li><a href="/register">注册</a></li>
        </ul>
        @endif
    </div>
</div>

<div class="user_main_banenr">
    @yield('content')
</div>

<div class="user_bottom_banner">
    <div class="user_bottom_content"></div>
</div>
</body>
</html>