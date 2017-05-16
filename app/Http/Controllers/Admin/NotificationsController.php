<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationsController extends Controller
{
    public function index()
    {
        $admin=Auth::guard('admin')->user();
        return view('admin.Notifications.index',compact('admin'));
    }
}
