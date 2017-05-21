<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','confirmation_token','api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }

    public function hasResume()
    {
        return !!$this->resume()->count();
    }

    public function follows()
    {
        return $this->belongsToMany(Job::class,'user_job')->withTimestamps();
    }

    public function followThis($job)
    {
        return $this->follows()->toggle($job);
    }

    public function followed($job)
    {
        return !!$this->follows()->where('job_id',$job)->count();
    }

    public function questions()
    {
        return $this->hasMany(Question::class,'user_id','id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
