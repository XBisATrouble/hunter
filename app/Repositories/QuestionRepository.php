<?php
/**
 * Created by PhpStorm.
 * User: 10656
 * Date: 2017/5/20
 * Time: 20:30
 */

namespace App\Repositories;


use App\Question;

class QuestionRepository
{
    public function create(array $attributes)
    {
        return Question::create($attributes);
    }

    public function byId($id)
    {
        return Question::find($id);
    }

    public function getQuestionFeed()
    {
        return Question::latest('updated_at')->with('publisher')->paginate(20);
    }
}