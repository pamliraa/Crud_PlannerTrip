<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atividade</title>
</head>
<body>

    <div>
        <a href="{{ route('atividades.create') }}">Cadastrar Nova Atividade</a>
    </div>

    <h1>Atividade</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div>
            {{ session('error') }}
        </div>
    @endif

    <ul>
        @foreach($atividades as $atividade)
        <li>
            <div>
                <strong>{{ $atividade->titulo }}</strong><br>
                <small>Descrição: {{ $atividade->descricao }}</small><br>
                <small>Data: {{ $atividade->data }}</small><br>
                <small>Local: {{ $atividade->local }}</small><br>
                <small>Status: {{ $atividade->status }}</small><br>
            </div>

            <div>
                <a href="{{ route('atividades.edit', $atividade->id) }}">Editar</a>

                <form action="{{ route('atividades.destroy', $atividade->id) }}" method="post" style="display:inline">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Excluir" onclick="return confirm('Tem certeza que quer excluir?')">
                </form>
            </div>
        </li>
        @endforeach
    </ul>

</body>
</html>
