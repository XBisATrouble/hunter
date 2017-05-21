@extends('layouts.adminApp')
@section('content')

<div class="main_content">
	<form class="company_info_edit">
		<input type="text" name="company_name">
		<textarea name="company_description"></textarea>
		<button class="company_info_submit"></button>
	</form>
</div>

@endsection