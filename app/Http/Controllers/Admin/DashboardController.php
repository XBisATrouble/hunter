<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\JobRepository;
use App\Repositories\ResumeRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{
    protected $resume;
    protected $job;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ResumeRepository $resume,JobRepository $job)
    {
        $this->resume=$resume;
        $this->job=$job;
        $this->middleware('auth.admin:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes_id=Auth::guard('admin')->user()->resumes->pluck('resume_id');
        $resumes=$this->resume->idInArray($resumes_id);
        $jobs=$this->job->getJobsFeedByAuthOnline(Auth::guard('admin')->user()->id);
        return view('admin/index',compact('resumes','jobs'));
    }
}