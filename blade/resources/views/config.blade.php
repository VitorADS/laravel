@extends('layouts.admin')

@section('title', 'Configuracoes')

@section('content')
    <h1>Configuracoes</h1><br>

    Nome: {{$name}} - Idade: {{$age}} <br>

    @if($age > 18 && $age < 60)
        Eu sou maior de idade.
    @elseif($age >= 60 && $age <= 120)
        Eu sou idoso.
    @else
        Eu nao sou maior de idade.
    @endif <br>

    @isset($version)
        Existe uma versao e é a: {{$version}} <br>
    @endisset

    @empty($cidade)
        Não existe uma cidade. <br>
    @endempty

@endsection
