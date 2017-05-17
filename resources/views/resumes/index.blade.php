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
				<input type="text" class="small" name="user_name">
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
				<input type="text" name="user_city">
				<br>
				最高学历 :
				<input type="text" name="user_education"></div>
			<div class="resume_user_pic per20">
				<input class="resume_user_pic_submit" accept="image/*" type="file" name="user_pic" style="display: none;"></div>
		</div>
		<div class="resume_user_edu_info_banner single_info_banner" style="display: none;">
			<div class="resume_user_edu_info per80">
				学校 :
				<input type="text" name="user_school" class="mid" placeholder="填写所有高校;包括研究生高校">
				<br>
				专业 :
				<input type="text" name="user_major" class="small" style="margin-right: 20px;">
				专业排名 :
				<select name="user_major_rank">
					<option selected="selected" value="1%">1%</option>
					<option value="5%">5%</option>
					<option value="15%">15%</option>
					<option value="25%">25%</option>
					<option value="100%">大于25%</option>
				</select>
				<br>
				在校 :
				<input type="text" name="user_start_edu" class="small" style="margin-right: 20px; margin-bottom: 0;" placeholder="就读时间">
				到
				<input type="text" name="user_end_edu" class="small" placeholder="就读时间" style="margin-bottom: 0;"></div>
		</div>
		<div class="resume_user_company_info_banner single_info_banner" style="display: none;">
			<div class="resume_user_company_info per80">
				公司 :
				<input type="text" name="user_company" class="mid" placeholder="公司名称">
				<br>
				职位 :
				<input type="text" name="user_company_job" class="small">
				<br>
				时间 :
				<input type="text" name="user_start_job" class="small" style="margin-right: 20px;">
				到
				<input type="text" name="user_end_job" class="small">
				<br>
				描述 :
				<input type="text" name="user_job_description" class="big" placeholder="对具体工作的描述" style="margin-bottom: 0;"></div>
		</div>
		<div class="resume_user_schoolexp_info_banner single_info_banner" style="display: none;">
			<div class="resume_user_schoolexp_info per80">
				组织 :
				<input type="text" name="user_school_community" class="mid" placeholder="校内组织">
				<br>
				职位 :
				<input type="text" name="user_school_community_job" class="small" placeholder="校内组织职位名称">
				<br>
				时间 :
				<input type="text" name="user_school_community_job_start" class="small" style="margin-right: 20px;">
				到
				<input type="text" name="user_school_community_job_end" class="small">
				<br>
				描述 :
				<input type="text" name="user_school_community_job_description" class="big" placeholder="曾担任过职位的描述" style="margin-bottom: 0;"></div>
		</div>
		<div class="resume_user_project_info_banner single_info_banner" style="display: none;">
			<div class="resume_user_project_info per80">
				项目 :
				<input type="text" name="user_project" class="mid" placeholder="负责过的项目">
				<br>
				职位 :
				<input type="text" name="user_project_major" class="small" placeholder="负责的部分">
				<br>
				时间 :
				<input type="text" name="user_project_start" class="small" style="margin-right: 20px;">
				到
				<input type="text" name="user_project_end" class="small">
				<br>
				描述 :
				<input type="text" name="user_project_description" class="big" placeholder="对项目的描述" style="margin-bottom: 0;"></div>
		</div>
		<div class="resume_user_hope_info_banner single_info_banner" style="display: none;">
			<div class="resume_user_hope_info per80">
				期望地点 :
				<input type="text" name="user_hope_location" class="mid" placeholder="期望工作地点">
				<br>
				期望职位 :
				<input type="text" name="user_hope_job" class="small" placeholder="期望负责的部分" style="margin-bottom: 0;"></div>
		</div>
		<div class="resume_user_price_info_banner single_info_banner" style="display: none;">
			<div class="resume_user_price_info per80">
				获奖经历 :
				<br>
				<textarea type="text" name="user_price" class="mid" placeholder="获奖经历" style="margin-bottom: 0;"></textarea>
				<br></div>
		</div>
		<div class="resume_user_skill_info_banner single_info_banner" style="display: none;">
			<div class="resume_user_skill_info per80">
				个人技能 :
				<br>
				<textarea type="text" name="user_skill" class="mid" placeholder="对自己的个人技能进行描述" style="margin-bottom: 0;"></textarea>
				<br></div>
		</div>
		<div class="resume_user_self_info_banner single_info_banner" style="display: none;">
			<div class="resume_user_self_info per80">
				自我评价 :
				<br>
				<textarea type="text" name="user_self_description" class="mid" placeholder="进行客观的自我评价" style="margin-bottom: 0;"></textarea>
				<br></div>
		</div>
		<div class="resume_user_essay_info_banner single_info_banner" style="display: none;">
			<div class="resume_user_essay_info per80">
				论文发表 :
				<br>
				<textarea type="text" name="user_essay" class="mid" placeholder="论文发表链接,或文献名称" style="margin-bottom: 0;"></textarea>
				<br></div>
		</div>
		<div class="submit_resume_button_trigger">更新我的简历</div>
		<button class="submit_resume_button" style="display: none;"></button>
	</div>
</div>
<script src="/js/user_function.js"></script>
@endsection