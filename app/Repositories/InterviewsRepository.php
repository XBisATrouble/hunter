<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/6/16
 * Time: 0:53
 */

namespace App\Repositories;


use App\Interview;

class InterviewsRepository
{
    public function create($data)
    {
        return Interview::create($data);
    }
}