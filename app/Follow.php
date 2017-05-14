<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $table='user_job';

    protected $fillable=['user_id','job_id'];
}
