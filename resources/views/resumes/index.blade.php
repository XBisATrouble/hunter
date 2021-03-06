@extends('layouts.userApp')
@section('content')
<div class="user_main_content">
	<div class="resume_model_edit">
		<ul class="resume_model_edit_list">
			<li>基本信息</li>
			<li>个人照片</li>
			<li>
				教育经历
				<div class="checkcube {{ $resume->school==''?'':'checkcube_checked' }}"></div>
			</li>
			<li>
				工作经历
				<div class="checkcube {{ $resume->job_company==''?'':'checkcube_checked' }}"></div>
			</li>
			<li>
				校内经历
				<div class="checkcube {{ $resume->school_name==''?'':'checkcube_checked' }}"></div>
			</li>
			<li>
				项目经历
				<div class="checkcube {{ $resume->project_name==''?'':'checkcube_checked' }}"></div>
			</li>
			<li>
				求职意向
				<div class="checkcube {{ $resume->expected_work_place==''?'':'checkcube_checked' }}"></div>
			</li>
			<li>
				获奖情况
				<div class="checkcube {{ $resume->awards==''?'':'checkcube_checked' }}"></div>
			</li>
			<li>
				个人技能
				<div class="checkcube {{ $resume->skills==''?'':'checkcube_checked' }}"></div>
			</li>
			<li>
				自我评价
				<div class="checkcube {{ $resume->evaluations==''?'':'checkcube_checked' }}"></div>
			</li>
			<li>
				论文发表
				<div class="checkcube {{ $resume->papers==''?'':'checkcube_checked' }}"></div>
			</li>
			<li style="border: none;">
				<div class="see_resume_button">
					<a href="resumes/{{ $resume->id }}" class="full_a">简历预览</a>
				</div>
			</li>
		</ul>
	</div>
	<div class="resume_model">
		<form action="/resumes" method="post">
			{{ csrf_field() }}
			<div class="resume_user_base_info_banner single_info_banner">
				<div class="resume_user_base_info per80">
					我的姓名 :
					<input type="text" class="small" name="name" readonly="readonly" value="{{ Auth::user()->
					name }}">
					<br>
					我的性别 :
					<select name="gender">
						<option selected="selected" value="1">{{ $resume->gender }}</option>
						<option value="1">男</option>
						<option value="0">女</option>
					</select>
					<br>
					出生年份 :
					<select name="birthday_year">
						<option selected="selected">1980</option>
						@for($i=1958;$i
						<=2016;$i++)
							<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
					<select name="birthday_month">
						<option selected="selected" value="1">1</option>
						@for($i=2;$i
						<=12;$i++)
							<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
					<br>
					所在城市 :
					<input type="text" name="city" value="{{ $resume->
					city }}">
					<br>
					最高学历 :
					<input type="text" name="edulevel" value="{{ $resume->edulevel }}"></div>
				<div class="resume_user_pic">
				<div class="resume_user_pic_tip">
					点击修改头像
				</div>
					{{--
					<img id="preview" />
					--}}
					{{--
					<input class="resume_user_pic_submit" accept="image/*" type="file" name="photo" onchange="imgPreview(this)" style="display: none;">
					--}}
					<div id="app">
						<resume-photo avatar="{{ $resume->photo }}"></resume-photo>
					</div>
				</div>
			</div>
			<div class="resume_user_edu_info_banner single_info_banner" style="{{ $resume->
				school==''?'display:none':'display:block' }}">
				<div class="resume_user_edu_info per80">
					学校 :
					<input type="text" name="school" class="mid" placeholder="填写所有高校;包括研究生高校" value="{{ $resume->
					school }}">
					<br>
					专业 :
					<input type="text" name="major" class="small" style="margin-right: 20px;" value="{{ $resume->
					major }}">
					专业排名 :
					<select name="major_rank">
						<option selected="selected" value="{{ $resume->major_rank }}">{{ $resume->major_rank }}</option>
						<option value="1%">1%</option>
						<option value="5%">5%</option>
						<option value="15%">15%</option>
						<option value="25%">25%</option>
						<option value="100%">大于25%</option>
					</select>
					<br>
					在校 :
					<input type="text" name="edu_start" class="small" style="margin-right: 20px; margin-bottom: 0;" placeholder="就读时间" value="{{ $resume->
					edu_start }}">
					到
					<input type="text" name="edu_end" class="small" placeholder="就读时间" style="margin-bottom: 0;" value="{{ $resume->edu_end }}"></div>
			</div>
			<div class="resume_user_company_info_banner single_info_banner" style="{{ $resume->
				job_company==''?'display:none':'display:block' }}">
				<div class="resume_user_company_info per80">
					公司 :
					<input type="text" name="job_company" class="mid" placeholder="公司名称" value="{{ $resume->
					job_company }}">
					<br>
					职位 :
					<input type="text" name="job_position" class="small" value="{{ $resume->
					job_position }}">
					<br>
					时间 :
					<input type="text" name="job_start" class="small" style="margin-right: 20px;" value="{{ $resume->
					job_start }}">
					到
					<input type="text" name="job_end" class="small" value="{{ $resume->
					job_end }}">
					<br>
					描述 :
					<input type="text" name="job_description" class="big" placeholder="对具体工作的描述" style="margin-bottom: 0;" value="{{ $resume->job_description }}"></div>
			</div>
			<div class="resume_user_schoolexp_info_banner single_info_banner" style="{{ $resume->
				school_name==''?'display:none':'display:block' }}">
				<div class="resume_user_schoolexp_info per80">
					组织 :
					<input type="text" name="school_name" class="mid" placeholder="校内组织" value="{{ $resume->
					school_name }}">
					<br>
					职位 :
					<input type="text" name="school_position" class="small" placeholder="校内组织职位名称" value="{{ $resume->
					school_position }}">
					<br>
					时间 :
					<input type="text" name="school_start" class="small" style="margin-right: 20px;" value="{{ $resume->
					school_start }}">
					到
					<input type="text" name="school_end" class="small" value="{{ $resume->
					school_end }}">
					<br>
					描述 :
					<input type="text" name="school_description" class="big" placeholder="曾担任过职位的描述" style="margin-bottom: 0;" value="{{ $resume->school_description }}"></div>
			</div>
			<div class="resume_user_project_info_banner single_info_banner" style="{{ $resume->
				project_name==''?'display:none':'display:block' }}">
				<div class="resume_user_project_info per80">
					项目 :
					<input type="text" name="project_name" class="mid" placeholder="负责过的项目" value="{{ $resume->
					project_name }}">
					<br>
					职位 :
					<input type="text" name="project_position" class="small" placeholder="负责的部分" value="{{ $resume->
					project_position }}">
					<br>
					时间 :
					<input type="text" name="project_start" class="small" style="margin-right: 20px;" value="{{ $resume->
					project_start }}">
					到
					<input type="text" name="project_end" class="small" value="{{ $resume->
					project_end }}">
					<br>
					描述 :
					<input type="text" name="project_description" class="big" placeholder="对项目的描述" style="margin-bottom: 0;" value="{{ $resume->project_description }}"></div>
			</div>
			<div class="resume_user_hope_info_banner single_info_banner" style="{{ $resume->
				expected_work_place==''?'display:none':'display:block' }}">
				<div class="resume_user_hope_info per80">
					期望地点 :
					<input type="text" name="expected_work_place" class="mid" placeholder="期望工作地点" value="{{ $resume->
					expected_work_place }}">
					<br>
					期望职位 :
					<input type="text" name="expected_work_position" class="small" placeholder="期望负责的部分" style="margin-bottom: 0;" value="{{ $resume->expected_work_position }}"></div>
			</div>
			<div class="resume_user_price_info_banner single_info_banner" style="{{ $resume->
				awards==''?'display:none':'display:block' }}">
				<div class="resume_user_price_info per80">
					获奖经历 :
					<br>
					<textarea type="text" name="awards" class="mid" placeholder="获奖经历" style="margin-bottom: 0;">{{ $resume->awards }}</textarea>
					<br></div>
			</div>
			<div class="resume_user_skill_info_banner single_info_banner" style="{{ $resume->
				skills==''?'display:none':'display:block' }}">
				<div class="resume_user_skill_info per80">
					个人技能 :
					<br>
					<textarea type="text" name="skills" class="mid" placeholder="对自己的个人技能进行描述" style="margin-bottom: 0;">{{ $resume->skills }}</textarea>
					<br></div>
			</div>
			<div class="resume_user_self_info_banner single_info_banner" style="{{ $resume->
				evaluations==''?'display:none':'display:block' }}">
				<div class="resume_user_self_info per80">
					自我评价 :
					<br>
					<textarea type="text" name="evaluations" class="mid" placeholder="进行客观的自我评价" style="margin-bottom: 0;">{{ $resume->evaluations }}</textarea>
					<br></div>
			</div>
			<div class="resume_user_essay_info_banner single_info_banner" style="{{ $resume->
				papers==''?'display:none':'display:block' }}">
				<div class="resume_user_essay_info per80">
					论文发表 :
					<br>
					<textarea type="text" name="papers" class="mid" placeholder="论文发表链接,或文献名称" style="margin-bottom: 0;">{{ $resume->papers }}</textarea>
					<br></div>
			</div>
			<div class="button_banner">
				<div class="submit_resume_button_trigger">更新我的简历</div>
			</div>
			<button class="submit_resume_button" style="display: none;"></button>
		</form>
	</div>
</div>
<script src="/js/user_function.js"></script>
@endsection