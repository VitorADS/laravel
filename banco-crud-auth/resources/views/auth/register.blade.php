@extends('layouts.tarefas')

@section('title', 'Cadastro')

@section('content')

    @if ($errors->any())
        <x-alert>
            <ul>
                @slot('type') Erro: @endslot <br/>
                @foreach ( $errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </x-alert><br/>
    @endif

    <form method="POST">
        @csrf

        <label>
            <input type="text" name="name" placeholder="Digite seu nome" value="{{old('name')}}"/>
        </label><br/><br/>
        <label>
            <input type="email" name="email" placeholder="Digite um e-mail" value="{{old('email')}}"/>
        </label><br/><br/>
        <label>
            <input type="password" name="password" placeholder="Digite uma senha" />
        </label><br/><br/>
        <label>
            <input type="password" name="password_confirmation" placeholder="Confirme sua senha" />
        </label><br/>
        <input type="submit" value="Entrar">
    </form>

@endsection
