<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table='resumes';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsToMany(Job::class,'resume_job')->withTimestamps();
    }

    public function postThis($job)
    {
        return $this->post()->toggle($job);
    }

    public function postThisV2($job)
    {
        return Post::create([
            'resume_id'=>$this->id,
            'job_id'=>$job->id,
            'admin_id'=>$job->publish->id
        ]);
    }
}
