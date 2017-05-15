<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    protected $user;

    /**
     * UserController constructor.
     * @param $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
        $this->middleware('auth');
    }

    public function followed()
    {
        $jobs=$this->user->getFollowedByUser(Auth::user());
        return view('users.followed',compact('jobs'));
    }

    public function index()
    {
        return view('users.index');
    }
}
