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
    <div>
        {{--@foreach($resume->post as $job)--}}
            {{--{{ $job->name }}--}}
            {{--<br>--}}
        {{--@endforeach--}}
    </div>
@endforeach