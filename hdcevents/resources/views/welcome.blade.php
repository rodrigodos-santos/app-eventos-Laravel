<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/app.css" />
</head>

<body>
    <h1>Algum Título</h1>
    @if(10 > 15)
    <p>A Condição é True</p>
    @endif

    <p>{{ $nome }}</p>

    @if($nome == "Pedro")
    <p>O nome é Pedro</p>
    @elseif($nome == "Rodrigo")
    <p>O nome é {{$nome}} e ele tem {{$idade2}} anos, e trabalho como {{$profissao}}</p>
    @else
    <p>O nome não é Rodrigo</p>
    @endif

</body>

</html>