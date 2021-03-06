@extends('layouts.userApp')
@section('content')
<div class="main_content">
	<script src="/js/sweetalert.min.js"></script>
	@include('sweet::alert')
	<div class="job_simple_des_tag">
		<p class="job_name">{{ $job->name }}</p>
		<p class="job_from">Hunter</p>
		<div class="job_simple_des_tag_tan"></div>
	</div>
	<div class="job_des_moduel moduel">
		<div class="job_simple_des">
			<p class="job_salary">
				<img src="/dist/sal.png">{{ $job->salary }}</p>
			<p class="job_location">
				<img src="/dist/loc.png">{{ $job->province }} {{ $job->city }} {{ $job->address }}</p>
			<p class="job_experience">
				<img src="/dist/exp.png">{{ $job->experience }}</p>
			<p class="job_education">
				<img src="/dist/edu.png">{{ $job->education }}</p>
			<p class="job_advantage">
				<img src="/dist/dia.png">{{ $job->advantage }}</p>
			<div class="line"></div>
			<p>
				<span class="strong">工作简介</span>
				:
			</p>
			<p>{!! $html !!}</p>
			<div class="line"></div>
			<div class="job_company_description">
				<div class="company_brief">
					<p>
						<span class="strong">公司介绍</span>
						:
					</p>
					{{ $job->publish->description }}
				</div>
				<div class="job_from_location"></div>
			</div>
		</div>
		<div class="job_recommend_banner">
			<div class="company_avatar">
				<div class="company_avatar_banner">
					<img src="{{ $job->publish->avatar }}"></div>
				<span class="float_left">{{ $job->publish->name }}</span>
			</div>
			<div>
				<p class="job_recommend_banner_company_type p_company_info">发布工作个数 : {{ $job->publish->job_count }}</p>
				<p class="job_recommend_banner_company_mainjob p_company_info">公司主营方向 : {{ $job->publish->direction }}</p>
				<p class="job_recommend_banner_company_phone p_company_info">公司规模 : {{ $job->publish->people_number }}人</p>
				<p class="job_recommend_banner_company_phone p_company_info">
					公司首页 :
					<a href="{{ $job->publish->home_url }}">{{ $job->publish->name }}</a>
				</p>
				<p class="job_recommend_banner_company_phone p_company_info">联系电话 : {{ $job->publish->phone }} </p>
			</div>
		</div>
	</div>
	<div class="job_des_moduel_buttons">
		@if(Auth::check())
		<div class="job_des_moduel_buttons_banner">
			{{--<div class="normal_button {{ Auth::user()->followed($job->id)?'followed_button':'follow_button' }}">--}}
				{{--<a href="/job/{{ $job->id }}/follow">{{ Auth::user()->followed($job->id)?'已关注':'关注该工作' }}</a>--}}
			{{--</div>--}}
			<div id="app">
				<job-follow-button job="{{ $job->id }}"></job-follow-button>
			</div>
			@if(Auth::user()->hasResume())
			<div class="normal_button {{ $job->hasPosted(Auth::user()->resume->id) ? 'followed_button' : 'sendresume_button ' }}">
				<a href="/resume/{{ $job->id }}/post">{{ $job->hasPosted(Auth::user()->resume->id) ? '已投送' : '投送简历' }}</a>
			</div>
			@else
			<div class="normal_button sendresume_button">
				<a href="/resume/{{ $job->id }}/post">投送简历</a>
			</div>
			@endif
		</div>
		@else
		<div class="job_des_moduel_buttons_banner">
		<div class="sendresume_button normal_button">
			<a href="/login">登录投简历</a>
		</div>
		</div>
		@endif
	</div>
</div>
@endsection('content')