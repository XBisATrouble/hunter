<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/18
 * Time: 14:34
 */

namespace App\Repositories;

use Auth;

class AdminRepository
{
    public function update($attributes)
    {
        $admin=Auth::guard('admin')->user();
        $admin->description=$attributes['description'];
        $admin->name=$attributes['name'];
        $admin->save();
        return back();
    }
}