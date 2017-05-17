@extends('layouts.adminApp')

@section('content')
    <div class="main_content">
        <div class="notification">
            <div class="notification_head">
                <img src="/dist/notification.png">
                <span>您收到的消息通知</span>
            </div>
            <div class="line" style="border-bottom:1px solid rgba(0,0,0,.2)"></div>
            <div class="notification_body">
                @foreach($admin->notifications as $notification)
                <div class="notification_content">
                        @include('admin/notifications/'.snake_case(class_basename($notification->type)))
                </div>
                <div class="line" style="border-bottom:1px solid rgba(0,0,0,.2)"></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection