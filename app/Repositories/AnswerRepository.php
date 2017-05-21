<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/18
 * Time: 14:34
 */

namespace App\Repositories;

use App\Answer;

class AnswerRepository
{
    public function create($attributes)
    {
        return Answer::create($attributes);
    }
}