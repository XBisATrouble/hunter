@extends('layouts.adminApp')

@section('content')
    <div class="main_content">
        @foreach($jobs as $job)
                <div>
                    <h4>
                        <a href="jobs/{{$job->id}}">
                            {{ $job->name }}
                        </a>
                    </h4>
                </div>
        @endforeach
    </div>
@endsection('content')