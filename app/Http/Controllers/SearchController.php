<?php

namespace App\Http\Controllers;

use App\Repositories\JobRepository;
use Illuminate\Http\Request;
use Auth;

class SearchController extends Controller
{
    protected $job;

    /**
     * SearchController constructor.
     * @param $job
     */
    public function __construct(JobRepository $job)
    {
        $this->job = $job;
    }

    public function searchJobsIndex()
    {
        $q=request('q');
        $jobs=$this->job->byNameOrProvinceOrCompanyOrEducationOrExperience($q);
        $resume=Auth::check()?Auth::user()->resume:null;
        return view('jobs.index',compact('jobs','q','resume'));
    }
}
