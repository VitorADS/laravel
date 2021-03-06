@extends('layouts.tarefas')

@section('title', 'Listagem de Tarefas')

@section('content')
    <h1>Listagem</h1>

    Olá, {{$user->name}} <br/> <br/>

    <a href="/logout">Sair</a><br/><br/>

    <a href="{{ route('tarefas.add') }}">Adicionar Nova Tarefa</a><br/>

    @if ($showTask)
        @if(count($list) > 0)
            <ul>
                @foreach ($list as $item)
                    <li>
                        <a href="{{ route('tarefas.done', ['id' => $item->id]) }}">[@if ($item->resolvido === 1)
                            Desmarcar
                        @else Marcar @endif]</a>
                        {{$item->titulo}}
                        <a href="{{ route('tarefas.edit', ['id' => $item->id]) }}">[ Editar ]</a>
                        <a href="{{ route('tarefas.del', ['id' => $item->id]) }}" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
                    </li>
                @endforeach
            </ul>
        @else
            Nao ha itens a serem listados
        @endif
    @endif
@endsection
