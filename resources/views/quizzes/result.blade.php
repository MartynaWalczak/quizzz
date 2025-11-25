<!DOCTYPE html>
<html>
<head>
    <title>Wynik</title>
</head>
<body style="background:#111; color:#fff; font-family:Arial; padding:40px; text-align:center;">

<h1>Wynik quizu: {{ $quiz['title'] }}</h1>

<h2 style="color:orange; font-size:40px;">
    {{ $score }} / {{ $total }}
</h2>

<p style="font-size:20px;">
    Gratulacje! Sprawdź swoje odpowiedzi lub spróbuj ponownie.
</p>

<br>
<a href="/" style="color:orange; font-size:22px;">◀ Wróć do strony głównej</a>

</body>
</html>
