<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    //
    protected $fillable=['post_id','date','score','evalute'];

    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
