<?php

use App\Http\Controllers\ConseilsController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::middleware(['auth'])->group(function () {
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [PageController::class, 'admin'])->name('admin');
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/faqs', FAQController::class);
});

Route::middleware('conseiller', 'auth')->group(function () {

    Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
    Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
    Route::get('/quizzes/{quiz}/conseils', [ConseilsController::class, 'index'])->name('conseils.index');
    Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
    Route::patch('/quizzes/{quiz}', [QuizController::class, 'update'])->name('quizzes.update');
    Route::delete('/quizzes/{quiz}', [QuizController::class, 'destroy'])->name('quizzes.destroy');
    Route::get('/quizzes/{quiz}/questions', [QuestionController::class, 'index'])->name('questions.index');
    Route::get('/quizzes/{quiz}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('/quizzes/{quiz}/questions', [QuestionController::class, 'store'])->name('questions.store');
    Route::get('/quizzes/{quiz}/questions/{question}', [QuestionController::class, 'show'])->name('questions.show');
    Route::get('/quizzes/{quiz}/questions/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
    Route::patch('/quizzes/{quiz}/questions/{question}', [QuestionController::class, 'update'])->name('questions.update');
    Route::delete('/quizzes/{quiz}/questions/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');

    Route::get('/conseils', [ConseilsController::class, 'index'])->name('conseils.index');
    Route::get('/conseils/create', [ConseilsController::class, 'create'])->name('conseils.create');
    Route::post('/conseils', [ConseilsController::class, 'store'])->name('conseils.store');
    Route::get('/conseils/{conseil}', [ConseilsController::class, 'show'])->name('conseils.show');
    Route::get('/conseils/{conseil}/edit', [ConseilsController::class, 'edit'])->name('conseils.edit');
    Route::patch('/conseils/{conseil}', [ConseilsController::class, 'update'])->name('conseils.update');
    Route::delete('/conseils/{conseil}', [ConseilsController::class, 'destroy'])->name('conseils.destroy');
});



Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/conseils', [PageController::class, 'conseils'])->name('conseils');
Route::get('/conseillers', [PageController::class, 'conseillers'])->name('conseillers');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/policy-policy', [PageController::class, 'privatePolicy'])->name('privatePolicy');
Route::get('/terms-and-conditions', [PageController::class, 'termsAndConditions'])->name('termsAndConditions');
Route::get('/single-service', [PageController::class, 'singleService'])->name('singleService');
Route::get('/news', [PageController::class, 'news'])->name('news');

Route::get('/dashboardconseiller', function () {
    return view('dashboardconseiller');
});

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
});



Route::get('/questions', [QuestionController::class, 'index']);

Route::get('/createquestion', [QuestionController::class, 'create'])->name('question.create');
Route::post('/storequestion', [QuestionController::class, 'store'])->name('storequestion');

// Route::get('/conseils', [ConseilsController::class, 'index']);

Route::get('/quizsconseiller', [QuizController::class, 'index']);
Route::get('/quizs', [QuizController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/createquiz', [QuizController::class, 'create'])->name('quiz.create');
Route::post('/storequiz', [QuizController::class, 'store'])->name('quiz.store');
