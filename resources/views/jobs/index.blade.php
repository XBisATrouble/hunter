@extends('layouts.userApp')
@section('content')
<div class="user_main_content">
	<div class="user_main_left_content">
		<div class="user_main_job_level1">
			<ul class="user_main_job_keylist">
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
			</ul>
		</div>
		<div class="user_main_job_level2">
			<ul class="user_main_job_keylist">
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
			</ul>
		</div>
		<div class="user_main_job_key">
			<ul class="user_main_job_keylist">
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<a href="">
					<li id="">测试</li>
				</a>
				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
			</ul>
		</div>
		<div class="full_small_nav mid_marginbottom gray_bgcolor"></div>
		@foreach($jobs as $job)
		<div class="index_single_item">
			<div class="index_single_item_jobinfo orange"> 
				<div class="per50 right_padding">
					<div class="per50">
						<a class="big blue" href="/">{{ $job->name }}</a>
						<p class="gray margin15">公司名称 : {{ $job->publish->name }}</p>
						<p class="gray margin15">学历要求 : {{ $job->education }}</p>
						<p class="gray margin15">工作地点 : {{ $job->province }}</p>
					</div>
					<div class="per50">
						<div class="user_main_single_jobinfo_button">工作详情</div>
						<p class="orange margin15">薪资 : {{ $job->salary }}</p>
						<p class="gray margin15">工作经验 : {{ $job->experience }}</p>
						<p class="gray margin15">发布时间 : {{ $job->updated_at }}</p>
					</div>
				</div>
				<div class="per50 left_border left_padding">
					<a class="blue big text_align_r" href="">{{ $job->publish->name }}</a>
					<div class="index_single_item_jobinfo_company_avatar"></div>
					<div class="index_single_item_jobinfo_company_info"></div>
				</div>
			</div>
		</div>
		<div class="line_gray"></div>
		@endforeach
		<div class="paginate">{{ $jobs->links() }}</div>
	</div>
	<div class="user_main_right_content"></div>
</div>
@endsection('content')