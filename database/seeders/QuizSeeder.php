<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::factory(10)->create()->each(function ($quiz) {
            Question::factory(10)->create(['quiz_id' => $quiz->id])->each(function ($question) {
                Option::factory(rand(2, 5))->create(['question_id' => $question->id]);
            });
        });
    }
}
