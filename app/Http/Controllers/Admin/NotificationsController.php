<?php

namespace App\Http\Controllers\Admin;

use App\Notification;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationsController extends Controller
{
    /**
     * NotificationsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    public function index()
    {
        $admin=Auth::guard('admin')->user();
        return view('admin.Notifications.index',compact('admin'));
    }
}
