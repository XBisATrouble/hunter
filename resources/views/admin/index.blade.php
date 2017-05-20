@extends('layouts.adminApp')

@section('content')
<div class="main_content">
    <div class="main_company_controll moduel">
        <div class="main_compnay_left_banner">
            <ul class="main_compnay_left_nav">
                <li>查看简历</li>
                <li>查看已发布的工作</li>
                <li>查看面试</li>
            </ul>
        </div>

        <div class="main_company_right_banner">

            <div class="jobs_modeul">
                <ul class="main_company_right_banner_nav">
                    <li>所有工作</li>
                    <li>未收到简历的工作</li>
                    <li>收到简历的工作</li>
                </ul>
                @foreach($jobs as $job)
                <div class="index_single_item">
                    <div class="index_single_item_jobinfo">
                        <a class="gray big" href="">{{ $job->name }}</a>
                        <div class="index_single_item_jobinfo_numofpeople">
                            收到
                            <span class="numofpeople">{{ $job->resumes_count }}</span>
                            份简历
                        </div>
                        <div class="index_single_item_jobinfo_edit_button index_single_item_jobinfo_button">
                            <a href="/admin/jobs/{{$job->id}}/edit" class="full_a">查看工作</a>
                        </div>
                        <div class="index_single_item_jobinfo_offline_button index_single_item_jobinfo_button">
                            <a href="jobs/{{ $job->id }}/offline" class="full_a">下线</a>
                        </div>
                        <a class="gray big" href=""></a>
                        <p class="gray">
                            工作发布于 :{{ $job->created_at }}</p>
                            <br></p>
                        <p class="gray" style="height: 100px;">
                            工作简介 :
                            <br>{!! mb_substr($job->description,0,150,"utf-8").'...' !!}</p>
                            <br></p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="resumes_modeul">
                <ul class="main_company_right_banner_nav">
                    <li>所有简历</li>
                    <li>已收到的简历</li>
                    <li>已处理的简历</li>
                </ul>
                @foreach($resumes as $resume)
                <div class="admin_resume_thumb">
                    <div class="resume_base_thumb_pic">
                        <div class="resume_avatar_thumb">
                            <img src="{{ $resume->user->avatar }}">
                        </div>
                    </div>
                    <div class="resume_base_thumb">
                        <p>
                            <img src="/dist/resume_thumb/user.png">{{ $resume->user->name }}</p>
                        <p>
                            <img src="/dist/resume_thumb/sch.png">{{ $resume->school }}</p>
                        <p>
                            <img src="/dist/resume_thumb/age.png">{{ 2017-substr($resume->birthday,0,4) }}岁</p>
                    </div>
                    <div class="resume_base_thumb">
                        <p>
                            <img src="/dist/resume_thumb/exp.png">{{ $resume->edulevel }}</p>
                        <p>
                            <img src="/dist/resume_thumb/major.png">{{ $resume->major }}</p>
                        <div class="resume_info_button">
                            <a class="full_a" href="/admin/resumes/{{ $resume->id }}">查看简历</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script src="/js/admin.index.js"></script>
@endsection