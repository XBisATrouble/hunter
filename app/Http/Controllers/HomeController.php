<?php

namespace App\Http\Controllers;

use App\Repositories\JobRepository;
use App\Repositories\JobsClassRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $job;
    protected $class;

    /**
     * HomeController constructor.
     * @param JobRepository $job
     * @param JobsClassRepository $class
     */
    public function __construct(JobRepository $job,JobsClassRepository $class)
    {
        $this->job = $job;
        $this->class=$class;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $jobs=$this->job->getJobsFeed();
        $class1s=$this->class->getClass1Feed();
        $class2s=$this->class->getClass2Feed();
        $class3s=$this->class->getClass3Feed();
        return view('index',compact('jobs','class1s','class2s','class3s'));
    }
}
