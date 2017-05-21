<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table='resumes';

    protected $fillable=['gender','birthday','city','edulevel','photo','school','major','major_rank','edu_start','edu_end','job_company','job_position','job_start','job_end','job_description','school_name','school_position','school_start','school_end','school_description','project_name','project_position','project_start','project_end','project_description','expected_work_place','expected_work_position','awards','skills','evaluations','papers','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsToMany(Job::class,'resume_job')->withTimestamps();
    }

    public function jobs()
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

    public function getGenderAttribute($value)
    {
        $gender = ['1'=>'男','0'=>'女',''=>null];
        return $gender[$value];
    }
}