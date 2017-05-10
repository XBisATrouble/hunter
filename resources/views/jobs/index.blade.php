@extends('layouts.adminApp')

@section('content')
<div class="main_content">
	@foreach($jobs as $job)
	<div class="index_single_item">
		<div class="index_single_item_jobinfo">
			<div class="index_single_item_jobinfo_numofpeople">
				收到
				<span class="numofpeople">5</span>
				份简历
			</div>
			<div class="index_single_item_jobinfo_edit_button index_single_item_jobinfo_button">编辑</div>
			<div class="index_single_item_jobinfo_delete_button index_single_item_jobinfo_button">删除</div>
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
<!-- <a href="jobs/{{$job->id}}">{{ $job->name }}</a>
-->