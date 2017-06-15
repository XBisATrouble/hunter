<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/17
 * Time: 11:37
 */

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Repositories\ResumeRepository;
use Auth;

class ResumesController
{
    protected $resume;

    /**
     * ResumesController constructor.
     * @param $resume
     */
    public function __construct(ResumeRepository $resume)
    {
        $this->resume = $resume;
    }

    public function index()
    {
        $resumes=Auth::guard('admin')->user()->resumes;
        //$resumes_id=Auth::guard('admin')->user()->resumes()->distinct('resumes_id')->pluck('resume_id');
        //$resumes=$this->resume->idInArray($resumes_id);
        return view('admin.resumes.index',compact('resumes'));
    }

    public function show($id)
    {
        $resume=$this->resume->byId($id);
        return view('admin.resumes.show',compact('resume'));
    }
}