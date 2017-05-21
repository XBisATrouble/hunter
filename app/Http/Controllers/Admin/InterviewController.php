<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/21
 * Time: 21:58
 */

namespace App\Http\Controllers\Admin;


class InterviewController
{
    public function index()
    {
        return view('admin.interview.index');
    }
}