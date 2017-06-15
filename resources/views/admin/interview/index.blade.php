@extends('layouts.adminApp')

@section('content')
    <div class="main_content">
        @foreach ($resumes as $resume)
            {{ $resume->pivot->id }}
        @endforeach
    </div>
@endsection