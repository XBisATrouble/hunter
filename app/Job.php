<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable=[
        'name','salary','province','city','class_id','experience','education','advantage','description','address','publisher_id'
    ];

    protected $hidden=[
        'created_at','updated_at',
    ];

    public function publish()
    {
        return $this->belongsTo(Models\Admin::class,'publisher_id','id');
    }

    public function classes()
    {
        return $this->belongsTo(Job_class::class,'class_id','id');
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class)->withTimestamps();
    }
}
