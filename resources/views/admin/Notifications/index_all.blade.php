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
        <div class="line_top""></div>
        <div class="notification_body">
            @if($admin->Notifications->count()!=0)
                @foreach($admin->Notifications as $notification)
            <div class="notification_content">
                @include('admin/notifications/'.snake_case(class_basename($notification->type)))
            </div>
            <div class="notification_content">
                @include('admin/notifications/'.snake_case(class_basename($notification->type)))
            </div>
            <div class="notification_content">
                @include('admin/notifications/'.snake_case(class_basename($notification->type)))
            </div>
            @endforeach
                @else
            <h1>暂无消息</h1>
            @endif
        </div>

    </div>
</div>
@endsection