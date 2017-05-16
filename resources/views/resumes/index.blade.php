@extends('layouts.userApp')
@section('content')
<div class="user_main_content">
	<div class="resume_model_edit">
		<ul class="resume_model_edit_list">
			<li>基本信息</li>
			<li>个人照片</li>
			<li>
				教育经历
				<div class="checkcube"></div>
			</li>
			<li>
				工作经历
				<div class="checkcube"></div>
			</li>
			<li>
				校内经历
				<div class="checkcube"></div>
			</li>
			<li>
				项目经历
				<div class="checkcube"></div>
			</li>
			<li>
				求职意向
				<div class="checkcube"></div>
			</li>
			<li>
				获奖情况
				<div class="checkcube"></div>
			</li>
			<li>
				个人技能
				<div class="checkcube"></div>
			</li>
			<li>
				自我评价
				<div class="checkcube"></div>
			</li>
			<li>
				论文发表
				<div class="checkcube"></div>
			</li>
		</ul>
	</div>
	<div class="resume_model">
		<div class="resume_user_base_info_banner single_info_banner">
			<div class="resume_user_base_info per80">
				我的姓名 :
				<input type="text" class="small">
				<br>
				我的性别 :
				<select name="user_sex">
					<option selected="selected">女</option>
					<option>男</option>
				</select>
				<br>
				出生年份 :
				<select name="user_year">
					<option selected="selected">2017</option>
				</select>
				<select name="user_month">
					<option selected="selected" value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
				<select name="user_day">
					<option selected="selected" value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
				</select>
				<br>
				所在城市 :
				<input type="text">
				<br>
				最高学历 :
				<input type="text"></div>
			<div class="resume_user_pic per20"></div>
		</div>
		<div class="resume_user_edu_info_banner single_info_banner">
			<div class="resume_user_edu_info per80">
				我的姓名 :
				<input type="text" class="small">
				<br>
				我的性别 :
				<select name="user_sex">
					<option selected="selected">女</option>
					<option>男</option>
				</select>
				<br>
				出生年份 :
				<select name="user_year">
					<option selected="selected">2017</option>
				</select>
				<select name="user_month">
					<option selected="selected" value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
				<select name="user_day">
					<option selected="selected" value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
				</select>
				<br>
				所在城市 :
				<input type="text">
				<br>
				最高学历 :
				<input type="text"></div>
		</div>
	</div>
</div>
<script src="/js/user_function.js"></script>
@endsection