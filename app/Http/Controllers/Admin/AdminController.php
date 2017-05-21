<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/18
 * Time: 13:32
 */

namespace App\Http\Controllers\Admin;


use App\Repositories\AdminRepository;
use Auth;
use Illuminate\Http\Request;

class AdminController
{
    protected $admin;

    /**
     * AdminController constructor.
     * @param $admin
     */
    public function __construct(AdminRepository $admin)
    {
        $this->admin = $admin;
    }

    public function index()
    {
        $admin=Auth::guard('admin')->user();
        return view('admin.admin.index',compact('admin'));
    }

    public function changeInfo(Request $request)
    {
        $admin=Auth::guard('admin')->user();
        return $this->admin->update($request->all());
    }
}