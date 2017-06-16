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
                应聘职位：<a class="blue" href="/admin/jobs/{{ $resume->pivot->job_id }}">{{ \App\Job::find($resume->pivot->job_id)->first()->name }}</a> </p>
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

        <div class="flex_banner">
            <div class="resume_pass"  style="float:right">
                <a class="full_a" href="/admin/job/{{ $resume->pivot->job_id }}/resume/{{ $resume->id }}/approve">通过</a>
            </div>
            <div class="resume_reject" style="float:right">
                <a class="full_a" href="/admin/job/{{ $resume->pivot->job_id }}/resume/{{ $resume->id }}/reject">拒绝</a>
            </div>
            <div class="resume_reject"  style="margin-top:50px;">
                <a class="full_a" href="/admin/interview/{{ $resume->pivot->id }}">发送面试邮件</a>
            </div>
            <div style="margin-top: 50px;">
                当前状态：{{ $resume->pivot->status==1?'通过':'拒绝' }}
            </div>
        </div>

    </div>
    {{--<div>--}}
        {{--@foreach($resume->post as $job)--}}
            {{--{{ $job->name }}--}}
            {{--<br>--}}
        {{--@endforeach--}}
    {{--</div>--}}
@endforeach