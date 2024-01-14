<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ConseillerQuizController;
use App\Http\Controllers\ConseilsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
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
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
    Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/team/{user}', [ProfileController::class, 'member'])->name('team.show');
    Route::get('/conversation/{user}', [MessageController::class, 'showConversation'])->name('conversation.show');
    Route::post('/conversation/{user}', [MessageController::class, 'store'])->name('messages.store');
});

require __DIR__ . '/auth.php';




Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [PageController::class, 'admin'])->name('admin-dashboard');
    Route::resource('/admin/users', UserController::class)->except('show');
    Route::resource('/admin/faqs', FAQController::class);
    Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.messages');
});


Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/conseils', [PageController::class, 'conseils'])->name('conseils');
Route::get('/conseillers', [PageController::class, 'conseillers'])->name('conseillers');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/messages', [ContactController::class, 'store'])->name('contact.store');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/policy-policy', [PageController::class, 'privatePolicy'])->name('privatePolicy');
Route::get('/terms-and-conditions', [PageController::class, 'termsAndConditions'])->name('termsAndConditions');
Route::get('/single-service', [PageController::class, 'singleService'])->name('singleService');
Route::get('/news', [PageController::class, 'news'])->name('news');

Route::middleware('conseiller', 'auth')->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointments.show');
    Route::post('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');
    Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
    Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

    Route::get('/conseiller-dashboard', [PageController::class, 'conseiller'])->name('conseiller-dashboard');
    Route::resource('conseiller/messages', MessageController::class)->names([
        'index' => 'conseiller.messages.index',
        'create' => 'conseiller.messages.create',
        'store' => 'conseiller.messages.store',
        'show' => 'conseiller.messages.show',
        'edit' => 'conseiller.messages.edit',
        'update' => 'conseiller.messages.update',
        'destroy' => 'conseiller.messages.destroy',
    ]);
    Route::get('chat/{user}', [MessageController::class, 'showMessages'])->name('chat');

    Route::prefix('consiller')->group(function () {
        Route::resource('/quizzes', ConseillerQuizController::class)->names([
            'index' => 'conseiller.quizzes.index',
            'create' => 'conseiller.quizzes.create',
            'store' => 'conseiller.quizzes.store',
            'show' => 'conseiller.quizzes.show',
            'edit' => 'conseiller.quizzes.edit',
            'update' => 'conseiller.quizzes.update',
            'destroy' => 'conseiller.quizzes.destroy',
        ]);
    });

    Route::get('/allconseils', [ConseilsController::class, 'index'])->name('allconseils');
    Route::get('/conseils/create', [ConseilsController::class, 'create'])->name('conseils.create');
    Route::post('/conseils', [ConseilsController::class, 'store'])->name('conseils.store');
    Route::get('/conseils/{conseil}', [ConseilsController::class, 'show'])->name('conseils.show');
    Route::get('/conseils/{conseil}/edit', [ConseilsController::class, 'edit'])->name('conseils.edit');
    Route::patch('/conseils/{conseil}', [ConseilsController::class, 'update'])->name('conseils.update');
    Route::delete('/conseils/{conseil}', [ConseilsController::class, 'destroy'])->name('conseils.destroy');
});
