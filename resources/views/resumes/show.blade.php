@extends('layouts.userApp')
@section('content')
<div class="resume_banner" id="resume">
	<div class="resume_left_banner">
		<div class="resume_avatar">
			<img src="{{ $resume->photo }}"></div>
		<div class="resume_hope">
			<p>{{ $resume->expected_work_place }}</p>
			<p>{{ $resume->expected_work_position }}</p>
		</div>
		<div class="resume_base">
			<div class="resume_tittle">基本信息</div>
			<p>
				<img src="/dist/resume/user.png">{{ $resume->user->name }}</p>
			<p>
				<img src="/dist/resume/sch.png">{{ $resume->school }}</p>
			<p>
				<img src="/dist/resume/age.png">{{ 2017-substr($resume->birthday,0,4) }}岁</p>
			<p>
				<img src="/dist/resume/major.png">{{ $resume->major }}</p>
		</div>
		<div class="resume_skill">
			<div class="resume_tittle">个人技能</div>
			{{ $resume->skills }}
		</div>
		<div class="resume_selfdes">
			<div class="resume_tittle">自我评价</div>
			{{ $resume->evaluations }}
		</div>
	</div>
	<div class="resume_right_banner">
		<div class="resume_schoolexp">
			<div class="resume_exptittle">
				<img src="/dist/resume/exp_big.png">校内经历
			</div>
			<div class="resume_content">
				<div class="resume_timetittle">
					<div class="resume_round"></div>
					{{ $resume->school_start }} - {{ $resume->school_end }} &nbsp;&nbsp; &nbsp;{{ $resume->school_position }}
				</div>
				{!! $resume->school_description !!}
			</div>
		</div>
		<div class="resume_projectexp ">
			<div class="resume_exptittle">
				<img src="/dist/resume/exp_big.png">项目经历</div>
			<div class="resume_content">
				<div class="resume_timetittle">
					<div class="resume_round"></div>
					{{ $resume->project_start }} - {{ $resume->project_end }} &nbsp;&nbsp; &nbsp;{{ $resume->project_position }}
				</div>
				{!! $resume->project_description !!}
			</div>
		</div>
		<div class="resume_jobexp ">
			<div class="resume_exptittle">
				<img src="/dist/resume/exp_big.png">工作经历</div>
			<div class="resume_content">
				<div class="resume_timetittle">
					<div class="resume_round"></div>
					{{ $resume->job_start }} - {{ $resume->job_end }} &nbsp;&nbsp; &nbsp;{{ $resume->job_position }}
				</div>
				{!! $resume->job_description !!}
			</div>
		</div>
		<div class="resume_priceandessay">
			<div class="resume_exptittle">
				<img src="/dist/resume/exp_big.png">获奖历史及论文发表</div>
				{!! $resume->awards !!}
				{!! $resume->papers !!}
		</div>
	</div>
</div>


<div class="tools">
	<button id="btn-html2canvas">export PDF by using jspdf + html2canvas</button>
</div>

@section('js')
	<script src="/js/jspdf.debug.js"></script>
	<script src="/js/html2canvas.js"></script>
	<script src="/js/main.js"></script>
@endsection
@endsection('content')