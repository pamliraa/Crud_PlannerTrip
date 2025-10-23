<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destinos</title>
</head>
<body>

    <div>
        <a href="{{ route('destinos.create') }}">Cadastrar Novo Destino</a>
    </div>

    <h1>Destinos</h1>

    {{-- Mensagens de retorno --}}
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
        @foreach($destinos as $destino)
        <li>
            <div>
                <strong>{{ $destino->name }}</strong><br>
                <small>Descrição: {{ $destino->descricao }}</small>
            </div>

            <div>
                <a href="{{ route('destinos.edit', $destino->id) }}">Editar</a>

                <form action="{{ route('destinos.destroy', $destino->id) }}" method="post" style="display:inline">
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
