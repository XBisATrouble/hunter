@extends('layouts.userApp')
@section('content')
<div class="main_content">
	@foreach($jobs as $job)
	<div class="index_single_item">
		<div class="index_single_item_jobinfo">
			<div class="index_single_item_jobinfo_numofpeople">
				收到
				<span class="numofpeople">{{ $job->resumes_count }}</span>
				份简历
			</div>
			<div class="index_single_item_jobinfo_edit_button index_single_item_jobinfo_button">
				<a href="/admin/jobs/{{$job->id}}/edit" class="full_a">查看简历</a>
			</div>
			@if($job->is_online==1)
			<div class="index_single_item_jobinfo_offline_button index_single_item_jobinfo_button">
				<a href="jobs/{{ $job->id }}/offline" class="full_a">下线</a>
				<!-- ^^^^^^^^^^^^^^^^下线功能^^^^^^^^^^^^^^^^^^^ -->
			</div>
			@endif
			<a class="gray big" href="jobs/{{$job->id}}">{{ $job->name }}</a>
			<p class="gray">
				工作发布于 :
				<br>{{ $job->created_at }}</p>
			<p class="gray" style="height: 90px;">
				工作简介 :
				<br>{!! mb_substr($job->description,0,150,"utf-8").'...' !!}</p>
		</div>
		<div class="index_single_item_peopleinfo"></div>
		<div class="index_single_item_peopleinfo"></div>
	</div>
	<div class="line_gray"></div>
	@endforeach
	<div class="paginate">{{ $jobs->links() }}</div>
</div>
@endsection('content')