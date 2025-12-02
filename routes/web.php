<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome-start'); 
});

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes');
Route::get('/quiz/{id}', [QuizController::class, 'show']);
Route::post('/quiz/{id}/submit', [QuizController::class, 'submit']);
Route::get('/quiz/{id}/result', [QuizController::class, 'result']);
Route::get('/quiz/{id}/add-question', [QuizController::class, 'addQuestionForm']);
Route::post('/quiz/{id}/add-question', [QuizController::class, 'storeQuestion']);
