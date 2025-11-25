<!DOCTYPE html>
<html>
<head>
    <title>Quizy</title>
    <style>
        body {
            background: #111;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 40px;
        }

        h1 {
            margin-bottom: 40px;
            font-size: 40px;
        }

        .quiz-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .quiz-box {
            width: 200px;
            height: 200px;
            background: #222;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(255, 165, 0, 0.4);
            transition: 0.3s;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .quiz-box:hover {
            transform: scale(1.08);
            border-color: orange;
        }

        .quiz-box img {
            width: 100%;
            height: 70%;
            object-fit: cover;
        }

        .quiz-title {
            height: 30%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #222;
            font-size: 20px;
            color: orange;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Wybierz quiz</h1>

    <div class="quiz-container">
        @foreach ($quizzes as $quiz)
    <a href="/quiz/{{ $quiz->id }}" style="text-decoration: none;">
        <div class="quiz-box">
            <img src="/images/{{ strtolower($quiz->title) }}.jpg" alt="{{ $quiz->title }}">
            <div class="quiz-title">{{ $quiz->title }}</div>
        </div>
    </a>
@endforeach
    </div>

</body>
</html>