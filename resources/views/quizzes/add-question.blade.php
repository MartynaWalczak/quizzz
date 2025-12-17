<!DOCTYPE html>
<html>
<head>
    <title>Dodaj pytanie</title>
</head>
<body>

<h1>Dodaj pytanie do quizu: {{ $quiz->title }}</h1>

@if ($errors->any())
    <div style="color:red;">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/quiz/{{ $quiz->id }}/add-question">
    @csrf

     Pytanie:<input name="question" required><br>
     Odpowiedź 0:<input name="answers[0]" required><br>
     Odpowiedź 1:<input name="answers[1]" required><br>
     Odpowiedź 2:<input name="answers[2]" required><br>
     Odpowiedź 3:<input name="answers[3]" required><br>
     Poprawna odpowiedź:<input type="number" name="correct_answer" min="0" max="3" required><br>

     <button type="submit">Zapisz</button>

</form>

</body>
</html>
