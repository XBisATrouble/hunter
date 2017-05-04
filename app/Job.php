<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable=[
        'name','salary','province','city','class_id','experience','education','advantage','description','address','publisher'
    ];

    public function publisher()
    {
        $this->hasOne(Models\Admin::class,'publisher','id');
    }
}
