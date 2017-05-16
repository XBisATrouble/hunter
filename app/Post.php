<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='resume_job';

    protected $fillable=['resume_id','job_id','admin_id'];
}
