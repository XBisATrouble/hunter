<?php

namespace App;

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
}
