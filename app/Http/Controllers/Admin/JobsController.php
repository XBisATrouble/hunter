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
        $this->middleware('auth.admin:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=$this->jobRepositories->getJobsFeedByAuthOnline(Auth::guard('admin')->user()->id);
        return view('jobs.index',compact('jobs'));
    }

    public function showOffline()
    {
        $jobs=$this->jobRepositories->getJobsFeedByAuthOffline(Auth::guard('admin')->user()->id);
        return view('jobs.offline',compact('jobs'));
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
            'advantage'=>$request->get('job_advantage'),
            'description'=>$request->get('job_description'),
            'address'=>$request->get('job_address'),
            'publisher_id'=>Auth::guard('admin')->user()->id,
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
        $job = $this->jobRepositories->byId($id);
        return view('jobs.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = $this->jobRepositories->byId($id);
        $matches=$this->matchSalary($job->salary);
        $class=$this->jobRepositories->getClassById($job->class_id);
        if (Auth::guard('admin')->user()->owns($job))
        {
            return view('jobs.edit',compact('job','matches','class'));
        }
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreJobRequest $request, $id)
    {
        $job=$this->jobRepositories->byId($id);
        $job->update([
            'name'=>$request->get('job_name'),
            'salary'=>$request->get('job_salary_min').'k-'.$request->get('job_salary_max').'k',
            'province'=>$request->get('job_province'),
            'city'=>$request->get('job_city'),
            'class_id'=>$request->get('job_level_3'),
            'experience'=>$request->get('job_experience'),
            'education'=>$request->get('job_education'),
            'advantage'=>$request->get('job_advantage'),
            'description'=>$request->get('job_description'),
            'address'=>$request->get('job_address'),
            'publisher_id'=>Auth::guard('admin')->user()->id,
        ]);

        return redirect()->route('jobs.show', [$job->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=$this->jobRepositories->byId($id);

        if (Auth::guard('admin')->user()->owns($job)){
            $job->delete();

            return redirect('/admin/jobs');
        }

        abort(403,'Forbidden');
    }

    /**
     * 将8k-15k剥离
     * @param $salary
     * @return array
     */
    public function matchSalary($salary)
    {
        $pattern='/(.*?)k-(.*?)k/';
        preg_match($pattern,$salary,$matches);
        return $matches;
    }

    public function offLine($id)
    {
        $this->jobRepositories->jobOffline($id);
        return redirect('/admin/jobs');
    }
    public function onLine($id)
    {
        $this->jobRepositories->jobOnline($id);
        return redirect('/admin/jobs/offline');
    }
}
