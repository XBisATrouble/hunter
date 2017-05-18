<?php

namespace App\Http\Controllers;

use App\Notifications\NewResumePostNotification;
use App\Repositories\JobRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class JobPostController extends Controller
{
    protected $jobRepository;
    protected $user;

    /**
     * JobPostController constructor.
     * @param $jobRepository
     */
    public function __construct(JobRepository $jobRepository,UserRepository $user)
    {
        $this->jobRepository = $jobRepository;
        $this->user=$user;
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
        $newPostResume=Auth::user()->resume->postThisV2($jobModel);
        $jobModel->publish->notify(new NewResumePostNotification($newPostResume));
        $jobModel->increment('resumes_count');
        Alert::success('投送成功!')->persistent("关闭");
        return back();
    }

    public function photo(Request $request)
    {
        $file=$request->file('img');
        $destinationPath='images/photo/';
        $filename=Auth::user()->id.'_'.time().$file->getClientOriginalName();
        $file->move($destinationPath,$filename);
        $resume=$this->user->byId(Auth::user()->id)->resume;
        $resume->photo='/'.$destinationPath.$filename;
        $resume->save();

        return ['url' => $resume->photo];
    }
}