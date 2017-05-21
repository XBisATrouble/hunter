@extends('layouts.adminApp')
@section('content')

<div class="main_content">
	<form class="company_info_edit" action="/admin/info" method="post">
		{{ csrf_field() }}
		<div style="margin-bottom: 20px">公司名称：</div>
		<input type="text" name="name" value="{{ $admin->name }}" readonly="readonly">
		<div style="margin-bottom: 20px">公司介绍：</div>
		<textarea name="description">{{ $admin->description }}</textarea>
		<button class="company_info_submit">修改</button>
	</form>
</div>
@endsection