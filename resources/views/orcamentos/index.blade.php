<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Orçamentos</title>
</head>
<body>

    <div>
        <a href="{{ route('orcamentos.create') }}">Cadastrar Orçamento</a>
    </div>

    <h1>Orçamentos</h1>

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
        @foreach($orcamentos as $orcamento)
        <li>
            <div>
                <strong>{{ $orcamento->titulo }}</strong><br>
                <small>Valor Estimado: {{ $orcamento->valorEstimado}}</small>
                <small>Valor Gasto: {{ $orcamento->valorGasto }}</small>
                <small>Descrição: {{ $orcamento->descricao }}</small>
            </div>

            <div>
                <a href="{{ route('orcamentos.edit', $orcamento->id) }}">Editar</a>

                <form action="{{ route('orcamentos.destroy', $orcamento->id) }}" method="post" style="display:inline">
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
