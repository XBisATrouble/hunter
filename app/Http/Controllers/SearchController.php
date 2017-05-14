<?php

namespace App\Http\Controllers;

use App\Repositories\JobRepository;
use Illuminate\Http\Request;

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
        $jobs=$this->job->byNameOrProvinceOrCompany($q);
        return $jobs;
    }
}
