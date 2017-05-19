<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/17
 * Time: 11:37
 */

namespace App\Http\Controllers\Admin;


use App\Repositories\ResumeRepository;

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
        return view('admin.resumes.index');
    }

    public function show($id)
    {
        $resume=$this->resume->byId($id);
        return view('admin.resumes.show',compact('resume'));
    }
}