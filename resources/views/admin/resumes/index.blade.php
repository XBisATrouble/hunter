@extends('layouts.adminApp')
@section('content')
	<script src="/js/sweetalert.min.js"></script>
	@include('sweet::alert')
<div class="main_content">
	<div class="admin_resume_thumb_banner">
	<div class="admin_resume_nav">简历管理</div>
		@include('layouts.resumeMin')
	</div>
</div>
@endsection('content')