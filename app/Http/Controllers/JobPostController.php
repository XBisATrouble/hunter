<?php

namespace App\Http\Controllers;

use App\Notifications\NewResumePostNotification;
use App\Repositories\JobRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class JobPostController extends Controller
{
    protected $jobRepository;

    /**
     * JobPostController constructor.
     * @param $jobRepository
     */
    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    /**
     * @param $job
     * @return \Illuminate\Http\RedirectResponse
     */
    public function post($job)
    {
        if(!Auth::user()->hasResume())
        {
            Alert::error('您还尚未创建简历!');
            return back();
        }
        $jobModel=$this->jobRepository->byId($job);
        if ($jobModel->hasPosted(Auth::user()->resume->id))
        {
            Alert::info('您已经投送该职位!');
            return back();
        }
        //Auth::user()->resume->postThis($job);      //此方法不能实现企业与简历关联
        Auth::user()->resume->postThisV2($jobModel);
        $jobModel->publish->notify(new NewResumePostNotification());
        $jobModel->increment('resumes_count');
        Alert::success('投送成功!')->persistent("关闭");
        return back();
    }
}