<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/4
 * Time: 21:00
 */

namespace App\Repositories;


use App\Job;
use App\Job_class;

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
        return Job::where('publisher_id',$auth)->latest('updated_at')->with('publish')->paginate(3);
    }

    public function getClassById($id)
    {
        $class[0]=Job_class::find($id)->name;
        $class[1]=Job_class::find(Job_class::find($id)->father_id)->name;
        $class[2]=Job_class::find(Job_class::find(Job_class::find($id)->father_id)->father_id)->name;
        return $class;
    }

    public function jobOnline($id)
    {
        $job=$this->byId($id);
        $job->is_online=1;
        if ($job->save())
        {
            return true;
        }
        else
            return false;
    }

    public function jobOffline($id)
    {
        $job=$this->byId($id);
        $job->is_online=0;
        if ($job->save())
        {
            return true;
        }
        else
            return false;
    }
}