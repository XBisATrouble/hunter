<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/21
 * Time: 21:58
 */

namespace App\Http\Controllers\Admin;


use App\Job;
use App\Post;
use App\Repositories\InterviewsRepository;
use App\Resume;
use Illuminate\Support\Facades\Auth;
use Mail;
use Naux\Mail\SendCloudTemplate;
use Alert;

class InterviewController
{
    private $interviewsRepository;

    public function __construct(InterviewsRepository $interviewsRepository)
    {
        $this->interviewsRepository=new InterviewsRepository();
    }

    public function index()
    {
        $resumes=Auth::guard('admin')->user()->resumes;
        return view('admin.interview.index',compact('resumes'));
    }

    public function interview($post_id)
    {
        $job_id=Post::find($post_id)->job_id;
        $resume_id=Post::find($post_id)->resume_id;
        $this->sendPassEmailTo(Job::find($job_id),Resume::find($resume_id)->user);
        $data=[
            'post_id'=>$post_id,
        ];
        $this->interviewsRepository->create($data);
        Alert::success('发送成功!')->persistent("关闭");
        return back();
    }

    private function sendPassEmailTo($job,$user)
    {
        $data = [
            'url' => $job->name,
            'name'=> $user->name
        ];
        $template = new SendCloudTemplate('jobs_register', $data);

        Mail::raw($template, function ($message) use ($user){
            $message->from('XBisATrouble@gmail.com', 'Hunter');
            $message->to($user->email);
        });
    }
}