@extends('layouts.adminApp')
@section('content')
<div class="resume_banner">
	<div class="resume_left_banner">
		<div class="resume_avatar"></div>
		<div class="resume_hope">
			<p>深圳</p>
			<p>JAVA工程师</p>
		</div>
		<div class="resume_base">
			<div class="resume_tittle">基本信息</div>
			<p><img src="/dist/des.png">恽涵</p>
			<p>深圳大学</p>
			<p>100岁</p>
			<p>五年项目经历</p>
			<p>计算机专业</p>
		</div>
		<div class="resume_skill">
			<div class="resume_tittle">个人技能</div>
		</div>
		<div class="resume_selfdes">
			<div class="resume_tittle">自我评价</div>
		</div>
	</div>
	<div class="resume_right_banner">
		<div class="resume_schoolexp"></div>
		<div class="resume_projectexp "></div>
		<div class="resume_jobexp "></div>
	</div>
</div>
@endsection('content')