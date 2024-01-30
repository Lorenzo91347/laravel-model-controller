<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <ul>
    @foreach($movies as $movie)
    <li>{{$movie -> id}}</li>
    <li>{{$movie -> title}}</li>
    <li>{{$movie -> original_title}}</li>
    <li>{{$movie -> nationality}}</li>
    <li>{{$movie -> date}}</li>
    <li>{{$movie -> vote}}</li>
    @endforeach
    </ul>
</body>
</html>