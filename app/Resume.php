<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table='resume';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
