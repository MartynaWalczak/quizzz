<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome-start'); 
});

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes');
Route::get('/quiz/{id}', [QuizController::class, 'show']);