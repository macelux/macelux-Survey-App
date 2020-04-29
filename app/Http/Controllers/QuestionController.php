<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function create(\App\Questionaire $questionaire)
    {
        return view('question.create', compact('questionaire'));
    }

    public function store(\App\Questionaire $questionaire)
    {
        //dd(request()->all());

        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required'
        ]);
 
        $question = $questionaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/questionaire/'.$questionaire->id); 
    }
 

}
