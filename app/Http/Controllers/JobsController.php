<?php

namespace App\Http\Controllers;

use App\Repositories\JobRepository;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    protected $job;

    /**
     * JobsController constructor.
     * @param $job
     */
    public function __construct(JobRepository $job)
    {
        $this->job = $job;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=$this->job->getJobsFeed();
        return view('jobs.index',compact('jobs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
}
