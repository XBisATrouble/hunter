<?php

namespace App\Notifications;

use App\Job;
use App\Post;
use Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewResumePostNotification extends Notification
{
    use Queueable;

    protected $post;

    /**
     * NewResumePostNotification constructor.
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post=$post;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        $job=Job::find($this->post->job_id)->name;
        return [
            'name'=>Auth::user()->name,
            'job_id'=>$this->post->job_id,
            'resume_id'=> $this->post->resume_id,
            'job'=>$job,
        ];
    }
    
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
