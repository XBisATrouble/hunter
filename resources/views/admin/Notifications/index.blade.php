@extends('layouts.adminApp')

@section('content')
<div class="main_content">
    <div class="notification">

        <div class="notification_head">
            <div class="notification_banner">
                <img src="/dist/message_unread.png">
                <a href="/admin/notifications">
                    <span>{{ $admin->unreadNotifications->count() }}条未读信息</span>
                </a>
            </div>
            <div class="notification_banner" style="margin-left: 30px">
                <img src="/dist/message_all.png">
                <a href="/admin/notifications/all">
                    <span>所有消息通知</span>
                </a>
            </div>
        </div>
        <div class="line_top"></div>
        <div class="notification_body">
            @if($admin->unreadNotifications->count()!=0)
                    @foreach($admin->unreadNotifications as $notification)
            <div class="notification_content">
                @include('admin/notifications/'.snake_case(class_basename($notification->type)))
            </div>
            <div class="line_top" style="border-bottom:1px solid rgba(0,0,0,0);"></div>
            @endforeach
                @else
            <p align="center">暂无未读消息</p>
            @endif
        </div>

    </div>
</div>
@endsection