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
				<div class="index_single_item_jobinfo_salary">18k-10k</div>
				<div class="per50">
					<a class="blue big" href="jobs/{{$job->id}}">{{ $job->name }}</a>
					<p class="gray">
						<span class="gray">工作发布于</span> : {{ $job->created_at }}
					</p>
					<p class="gray" style="height: 88px;">
						<span class="gray">工作简介</span>
						:
						<br>{!! mb_substr($job->description,0,150,"utf-8").'...' !!}</p>
				</div>
				<div class="per50">
					<a class="blue big text_align_r" href="">恽涵有限公司</a>
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