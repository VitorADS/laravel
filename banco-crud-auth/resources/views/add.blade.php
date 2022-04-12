@extends('layouts.tarefas')

@section('title', 'Adicao de Tarefas')

@section('content')
    <h1>Adicao</h1>

    @if (session('warning'))
        <x-alert>
            @slot('type') Aviso: @endslot <br/>
            {{ session('warning') }}
        </x-alert>
    @endif

    <form method="POST">
        @csrf

        <label>
            Titulo: <br/>
            <input type="text" name="titulo" />
        </label><br/><br/>

        <input type="submit" value="Adicionar" />
    </form>

@endsection
