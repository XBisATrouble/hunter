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
        <ul class="user_nav_user_function">
            <li>我的关注</li>
            <li>简历管理</li>
            <li>退出</li>
        </ul>
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