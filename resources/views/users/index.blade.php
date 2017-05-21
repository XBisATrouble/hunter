@extends('layouts.userApp')
@section('content')
<div class="user_info_all_banner">
	<div class="user_info_left_banner">
		<div id="app">
			<user-avatar avatar="{{ $user->avatar }}"></user-avatar>
		</div>
		<form class="input_banner" action="/user/name" method="post">
			{{ csrf_field() }}
			<input type="text" name="username" value="{{ $user->name }}">
			<input type="text" readonly="readonly" value="{{ $user->email }}" >
			<button class="edit_user_info">修改</button>
		</form>
	</div>

	<div class="user_info_right_banner">
        @foreach($jobs as $job)
		<div class="resume_content">
			<div class="resume_timetittle">
				<div class="resume_round"></div>
				{{ \Carbon\Carbon::parse($job->pivot->updated_at)->diffForHumans() }}
			</div>
            向 {{ $job->publish->name }} 公司的职位： <a href="/jobs/{{ $job->id }}">{{ $job->name }}</a> 投送简历
		</div>
        @endforeach
	</div>
</div>
@endsection('content')
