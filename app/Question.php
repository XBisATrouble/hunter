<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable=['title','body','user_id'];

    public function publisher()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function getUpdatedAtAttribute($date)
    {
        if (Carbon::now() > Carbon::parse($date)->addDays(10)) {
            return Carbon::parse($date);
        }

        return Carbon::parse($date)->diffForHumans();
    }
}
