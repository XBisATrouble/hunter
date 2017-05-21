@extends('layouts.userApp')
@section('content')
<div class="user_info_all_banner">
	<div class="user_info_left_banner">
		<div id="app">
			<user-avatar avatar="{{ $user->avatar }}"></user-avatar>
		</div>
		<form class="input_banner">
			<input type="text" name="username" value="{{ $user->
			name }}">
			<input type="text" readonly="readonly" value="{{ $user->
			email }}" >
			<button class="edit_user_info">修改</button>
		</form>
	</div>

	<div class="user_info_right_banner">
		<div class="resume_content">
			<div class="resume_timetittle">
				<div class="resume_round"></div>
				2017-2-2
			</div>
			熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.
		</div>
		<div class="resume_content">
			<div class="resume_timetittle">
				<div class="resume_round"></div>
				2017-2-2
			</div>
			熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.
		</div>
	</div>

</div>
@endsection('content')