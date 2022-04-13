@extends('layouts.tarefas')

@section('title', 'Login')

@section('content')

    @if (session('warning'))
        <x-alert>
            @slot('type') Erro: @endslot <br/>
            {{ session('warning') }}
        </x-alert><br/>
    @endif

    <form method="POST">
        @csrf

        <label>
            <input type="email" name="email" placeholder="Digite um e-mail" />
        </label><br/><br/>
        <label>
            <input type="password" name="password" placeholder="Digite uma senha" />
        </label><br/><br/>
        <input type="submit" value="Entrar">
    </form>

    Tentativas: {{ $tries }}

@endsection
