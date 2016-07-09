<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswers extends Model
{
    protected $table = 'question_answers';

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
    public function answer()
    {
        return $this->belongsTo('App\Answer');
    }
}
