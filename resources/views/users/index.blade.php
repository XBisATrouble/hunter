@extends('layouts.userApp')
@section('content')
    <div id="app">
        <user-avatar avatar="{{ $user->avatar }}"></user-avatar>
    </div>
    <div>
        {{ $user->name }}
    </div>
    <div>
        {{ $user->email }}
    </div>


    @foreach($jobs as $job)
        {{ $job->name }}
    @endforeach

@endsection('content')
