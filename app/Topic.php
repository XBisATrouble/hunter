<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable=[
        'name','jobs_count',
    ];

    public function jobs()
    {
        return $this->belongsToMany(Job::class)->withTimestamps();
    }
}
