@extends('layouts.adminApp')

@section('content')
<div class="main_content">
    <div class="main_company_controll moduel">
        <div class="main_compnay_left_banner">
            <ul class="main_compnay_left_nav">
            <li class="all_trigger">首页</li>
                <li class="resumes_trigger">查看简历</li>
                <li class="jobs_trigger">查看已发布的工作</li>
                <li class="interviews_trigger">查看面试</li>
            </ul>
        </div>
        <div class="main_company_right_banner">

            <div class="jobs_modeul">
                <ul class="main_company_right_banner_nav">
                    <li>所有工作</li>
                    <li>线上的工作</li>
                    <li>已下线的工作</li>
                </ul>
                @foreach($jobs as $job)
                <div class="index_single_item">
                    <div class="index_single_item_jobinfo">
                        <a class="gray big" href="/admin/jobs/{{ $job->id }}">{{ $job->name }}</a>
                        <div class="index_single_item_jobinfo_numofpeople">
                            收到
                            <span class="numofpeople">{{ $job->resumes_count }}</span>
                            份简历
                        </div>
                        <div class="index_single_item_jobinfo_edit_button index_single_item_jobinfo_button">
                            <a href="/admin/jobs/{{$job->id}}/edit" class="full_a">编辑职位</a>
                        </div>
                        <div class="index_single_item_jobinfo_offline_button index_single_item_jobinfo_button">
                            <a href="/admin/jobs/{{ $job->id }}/offline" class="full_a">下线</a>
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
                </ul>
                @include('layouts.resumeMin')
            </div>
        </div>
    </div>
</div>
<script src="/js/admin.index.js"></script>
@endsection