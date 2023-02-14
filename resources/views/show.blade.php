<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>

<body>

    @if ($categoryGame)
        <h1>El nombre del videjouego es: {{ $nameVideogame }} y la categoria es: {{ $categoryGame }} </h1>
    @else
        <h1>El nombre del videjouego es: {{ $nameVideogame }} </h1>
    @endif

    <h3>{{ $fecha }}</h3>
</body>

</html>
