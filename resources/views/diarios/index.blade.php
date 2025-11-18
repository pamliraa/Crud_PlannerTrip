<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diários</title>
</head>
<body>
    <h1>Lista de Diários</h1>

<a href="{{ route('diarios.create') }}">Criar novo diário</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Destino</th>
            <th>Data</th>
            <th>Foto</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($diarios as $diario)
            <tr>
                <td>{{ $diario->destino->name ?? 'Destino não encontrado' }}</td>
                <td>{{ $diario->data }}</td>

                <td>
                    @if ($diario->foto)
                        <img src="{{ asset('storage/' . $diario->foto) }}" width="70">
                    @else
                        <span>Sem foto</span>
                    @endif
                </td>

                <td>{{ $diario->descricao }}</td>

                <td>
                    <a href="{{ route('diarios.edit', $diario->id) }}">Editar</a>

                    <form action="{{ route('diarios.destroy', $diario->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Excluir este diário?')">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>