@extends('layouts.tarefas')

@section('title', 'Adicao de Tarefas')

@section('content')
    <h1>Adicao</h1>

    @if ($errors->any())
        <x-alert>
            @slot('type') Error: @endslot <br/>
            @foreach ($errors->all() as $error)
                {{ $error }} <br/>
            @endforeach
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
