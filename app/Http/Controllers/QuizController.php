<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        // pobiera wszystkie quizy z tabeli `quizzes`
        $quizzes = Quiz::all();

        return view('quizzes.index', [
            'quizzes' => $quizzes,
        ]);
    }

    public function show($id)
    {
        // pobiera quiz + od razu jego pytania i odpowiedzi
        $quiz = Quiz::with(['questions.answers'])->findOrFail($id);

        return view('quizzes.show', [
            'quiz' => $quiz,
        ]);
    }

    // jeśli masz sprawdzanie wyniku:
    public function submit(Request $request, $id)
    {
        $quiz = Quiz::with('questions')->findOrFail($id);

        $score = 0;

        foreach ($quiz->questions as $index => $question) {
            $userAnswer = $request->input("q$index");

            if ($userAnswer !== null && (int)$userAnswer === (int)$question->correct_answer) {
                $score++;
            }
        }

        return redirect("/quiz/$id/result")
            ->with('score', $score)
            ->with('total', $quiz->questions->count());
    }

    public function result($id)
    {
        $quiz = Quiz::findOrFail($id);

        $score = session('score');
        $total = session('total');

        if ($score === null || $total === null) {
            return redirect("/quiz/$id");
        }

        return view('quizzes.result', compact('quiz', 'score', 'total'));
    }
}
