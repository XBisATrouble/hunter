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
        $admin->unreadNotifications->markAsRead();
        return view('admin.notifications.index',compact('admin'));
    }

    public function all()
    {
        $admin=Auth::guard('admin')->user();
        return view('admin.notifications.index_all',compact('admin'));
    }
}