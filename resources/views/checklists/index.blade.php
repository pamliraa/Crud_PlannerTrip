<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist</title>
</head>
<body>
    <h1>Checklist</h1>

    @if(session('success'))
        <p style="color: green; font-weight: bold;">
            {{ session('success') }}
        </p>
    @endif


<a href="{{ route('checklists.create') }}">Adicionar Item</a>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>Destino</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($checklists as $item)
            <tr>
                <td>{{ $item->destino->name ?? '—' }}</td>
                <td>{{ $item->titulo }}</td>
                <td>{{ $item->descricao }}</td>
                <td>{{ $item->concluido ? 'Concluído' : 'Pendente' }}</td>

                <td>
                    <a href="{{ route('checklists.edit', $item->id) }}">Editar</a>

                    <form action="{{ route('checklists.destroy', $item->id) }}" 
                          method="POST" 
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Deseja excluir este item?')">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>