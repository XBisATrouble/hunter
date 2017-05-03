<?php

namespace App\Http\Controllers;

use App\Job_class;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function typeClass()
    {
        return Job_class::where('levels','1')->get();
    }

    public function typeDivision($id)
    {
        return Job_class::where(['levels'=>'2','father_id'=>$id])->get();
    }

    public function typeSection($id)
    {
        return Job_class::where(['levels'=>'3','father_id'=>$id])->get();
    }
}
