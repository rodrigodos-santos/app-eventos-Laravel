@extends('layouts.main')

@section('title', 'RDS Events')

@section('content')
    <h1>Algum Título</h1>

    @if (10 > 15)
        <p>A Condição é True</p>
    @endif

    <p>{{ $nome }}</p>

    @if ($nome == 'Pedro')
        <p>O nome é Pedro</p>
    @elseif($nome == "Rodrigo")
        <p>O nome é {{ $nome }} e ele tem {{ $idade2 }} anos, e trabalho como {{ $profissao }}</p>
    @else
        <p>O nome não é Rodrigo</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if ($i == 2)
            <p>O i é 2</p>
        @endif
    @endfor

    @php
    $name = 'João';
    echo $name;
    @endphp

    {{-- Este é um comentário do Blade --}}

@endsection
