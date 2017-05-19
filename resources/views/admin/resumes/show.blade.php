@extends('layouts.adminApp')
@section('content')
<<<<<<< HEAD
<div class="resume_banner">
	<div class="resume_left_banner">
		<div class="resume_avatar"><img src="/dist/yonghu.png"></div>
		<div class="resume_hope">
			<p>重庆</p>
			<p>WEB前端工程师</p>
		</div>
		<div class="resume_base">
			<div class="resume_tittle">基本信息</div>
			<p>
				<img src="/dist/resume/user.png">恽涵</p>
			<p>
				<img src="/dist/resume/sch.png">重庆邮电大学</p>
			<p>
				<img src="/dist/resume/age.png">20岁</p>
			<p>
				<img src="/dist/resume/exp.png">一年项目经历</p>
			<p>
				<img src="/dist/resume/major.png">软件工程专业</p>
		</div>
		<div class="resume_skill">
			<div class="resume_tittle">个人技能</div>
			熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.
		</div>
		<div class="resume_selfdes">
			<div class="resume_tittle">自我评价</div>
			.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.
			热爱技术.
			踏实能干.
			有上进心.
		</div>
	</div>
	<div class="resume_right_banner">
		<div class="resume_schoolexp">
			<div class="resume_exptittle">
				<img src="/dist/resume/exp_big.png">校内经历</div>
			熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.
		</div>
		<div class="resume_projectexp">
			<div class="resume_exptittle">
				<img src="/dist/resume/exp_big.png">项目经历</div>
			熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.
		</div>
		<div class="resume_jobexp">
			<div class="resume_exptittle">
				<img src="/dist/resume/exp_big.png">工作经历</div>
			熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.
		</div>
		<div class="resume_priceandessay">
			<div class="resume_exptittle">
				<img src="/dist/resume/exp_big.png">获奖历史及论文发表</div>
			熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
			熟练运用框架开发项目.
			了解整个WEB开发过程和底层原理.
=======
	<div class="resume_banner">
		<div class="resume_left_banner">
			<div class="resume_avatar"></div>
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
					<img src="/dist/resume/age.png">{{ 2017-substr($resume->birthday,0,4) }}</p>
				<p>
					<img src="/dist/resume/exp.png">{{ $resume->experience }}项目经历</p>
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
					<img src="/dist/resume/exp_big.png">校内经历</div>
				熟练掌握JavaScript,TypeScript,Python等热门开发语言.
				熟练运用框架开发项目.
				了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
				熟练运用框架开发项目.
				了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
				熟练运用框架开发项目.
				了解整个WEB开发过程和底层原理.
			</div>
			<div class="resume_projectexp ">
				<div class="resume_exptittle">
					<img src="/dist/resume/exp_big.png">项目经历</div>
				熟练掌握JavaScript,TypeScript,Python等热门开发语言.
				熟练运用框架开发项目.
				了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
				熟练运用框架开发项目.
				了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
				熟练运用框架开发项目.
				了解整个WEB开发过程和底层原理.
			</div>
			<div class="resume_jobexp ">
				<div class="resume_exptittle">
					<img src="/dist/resume/exp_big.png">工作经历</div>
				熟练掌握JavaScript,TypeScript,Python等热门开发语言.
				熟练运用框架开发项目.
				了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
				熟练运用框架开发项目.
				了解整个WEB开发过程和底层原理.熟练掌握JavaScript,TypeScript,Python等热门开发语言.
				熟练运用框架开发项目.
				了解整个WEB开发过程和底层原理.
			</div>
>>>>>>> 15d97ab01c28377af3dbe1bdd7bf79c38ab69904
		</div>
	</div>
@endsection('content')