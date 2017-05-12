@extends('layouts.adminApp')
<script type="text/javascript" src="/js/city.js"></script>
@section('content')
<div class="main_content">
	<div class="job_des_moduel moduel">
		<div class="job_simple_des">
			<div class="job_simple_des_tag">
				<p class="job_name">{{ $job->name }}</p>
				<p class="job_from">
					Hunter</p>
				<div class="job_simple_des_tag_tan"></div>
			</div>
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
			<p class="job_description">{!! $job->description !!}</p>
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
			<div class="actions">
				@if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->owns($job))
				<div class="edit_button job_show_action_button">
					<a href="/admin/jobs/{{$job->id}}/edit" class="full_a">编辑</a>
				</div>
				<div class="delete_button job_show_action_button">删除
					<form action="/admin/jobs/{{$job->id}}" method="POST" class="delete-form">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<button class="button_normal delete_function_button">删除</button>
					</form>
				</div>
				<p class="job_creatat">工作发布于 : {{ $job->created_at }}</p>
				@endif
			</div>
		</div>
		<div class="job_recommend_banner">
			<div class="company_avatar">
				<div class="company_avatar_banner">
					<img src="{{ Auth::guard('admin')->user()->avatar }}"></div>
				<span class="float_left">{{ Auth::guard('admin')->user()->name }}</span>
			</div>
			<div>
				<p class="job_recommend_banner_company_type p_company_info">发布工作个数 : 500</p>
				<p class="job_recommend_banner_company_mainjob p_company_info">公司主营方向 : 电商</p>
				<p class="job_recommend_banner_company_phone p_company_info">公司规模 : 3000人</p>
				<p class="job_recommend_banner_company_phone p_company_info">面试轮数 : 5</p>
				<p class="job_recommend_banner_company_phone p_company_info">联系电话 : 010-01010101</p>
			</div>
		</div>
	</div>
</div>
<script src="/js/delete_function.js"></script>
@endsection('content')