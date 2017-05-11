@extends('layouts.adminApp')

@section('content')
<div class="main_content">
<div class="online_offline_nav">
	<ul class="online_offline_nav_list">
		<li><a href="" class="full_a">正在招聘</a></li>
		<li><a href="" class="full_a">已下线</a></li>
		<!-- ^^^^^^^^^^^^^^^^连接在这^^^^^^^^^^^^^^^^^^^ -->
	</ul>
</div>
	@foreach($jobs as $job)
	<div class="index_single_item">
		<div class="index_single_item_jobinfo">
			<div class="index_single_item_jobinfo_numofpeople">
				收到
				<span class="numofpeople">5</span>
				份简历
			</div>
			<div class="index_single_item_jobinfo_edit_button index_single_item_jobinfo_button">
				<a href="/admin/jobs/{{$job->id}}/edit" class="full_a">查看简历</a>
			</div>
			<div class="index_single_item_jobinfo_offline_button index_single_item_jobinfo_button">
				<a href="/admin/jobs/{{$job->id}}/edit" class="full_a">下线</a>
			</div>
			<a class="gray big" href="jobs/{{$job->id}}">{{ $job->name }}</a>
			<p class="gray">
				工作发布于 :
				<br>{{ $job->created_at }}</p>
			<p class="gray" style="height: 150px;">
				工作简介 :
				<br>{!! $job->description !!}</p>
		</div>
		<div class="index_single_item_peopleinfo"></div>
		<div class="index_single_item_peopleinfo"></div>
	</div>
	<div class="line_gray"></div>
	@endforeach
</div>
@endsection('content')