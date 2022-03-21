<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teste</title>
</head>
<body> 
    @component('components.div')
        @slot('imagem')
            <img src="{{$pessoas[0]['image']}}" />
        @endslot
        @slot('nome')
            {{$pessoas[0]['nome']}}
        @endslot
        @slot('nascimento')
            {{$pessoas[0]['birth']}}
        @endslot
        @slot('idade')
            {{$pessoas[0]['idade']}}
        @endslot
    @endcomponent

    @component('components.div')
        @slot('imagem')
            <img src="{{$pessoas[1]['image']}}" />
        @endslot
        @slot('nome')
            {{$pessoas[1]['nome']}}
        @endslot
        @slot('nascimento')
            {{$pessoas[1]['birth']}}
        @endslot
        @slot('idade')
            {{$pessoas[1]['idade']}}
        @endslot
    @endcomponent

    @component('components.div')
        @slot('imagem')
            <img src="{{$pessoas[2]['image']}}" />
        @endslot
        @slot('nome')
            {{$pessoas[2]['nome']}}
        @endslot
        @slot('nascimento')
            {{$pessoas[2]['birth']}}
        @endslot
        @slot('idade')
            {{$pessoas[2]['idade']}}
        @endslot
    @endcomponent
</body>
</html>