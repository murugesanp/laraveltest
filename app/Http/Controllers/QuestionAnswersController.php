<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\QuestionAnswers;

class QuestionAnswersController extends Controller
{
    public function index(Request $request){
        $limit = Input::get('limit',10);
        $question_answers = new QuestionAnswers();

        $count = $question_answers->count();
        $question_answers = $question_answers->paginate($limit);
        $result['data']=array();
        $result['total']=$count;
        foreach ($question_answers as $question_answer) {
            $result['data'][]=array(
                 'id'=>$question_answer->id,
                 'question'=>$question_answer->question->question,
                 'answer'=>$question_answer->answer->answer
                );
        }
        return response()->json(['data' => $result]);

    }
}
