<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreJobRequest;
use App\Job;
use App\Repositories\JobRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    protected $jobRepositories;

    public function __construct()
    {
        $this->jobRepositories=new JobRepository();
        $this->middleware('auth.admin:admin')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=Job::with('publisher')->get();
        return $jobs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {
        $data=[
            'name'=>$request->get('job_name'),
            'salary'=>$request->get('job_salary_min').'k-'.$request->get('job_salary_max').'k',
            'province'=>$request->get('job_province'),
            'city'=>$request->get('job_city'),
            'class_id'=>$request->get('job_level_3'),
            'experience'=>$request->get('job_experience'),
            'education'=>$request->get('job_education'),
            'description'=>$request->get('job_description'),
            'address'=>$request->get('job_address'),
            'publisher'=>Auth::guard('admin')->user()->id,
        ];
        $job=$this->jobRepositories->create($data);

        return redirect()->route('jobs.show', [$job->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
