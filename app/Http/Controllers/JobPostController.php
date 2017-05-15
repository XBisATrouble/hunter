<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class JobPostController extends Controller
{
    public function post($job)
    {
        Auth::user()->resume->postThis($job);
        Alert::success('投送成功!')->persistent("关闭");
        return back();
    }
}