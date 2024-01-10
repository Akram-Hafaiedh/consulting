<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuizController extends Controller
{
    public function index(): View
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('createquiz');
    }

    public function show(Quiz $quiz): View
    {
        $quiz->load('questions');
        return view('quizzes.show', compact('quiz'));
    }

    public function store(Request $request)
    {
        $quiz = new Quiz();
        $quiz->title = $request->input('title');
        $quiz->type = $request->input('type');
        $quiz->description = $request->input('description');
        $quiz->time = $request->input('time');
        $quiz->user_id = Auth::user()->id;

        $quiz->save();
        return redirect('/quizsconseiller');
    }
}
