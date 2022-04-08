<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1 style="text-align: center">
        About Laravel 8 From Scratch Course
    </h1>
    <ol>
        <li>URL: {{$url}}</li>
        <li>METHOD: {{$method}}</li>
        <li>IP: {{$ip}}</li>
        <li>BROWSER: {{$browser}}</li>
    </ol>
    <p style="text-align: center">
        <a href="{{ route('welcome') }}">Home</a>
    </p>
</body>
</html>
