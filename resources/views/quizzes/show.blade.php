<!DOCTYPE html>
<html>

<body style="background:#111; color:#fff; font-family:Arial; padding:30px;">
    <h1>{{ $quiz['title'] }}</h1>

    @foreach($quiz['questions'] as $index => $question)
        <div style="margin-bottom:25px;">
            <h3>{{ $question['question'] }}</h3>

            @foreach($question['answers'] as $i => $answer)
                <label style="display:block;">
                    <input type="radio" name="q{{ $index }}" value="{{ $i }}">
                    {{ $answer }}
                </label>
            @endforeach
        </div>
    @endforeach

    <br>
    <a href="/quizzes" style="color:orange;">← Powrót do listy quizów</a>
</body>
</html>
