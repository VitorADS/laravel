@extends('layouts.admin')

@section('title', 'Configuracoes')

@section('content')
    <h1>Configuracoes</h1><br>

    Nome: {{$name}} - Idade: {{$age}} <br><br>

    <!--@for ($i = 0; $i < 10; $i++)
        O valor é {{$i}} <br/>
    @endfor -->

    <!--@if (count($lista) > 0)
    Lista do bolo:
    <ul>
        @foreach ($lista as $item)
            <li>{{$item['nome']}}</li>
        @endforeach
    </ul>
    @else
        Nao ha ingredientes.
    @endif-->


    <x-alert>
        @slot('type') teste @endslot
         Alguma frase qualquer...
    </x-alert>
    <ul>
        @forelse ($lista as $item)
            <li>{{$item['nome']}} - Quantidade: {{$item['qt']}}</li>
        @empty
            Nao ha ingredientes.
        @endforelse
    </ul>

@endsection
