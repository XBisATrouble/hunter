<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>企业网申主页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/normallize.css">
	<link rel="stylesheet" type="text/css" href="/css/login.css"></head>
<body>
	<div class="main_banner" style="min-width: 300px;min-height: 700px;">
		<div class="main_l_page main_page">
			<div class="main_l_tan main_tan"></div>
			<div class="main_user_input_banner">
				<form action="{{ url('register') }}" method="post" id="user" name="user" style="height: 100%;">
					<input class="user_input input" type="text" name="email" id="email" placeholder="请使用邮箱注册">
					<input class="user_input input" type="text" name="name" id="name" placeholder="请输入您的真实姓名">
					<input class="user_input input" type="password" name="password" id="password" placeholder="请输入您的密码">
					<input class="user_submit" type="submit" name="user_info" style="display: none;">
					{{ csrf_field() }}
					<div class="user_button_banner">
						<div class="user_input_submit_button input_button signin user_button reg" style="width:100%">注册</div>
					</div>
				</form>
			</div>
			<img class="company" src="dist/qiye.png"></div>
		<div class="main_r_page main_page">
			<div class="main_r_tan main_tan"></div>
			<div class="main_company_input_banner">
				<form action="{{ url('admin/register') }}" method="post" style="height: 100%">
					<input class="company_input input" type="text" name="email" placeholder="请使用邮箱注册">
					<input class="company_input input" type="text" name="name" placeholder="请输入公司名称">
					<input class="company_input input" type="password" name="password" placeholder="请输入您的密码">
					<input class="company_submit" type="submit" name="company_info" style="display: none;">
					{{ csrf_field() }}
					<div class="company_button_banner">
						<div class="company_input_submit_button input_button signin company_button reg" style="width:100%">注册</div>
					</div>
				</form>
			</div>
			<img class="user" src="dist/yonghu.png"></div>
	</div>
	<div class="mobile_user_input_banner" style="display: none;">
		<input class="mobile_user_input" type="text" name="user_email" placeholder="请使用邮箱注册">
		<input class="mobile_user_input" type="text" name="user_name" placeholder="请输入您的真实姓名">
		<input class="mobile_user_input" type="password" name="user_password" placeholder="请输入您的密码"></div>
	<script src="/js/login.js"></script>
	<script src="/js/initRem.js"></script>
</body>
</html>