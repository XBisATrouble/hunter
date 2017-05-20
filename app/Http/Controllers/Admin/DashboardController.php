<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\ResumeRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{
    protected $resume;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ResumeRepository $resume)
    {
        $this->resume=$resume;
        $this->middleware('auth.admin:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes=Auth::guard('admin')->user()->resumes->pluck('resume_id');
        $resumes=$this->resume->idInArray($resumes);
        return view('admin/index',compact('resumes'));
    }
}