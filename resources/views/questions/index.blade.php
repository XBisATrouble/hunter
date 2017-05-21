@extends('layouts.userApp')
@section('content')
    <div class="main_content">
        @foreach($questions as $question)
            {{ $question->publisher->avatar }}
            {!!  $question->body !!}
        @endforeach
    </div>
@endsection('content')