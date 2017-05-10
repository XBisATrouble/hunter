@extends('layouts.adminApp')
<script type="text/javascript" src="/js/city.js"></script>
@section('content')
<div class="main_content">
	<div class="job_des_moduel moduel">
		<div class="job_simple_des">
			<div class="job_simple_des_tag">
				<p class="job_name">{{ $job->name }}</p>
				<p class="job_from">{{ $job->classes->name }}</p>
				<div class="job_simple_des_tag_tan"></div>
			</div>
			<p class="job_salary"><img src="/dist/sal.png">{{ $job->salary }}</p>
			<p class="job_location"><img src="/dist/loc.png">{{ $job->province }} {{ $job->city }} {{ $job->address }}</p>
			<p class="job_experience"><img src="/dist/exp.png">{{ $job->experience }}</p>
			<p class="job_education"><img src="/dist/edu.png">{{ $job->education }}</p>
			<div class="line"></div>
			<p class="job_description">
				{!! $job->description !!}
			</p>
			<div class="line"></div>
			<div class="job_company_description">
				{{ $job->publish->name }}
			</div>
			<div class="actions">
				@if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->owns($job))
					<span class="edit"><a href="/admin/jobs/{{$job->id}}/edit">编辑</a></span>
					<form action="/admin/jobs/{{$job->id}}" method="POST" class="delete-form">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<button class="button is-naked delete-button">删除</button>
					</form>
				@endif
			</div>
		</div>
		<div class="job_hr_banner"></div>
	</div>
</div>
@endsection('content')