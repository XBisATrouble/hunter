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

    public function byId($id)
    {
        return Job::find($id);
    }

    public function getJobsFeed()
    {
        return Job::latest('updated_at')->with('publish')->get();
    }

    public function getJobsFeedByAuth($auth)
    {
        return Job::where('publisher_id',$auth)->latest('updated_at')->with('publish')->get();
    }
}