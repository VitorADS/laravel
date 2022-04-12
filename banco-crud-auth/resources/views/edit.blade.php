@extends('layouts.tarefas')

@section('title', 'Edicao de Tarefas')

@section('content')
    <h1>Edicao</h1>

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
            <input type="text" name="titulo" value="{{ $data->titulo }}"/>
        </label><br/><br/>

        <input type="submit" value="Salvar" />
    </form>

@endsection
