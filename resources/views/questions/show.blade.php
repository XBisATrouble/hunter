@extends('layouts.userApp')
@include('vendor.ueditor.assets')
@section('content')
    <div class="main_content">
        {{ $question->title }}
        {{ $question->body }}
    </div>
@endsection('content')