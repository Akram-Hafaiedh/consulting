<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ConseillerQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // $quizzes = auth()->user()->quizzes;
        $quizzes = Quiz::all();

        return view('conseiller.quizzes.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('conseiller.quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuizRequest $request)
    {
        $validated = $request->validated();

        DB::transaction(function () use ($validated) {
            $quiz = Quiz::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                // include other quiz details
            ]);

            foreach ($validated['questions'] as $questionData) {
                $question = $quiz->questions()->create([
                    'content' => $questionData['content'],
                    // include other question details
                ]);

                foreach ($questionData['options'] as $optionData) {
                    $question->options()->create([
                        'text' => $optionData['text'],
                        // include other option details
                    ]);
                }
            }
        });

        return redirect()->route('conseiller.quizzes.index')->with('success', 'Quiz created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        $quiz->load('questions', 'questions.options');
        return view('conseiller.quizzes.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        $validated = $request->validated();
        DB::transaction(function () use ($validated, $quiz) {
            $quiz->update([
                'title' => $validated['title'],
                'description' => $validated['description'],
                // include other quiz details
            ]);

            $quiz->questions()->delete();

            foreach ($validated['questions'] as $questionData) {
                $question = $quiz->questions()->create([
                    'content' => $questionData['content'],
                    // include other question details
                ]);

                foreach ($questionData['options'] as $optionData) {
                    $question->options()->create([
                        'text' => $optionData['text'],
                        // include other option details
                    ]);
                }
            }
        });
        return redirect()->route('conseiller.quizzes.index')->with('success', 'Quiz updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('conseiller.quizzes.index')->with('success', 'Quiz deleted successfully!');
    }
}
