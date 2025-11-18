<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diários</title>
</head>
<body>
    <h1>Editar Diário</h1>

    <form action="{{ route('diarios.update', $diario->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Destino:</label><br>
        <select name="destino_id" required>
            @foreach ($destinos as $destino)
                <option value="{{ $destino->id }}" {{ $diario->destino_id == $destino->id ? 'selected' : '' }}>
                    {{ $destino->name }}
                </option>
            @endforeach
        </select><br><br>

        <label>Data:</label><br>
        <input type="date" name="data" value="{{ $diario->data }}" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="descricao" rows="4" required>{{ $diario->descricao }}</textarea><br><br>

        <label>Foto atual:</label><br>
        @if ($diario->foto)
            <img src="{{ asset('storage/'.$diario->foto) }}" width="120"><br><br>
        @else
            <span>Sem foto</span><br><br>
        @endif

        <label>Nova foto (opcional):</label><br>
        <input type="file" name="foto"><br><br>

        <button type="submit">Atualizar</button>
        <a href="{{ route('diarios.index') }}">Voltar</a>
    </form>


</body>
</html>