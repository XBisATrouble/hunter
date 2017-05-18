<?php

namespace App\Http\Controllers;

use App\Repositories\ResumeRepository;
use Illuminate\Http\Request;
use Auth;

class ResumesController extends Controller
{
    protected $resume;
    /**
     * ResumesController constructor.
     */
    public function __construct(ResumeRepository $resume)
    {
        $this->resume=$resume;
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resumes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[
            'gender'=>$request->get('gender'),
            'birthday'=>$request->get('birthday_year').'.'.$request->get('birthday_month'),
            'city'=>$request->get('city'),
            'edulevel'=>$request->get('edulevel'),
            'school'=>$request->get('school'),
            'major'=>$request->get('major'),
            'major_rank'=>$request->get('major_rank'),
            'edu_start'=>$request->get('edu_start'),
            'edu_end'=>$request->get('edu_end'),
            'job_company'=>$request->get('job_company'),
            'job_position'=>$request->get('job_position'),
            'job_start'=>$request->get('job_start'),
            'job_end'=>$request->get('job_end'),
            'job_description'=>$request->get('job_description'),
            'school_name'=>$request->get('school_name'),
            'school_position'=>$request->get('school_position'),
            'school_start'=>$request->get('school_start'),
            'school_end'=>$request->get('school_end'),
            'school_description'=>$request->get('school_description'),
            'project_name'=>$request->get('project_name'),
            'project_position'=>$request->get('project_position'),
            'project_start'=>$request->get('project_start'),
            'project_end'=>$request->get('project_end'),
            'project_description'=>$request->get('project_description'),
            'expected_work_place'=>$request->get('expected_work_place'),
            'expected_work_position'=>$request->get('expected_work_position'),
            'awards'=>$request->get('awards'),
            'sklls'=>$request->get('sklls'),
            'evaluations'=>$request->get('evaluations'),
            'papers'=>$request->get('papers'),
            'user_id'=>Auth::user()->id,
        ];
        $resume=$this->resume->create($data);

        return $resume->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
