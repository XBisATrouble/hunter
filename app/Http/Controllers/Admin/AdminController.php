<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/18
 * Time: 13:32
 */

namespace App\Http\Controllers\Admin;


use Auth;

class AdminController
{
    public function index()
    {
        $admin=Auth::guard('admin')->user();
        return view('admin.admin.index',compact('admin'));
    }
}