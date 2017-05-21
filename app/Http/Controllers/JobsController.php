<?php

namespace App\Http\Controllers;

use App\Markdown\Markdown;
use App\Repositories\JobRepository;
use App\Repositories\JobsClassRepository;
use Auth;

/**
 * Class JobsController
 * @package App\Http\Controllers
 */
class JobsController extends Controller
{
    /**
     * @var JobRepository
     */
    protected $job;
    /**
     * @var Markdown
     */
    protected $markdown;
    /**
     * @var JobsClassRepository
     */
    protected $class;

    /**
     * JobsController constructor.
     * @param JobRepository $job
     * @param Markdown $markdown
     * @param JobsClassRepository $class
     */
    public function __construct(JobRepository $job,Markdown $markdown,JobsClassRepository $class)
    {
        $this->job = $job;
        $this->markdown = $markdown;
        $this->class = $class;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=$this->job->getJobsFeed();
        $resume=Auth::check()?Auth::user()->resume:null;

        return view('jobs.index',compact('jobs','resume'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job=$this->job->byId($id);
        $html=$this->markdown->markdown($job->description);
        return view('jobs.show',compact('job','html'));
    }

    /**
     * 获取第一大类
     * @return mixed
     */
    public function typeClass()
    {
        return $this->class->getClass1Feed();
    }

    /**
     * 获取第二大类
     * @param $id
     * @return mixed
     */
    public function typeDivision($id)
    {
        return $this->class->getClass2ByClass1($id);
    }

    /**
     * 获取第三小类
     * @param $id
     * @return mixed
     */
    public function typeSection($id)
    {
        return $this->class->getClass3ByClass2($id);
    }
}
