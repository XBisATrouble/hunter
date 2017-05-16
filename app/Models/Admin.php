<?php

namespace App\Models;

use App\Job;
use App\Post;
use App\Resume;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','confirmation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'created_at','updated_at','is_active','confirmation_token',
    ];

    public function owns(Model $model)
    {
        return $this->id == $model->publisher_id;
    }

    public function jobs()
    {
        return $this->hasMany(Job::class,'publisher_id','id');
    }

    public function resumes()
    {
        return $this->hasMany(Post::class);
    }
}