<!DOCTYPE html>
<html>
<head>
    <title>{{ $quiz['title'] }}</title>
</head>
<body style="background:#111; color:#fff; font-family:Arial; padding:30px;">

<h1>{{ $quiz['title'] }}</h1>

<form action="/quiz/{{ $id }}/submit" method="POST">
    @csrf

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

    <button type="submit" style="padding:10px 20px; background:orange; border:none; font-size:18px; cursor:pointer;">
        Zatwierdź
    </button>
</form>

<br>
<a href="/" style="color:orange;">◀ Powrót</a>

</body>
</html>
