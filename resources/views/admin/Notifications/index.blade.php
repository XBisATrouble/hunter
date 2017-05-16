@extends('layouts.adminApp')

@section('content')
    @foreach($admin->notifications as $notification)
        @include('admin/notifications/'.snake_case(class_basename($notification->type)))
    @endforeach
@endsection