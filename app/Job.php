<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable=[
        'name','salary','province','city','class_id','experience','education','advantage','description','address','publisher_id','followers_count'
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

    public function scopeOnline($query)
    {
        return $query->where('is_online','1');
    }

    public function scopeOffline($query)
    {
        return $query->where('is_online','0');
    }

    public function getCreatedAtAttribute($date)
    {
        if (Carbon::now() > Carbon::parse($date)->addDays(10)) {
            return Carbon::parse($date);
        }

        return Carbon::parse($date)->diffForHumans();
    }

    public function getUpdatedAtAttribute($date)
    {
        if (Carbon::now() > Carbon::parse($date)->addDays(10)) {
            return Carbon::parse($date);
        }

        return Carbon::parse($date)->diffForHumans();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class,'user_job')->withTimestamps();
    }
}
