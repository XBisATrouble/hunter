@extends('layouts.userApp')
@section('content')
<div class="user_main_content">
    <div class="user_main_left_content">
        @foreach($jobs as $job)
        <div class="index_single_item">
            <div class="index_single_item_jobinfo orange">
                <div class="user_main_single_advance">
                    {{ $job->advantage }}
                    <div class="user_main_single_advance_tag_tan"></div>
                </div>
                <div class="per33">
                    <a class="big blue" href="/jobs/{{ $job->id }}">{{ $job->name }}</a>
                    <p class="gray margin15">学历要求 : {{ $job->education }}</p>
                    <p class="gray margin15">工作地点 : {{ $job->province }}</p>
                </div>
                <div class="per33" style="position: relative; left: 10px;">
                    <p class="gray" style="margin: 10px;">&nbsp</p>
                    <p class="gray margin15">工作经验 : {{ $job->experience }}</p>
                    <p class="orange margin15">薪资 : {{ $job->salary }}</p>
                </div>
                <div class="per33" style="border-left: 2px solid rgba(0,0,0,.2);padding-left: 50px;">
                    <div class="user_main_single_jobinfo_button small">
                        <a href="/jobs/{{ $job->id }}">工作详情</a>
                    </div>
                    <p class="blue margin15">
                        <span class="gray">查看公司工作 :</span>
                        <a href="/results?q={{ $job->
                            publish->name }}" style=" color: rgba(0,146,210,1)">{{ $job->publish->name }}
                        </a>
                    </p>
                    <p class="gray margin15">发布时间 : {{ $job->updated_at }}</p>
                </div>
            </div>
        </div>
        <div class="line_gray"></div>
        @endforeach
    </div>
    <div class="user_main_right_content {{ $resume!=null?'':'blur' }}">
        <div class="login_button_posa"></div>
        @if($resume!=null)
            @include('layouts.resumeApp')
        @else
            @include('layouts.resumeDisableApp')
        @endif
    </div>
</div>
@endsection('content')