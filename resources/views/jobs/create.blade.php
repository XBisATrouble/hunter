<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>企业网申主页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/normallize.css">
	<link rel="stylesheet" type="text/css" href="css/postJob.css"></head>
	<script type="text/javascript" src="js/city.js"></script>
	<script type="text/javascript" src="lib/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="nav_banner">
		<div class="nav">
			<ul class="nav_list">
				<li>面试管理</li>
				<li>简历管理</li>
				<li>找简历</li>
				<li>发布职位</li>
				<li>首页</li>
				<li class="icon" style="padding: 15px 25px">
					<img src="dist/icon.png"></li>
			</ul>
		</div>
	</div>
	<div class="main_banner">
		<div class="main_content">
			<div class="main_jobs_moduel moduel">
				<form class="job_info" name="job_info" action="">
					<span class="job_tittle">职位信息</span>
					<img src="dist/job.png">
					<input class="job_input" type="text" name="job_name" placeholder="您要发布的职位名称">
					<span class="input_error_msg">错误</span>
					<br>
					<img src="dist/loc.png">
					<select class="job_select job_province" name="job_province" onchange="selectcityarea('job_province','job_city','job_info');">
						<option>选择省份</option>
					</select>
					<select class="job_select job_city" name="job_city">
						<option>选择城市</option>
					</select>
					<input class="job_input mid" type="text" name="job_location" placeholder="详细地址">
					<span class="input_error_msg">错误</span>
					<br>
					<img src="dist/sal.png">
					<input class="job_input moreSmall" type="text" name="job_salary_min" placeholder="薪水(单位K)">
					~
					<input class="job_input moreSmall" type="text" name="job_salary_max" placeholder="薪水(单位K)">
					<span class="input_error_msg">错误</span>
					<br>
					<span class="job_tittle">职位需求</span>
					<img src="dist/type.png">
					<select class="job_select job_level_1">
						<option selected="selected">职能大类</option>
					</select>
					<select class="job_select job_level_2">
						<option selected="selected">职能分类</option>
					</select>
					<select class="job_select job_level_3">
						<option selected="selected">具体工作</option>
					</select>
					<span class="input_error_msg">错误</span>
					<br>
					<img src="dist/exp.png">
					<select class="job_select job_experience" name="job_experience">
						<option selected="selected">工作经验要求</option>
						<option>应届</option>
						<option>3年以下</option>
						<option>三年至五年</option>
						<option>五年至十年</option>
						<option>十年以上</option>
						<option>不限</option>
					</select>
					<span class="input_error_msg">错误</span>
					<br>
					<img src="dist/edu.png">
					<select class="job_select job_education" name="job_education">
						<option selected="selected">学历要求</option>
						<option>博士</option>
						<option>硕士</option>
						<option>本科</option>
						<option>大专</option>
						<option>高中</option>
						<option>不限</option>
					</select>
					<span class="input_error_msg">错误</span>
					<br>
					<img src="dist/des.png">
					<br>
					<textarea class="job_input job_description" name="job_description" placeholder="对您发布的职位待遇以及详情进行描述(必填)"></textarea>
					<input class="post_job_submit_button" type="submit" name="job_info" style="display: none;">
					<div class="post_job_button">发布职位</div>
				</form>
			</div>
		</div>
	</div>
	<div class="botoom_banner">
		<div class="bottom_content"></div>
	</div>
	<script src="js/postJob.js"></script>
	<script type="text/javascript">first("job_province","job_city","job_info",0,0);</script>
</body>
</html>