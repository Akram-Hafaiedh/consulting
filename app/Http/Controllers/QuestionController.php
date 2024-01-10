<?php
namespace App\Http\Controllers;
use App\Models\Quiz;
use App\Models\Question;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $quizs = Quiz::all();
        $questions = Question::with('quizes')->get();
        return view('questions', compact('quizs', 'questions'));
    }

    public function create()
    {
        $quizs = Quiz::all();
        return view('createquestion',compact('quizs'));
    }

    public function store(Request $request)
    {
        $question = new Question();
        $question->title = $request->input('title');
        $question->quiz_id = $request->input('quiz_id');
        $question->description = $request->input('description');
        $options = $request->input('options');



        $question->option2 = $request->input('$option[1]');
        $question->option1 = $request->input('$option[2]');
        $question->correct_answer = $request->input('correct_answer');
        $question->active = 1;
        $question->save();

        return redirect('/quizsconseiller');

    }
}
