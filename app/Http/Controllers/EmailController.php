<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\User;
use Illuminate\Http\Request;
use Auth;

/**
 * Class EmailController
 * @package App\Http\Controllers
 */
class EmailController extends Controller
{
    /**
     * @param $token
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function verify($token)
    {
        $user = User::where('confirmation_token', $token)->first();
        $admin = Admin::where('confirmation_token', $token)->first();
        if ( is_null($user) && is_null($admin) )
        {
            return redirect('404');
        }
        else
        {
            if (!is_null($user))
            {
                $user->is_active = 1;
                $user->confirmation_token = str_random(40);
                $user->save();
                Auth::login($user);
                return redirect('/home');
            }
            if (!is_null($admin))
            {
                $admin->is_active = 1;
                $admin->confirmation_token = str_random(40);
                $admin->save();
                Auth::guard('admin')->login($admin);
                return redirect('/admin');
            }
        }
    }
}