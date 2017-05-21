<?php

namespace App\Http\Controllers;

use App\Repositories\AnswerRepository;
use Illuminate\Http\Request;
use Auth;

class AnswersController extends Controller
{
    protected $answer;

    /**
     * AnswersController constructor.
     * @param $answer
     */
    public function __construct(AnswerRepository $answer)
    {
        $this->answer = $answer;
        $this->middleware('auth');
    }

    public function store(Request $request,$question)
    {
        $data=[
            'user_id'=>Auth::id(),
            'question_id'=>$question,
            'body'=>$request->get('body'),
        ];
        $answer=$this->answer->create($data);
        return $answer->id;
    }
}
