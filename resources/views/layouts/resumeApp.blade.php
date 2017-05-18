<div class="user_main_right_content_tittle">我的简历</div>
<div class="user_main_right_content_pic">
    <img src="/dist/des.png"></div>
<div class="p">姓名 : {{ Auth::user()->name }}</div>
<div class="p">性别 : {{ $resume->gender }}</div>
<div class="p">专业 : {{ $resume->major }}</div>
<div class="p">毕业 : {{ $resume->shcool }}</div>
<div class="user_main_right_content_user_info">
    <div class="user_main_right_content_user_info_item">
        <div class="round"></div>
        <span class="strong" style="color: rgba(0,0,0,.7);">项目经历</span>
        <div class="user_main_right_content_user_projectexp">
            {{ $resume->project_description }}
        </div>
    </div>
    <div class="user_main_right_content_user_jobexp user_main_right_content_user_info_item">
        <div class="round"></div>
        <span class="strong" style="color: rgba(0,0,0,.7);">工作经历</span>
        <div class="user_main_right_content_user_jobexp">
            {{ $resume->job_description }}
        </div>
    </div>
    <div class="user_main_right_content_user_selfdes user_main_right_content_user_info_item">
        <div class="round"></div>
        <span class="strong" style="color: rgba(0,0,0,.7);">自我评价</span>
        <div class="user_main_right_content_user_selfdes">
            {{ $resume->evaluations }}
        </div>
    </div>
</div>
@if($resume->gender==null || $resume->major==null || $resume->shcool==null)
    <a href="/resumes">
        <div class="resume_small_edit_button">您的简历尚不完整，快去完善简历</div>
    </a>
@else
    <a href="/resumes">
        <div class="resume_small_edit_button">编辑我的简历</div>
    </a>
@endif