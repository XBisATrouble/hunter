<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvatarRequest;
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
        $resume=Auth::check()?Auth::user()->resume:null;

        return view('users.followed',compact('jobs','resume'));
    }

    public function index()
    {
        $user=Auth::user();
        $jobs=Auth::user()->resume->post;
        $follows=Auth::user()->follows;
        return view('users.index',compact('user','jobs','follows'));
    }

    public function avatarUpload(AvatarRequest $request)
    {
        $file=$request->file('img');
        $destinationPath='images/avatars/';
        $filename=Auth::user()->id.'_'.time().$file->getClientOriginalName();
        $file->move($destinationPath,$filename);
        $user=$this->user->byId(Auth::user()->id);
        $user->avatar='/'.$destinationPath.$filename;
        $user->save();

        return ['url' => $user->avatar];
    }
}
