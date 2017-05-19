<li>
    <img src="/dist/message.png">{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
    <br>
    <div class="notification_message">
        <a href="/admin/resumes/{{ $notification->data['resume_id'] }}">{{ $notification->data['name'] }}</a> 向您发布的职位
        <a href="/admin/jobs/{{ $notification->data['job_id'] }}">{{ $notification->data['job'] }}</a> 投送了简历
    </div>
</li>