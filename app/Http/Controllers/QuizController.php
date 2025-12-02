<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;


class QuizController extends Controller
{
    public function index()
    {
        // SELECT * FROM quizzes;
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

    // sprawdzanie wyniku:
    public function submit(Request $request, $id)
    {
        $quiz = Quiz::with('questions')->findOrFail($id);

        $score = 0; //licznik poprawnych odpowiedzi

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

        return view('quizzes.result', compact('quiz', 'score', 'total'));
    }

    public function addQuestionForm($id)
{
    $quiz = Quiz::findOrFail($id);
    return view('quizzes.add-question', compact('quiz'));
}

public function storeQuestion(Request $request, $id)
{
    // Walidacja
    $request->validate([
        'question' => 'required|min:3',
        'answers.*' => 'required',
        'correct_answer' => 'required|integer|min:0|max:3'
    ]);

    // Dodanie pytania do bazy
    $question = Question::create([
        'quiz_id' => $id,
        'question' => $request->question,
        'correct_answer' => $request->correct_answer,
    ]);

    // Zapis odpowiedzi
    foreach ($request->answers as $index => $answerText) {
        Answer::create([
            'question_id' => $question->id,
            'answer' => $answerText,
            'index' => $index
        ]);
    }

    return redirect("/quiz/$id")->with('success', 'Pytanie zostało dodane!');
}

}
