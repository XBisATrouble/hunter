<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/15
 * Time: 10:34
 */

namespace App\Repositories;


class UserRepository
{
    public function getFollowedByUser($user)
    {
        return $user->follows;
    }
}