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
		@if(isset($q))
		<div class="full_small_nav mid_marginbottom">
			<div class="user_main_job_key">
				<ul class="user_main_job_keylist">
					<li class="black li_nohover_bgcolor">当前搜索内容：</li>
					<a href="">
						<li id="" style="color: rgba(241,241,241,1);background-color: rgba(0,146,210,1);">{{ $q==null?'不限':$q }}</li>
					</a>
				</ul>
			</div>
		</div>
		@else
		<div class="full_small_nav mid_marginbottom">
			<div class="user_main_job_key">
				<ul class="user_main_job_keylist">
					<li class="black li_nohover_bgcolor">排序方式：</li>
					<a href="">
						<li id="">默认排序</li>
					</a>
					<a href="">
						<li id="">时间</li>
					</a>
				</ul>
			</div>
		</div>
		@endif

		@foreach($jobs as $job)
		<div class="index_single_item">
			<div class="index_single_item_jobinfo orange">
				<div class="user_main_single_advance">
					{{ $job->advantage }}
					<div class="user_main_single_advance_tag_tan"></div>
				</div>
				<div class="per33">
					<a class="big blue" href="jobs/{{ $job->id }}">{{ $job->name }}</a>
					<p class="gray margin15">学历要求 : {{ $job->education }}</p>
					<p class="gray margin15">工作地点 : {{ $job->province }}</p>
				</div>
				<div class="per33" style="position: relative; left: 10px;">
					<p class="gray" style="margin: 10px;">&nbsp</p>
					<p class="gray margin15">工作经验 : {{ $job->experience }}</p>
					<p class="orange margin15">薪资 : {{ $job->salary }}</p>
				</div>
				<div class="per33" style="border-left: 2px solid rgba(0,0,0,.2);padding-left: 50px;">
					<div class="user_main_single_jobinfo_button small">
						<a href="jobs/{{ $job->id }}">工作详情</a>
					</div>
					<p class="blue margin15" >
						<span class="gray">查看公司工作 :</span>
						<a href="/results?q={{ $job->
							publish->name }}" class="inline_block_a" style="color: rgba(0,146,210,1)">
							百度百科有限公司
						</a>
					</p>
					<p class="gray margin15">发布时间 : {{ $job->updated_at }}</p>
				</div>
			</div>
		</div>
		<div class="line_gray"></div>
		@endforeach
		<div class="paginate">{{ $jobs->links() }}</div>
	</div>
	<div class="user_main_right_content">
		@if($resume!=null)
			@include('layouts.resumeApp')
		@endif
	</div>
</div>
@endsection('content')