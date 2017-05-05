<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable=[
        'name','salary','province','city','class_id','experience','education','advantage','description','address','publisher'
    ];

    protected $hidden=[
        'created_at','updated_at',
    ];

    public function publisher()
    {
        return $this->hasOne(Models\Admin::class,'id','publisher');
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class)->withTimestamps();
    }
}
