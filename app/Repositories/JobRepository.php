<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/4
 * Time: 21:00
 */

namespace App\Repositories;


use App\Job;

class JobRepository
{
    public function create(array $attributes)
    {
        return Job::create($attributes);
    }
}