@extends('layouts.adminApp')
@section('content')

<div class="main_content">
	<form class="company_info_edit" action="/admin/info" method="post">
		{{ csrf_field() }}
		<input type="text" name="name" value="{{ $admin->name }}" readonly="readonly">
		<textarea name="description">{{ $admin->description }}</textarea>
		<button class="company_info_submit"></button>
	</form>
</div>
@endsection