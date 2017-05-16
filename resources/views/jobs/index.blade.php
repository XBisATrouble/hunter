@extends('layouts.userApp')
@section('content')
<div class="user_main_content">
	<div class="user_main_left_content">
		<div class="user_main_job_level1">
			<ul class="user_main_job_keylist">
				<li class="li_nohover_bgcolor">工作地点：</li>
				<a href="/results">
					<li id="">不限</li>
				</a>
				<a href="">
					<li id="">北京</li>
				</a>
				<a href="/results?q=上海">
					<li id="">上海</li>
				</a>
				<a href="/results?q=深圳">
					<li id="">深圳</li>
				</a>
				<a href="/results?q=广州">
					<li id="">广州</li>
				</a>
				<a href="/results?q=杭州">
					<li id="">杭州</li>
				</a>
				<a href="/results?q=成都">
					<li id="">成都</li>
				</a>
				<a href="/results?q=南京">
					<li id="">南京</li>
				</a>
				<a href="/results?q=武汉">
					<li id="">武汉</li>
				</a>
				<a href="/results?q=西安">
					<li id="">西安</li>
				</a>
				<a href="/results">
					<li id="">更多</li>
				</a>
				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
			</ul>
		</div>
		<div class="user_main_job_level2">
			<ul class="user_main_job_keylist">
				<li class="li_nohover_bgcolor">学历要求：</li>
				<a href="/results">
					<li id="">不限</li>
				</a>
				<a href="/results?q=博士">
					<li id="">博士</li>
				</a>
				<a href="/results?q=硕士">
					<li id="">硕士</li>
				</a>
				<a href="/results?q=本科">
					<li id="">本科</li>
				</a>
				<a href="/results?q=大专">
					<li id="">大专</li>
				</a>
				<a href="/results?q=高中">
					<li id="">高中</li>
				</a>
				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
			</ul>
		</div>
		<div class="user_main_job_key">
			<ul class="user_main_job_keylist">
				<li class="li_nohover_bgcolor">工作经验：</li>
				<a href="/results">
					<li id="">不限</li>
				</a>
				<a href="/results?q=应届">
					<li id="">应届</li>
				</a>
				<a href="/results?q=三年以下">
					<li id="">三年以下</li>
				</a>
				<a href="/results?q=三年至五年">
					<li id="">三年至五年</li>
				</a>
				<a href="/results?q=五年至十年">
					<li id="">五年至十年</li>
				</a>
				<a href="/results?q=十年以上">
					<li id="">十年以上</li>
				</a>
				<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
			</ul>
		</div>
		<div class="full_small_nav mid_marginbottom">
			<div class="user_main_job_key">
				<ul class="user_main_job_keylist">
					<li class="black">排序方式：</li>
					<a href="">
						<li id="">相关度</li>
					</a>
					<a href="">
						<li id="">日期</li>
					</a>
					<a href="">
						<li id="">公司</li>
					</a>
				</ul>
			</div>
		</div>
		@foreach($jobs as $job)
		<div class="index_single_item">
			<div class="index_single_item_jobinfo orange">
				<div class="per50 right_padding">
					<div class="per50">
						<a class="big blue" href="jobs/{{ $job->id }}">{{ $job->name }}</a>
						<p class="gray margin15">学历要求 : {{ $job->education }}</p>
						<p class="gray margin15">工作地点 : {{ $job->province }}</p>
					</div>
					<div class="per50">
						<div class="user_main_single_jobinfo_button">
							{{ $job->advantage }}
						</div>
						<p class="orange margin15">薪资 : {{ $job->salary }}</p>
						<p class="gray margin15">工作经验 : {{ $job->experience }}</p>
					</div>
				</div>
				<div class="per50 left_border left_padding">
					<div class="per50">
						<p class="gray margin15"><a href="/results?q={{ $job->publish->name }}">{{ $job->publish->name }}</a></p>
					</div>
					<div class="per50">
						<div class="user_main_single_jobinfo_button">
							<a href="jobs/{{ $job->id }}">工作详情</a>
						</div>
						<p class="gray margin15">发布时间 : {{ $job->updated_at }}</p>
					</div>
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