@extends('layouts.userApp')
@section('content')
<div class="main_content">
	<div class="question_modeul">
		<div class="question_item_nav">
			<ul class="question_item_nav_list">
				<li>
					<a href="/" class="checked_a">活跃</a>
				</li>
				<li>
					<a href="/">精华</a>
				</li>
				<li>
					<a href="/">最近</a>
				</li>
				<li>
					<a href="/">投票</a>
				</li>
			</ul>
		</div>
		@foreach($questions as $question)
		<div class="question_item">
			<img src="{{ $question->
			publisher->avatar }}">
			<div class="question_body">
				<span class="question_tag">面经</span>
				{!!  $question->body !!}
			</div>
			<div class="question_info">{{  $question->answers_count }}个评论 发布于{{  $question->updated_at }}</div>
		</div>
		@endforeach
	</div>
</div>
@endsection('content')