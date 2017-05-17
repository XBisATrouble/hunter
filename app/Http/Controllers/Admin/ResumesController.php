<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/17
 * Time: 11:37
 */

namespace App\Http\Controllers\Admin;


class ResumesController
{
    public function index()
    {
        return view('admin.resumes.index');
    }
}