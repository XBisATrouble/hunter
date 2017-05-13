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

    public function byClass($name)
    {
        $classId=Job_class::where('name',$name)->first()->id;
        $classLevel=Job_class::where('name',$name)->first()->levels;
        if ($classLevel==3)
            return Job::where('class_id',$classId)->latest('updated_at')->with('publish')->paginate(6);
        if ($classLevel==2)
        {
            $classesId=Job_class::where('father_id',$classId)->pluck('id');
            return Job::whereIn('class_id',$classesId)->latest('updated_at')->with('publish')->paginate(6);
        }
        if ($classLevel==1)
        {
            $classesId_2=Job_class::where('father_id',$classId)->pluck('id');
            $classesId_3=Job_class::whereIn('father_id',$classesId_2)->pluck('id');
            return Job::whereIn('class_id',$classesId_3)->latest('updated_at')->with('publish')->paginate(6);
        }
    }

    public function getJobsFeed()
    {
        return Job::latest('updated_at')->with('publish')->paginate(6);
    }

    public function getJobsFeedByAuthOnline($auth)
    {
        return Job::Online()->where('publisher_id',$auth)->latest('updated_at')->with('publish')->paginate(3);
    }

    public function getJobsFeedByAuthOffline($auth)
    {
        return Job::Offline()->where('publisher_id',$auth)->latest('updated_at')->with('publish')->paginate(3);
    }

    public function getClassById($id)
    {
        $class[0]=Job_class::find($id)->name;
        $class[1]=Job_class::find(Job_class::find($id)->father_id)->name;
        $class[2]=Job_class::find(Job_class::find(Job_class::find($id)->father_id)->father_id)->name;
        $class[3]=Job_class::find($id)->id;
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