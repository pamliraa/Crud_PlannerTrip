<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diários</title>
</head>
<body>
    <h1>Criar Diário</h1>

    <form action="{{ route('diarios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Destino:</label><br>
        <select name="destino_id" required>
            <option value="">Selecione</option>
            @foreach ($destinos as $destino)
                <option value="{{ $destino->id }}">{{ $destino->name }}</option>
            @endforeach
        </select><br><br>

        <label>Data:</label><br>
        <input type="date" name="data" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="descricao" rows="4" required></textarea><br><br>

        <label>Foto:</label><br>
        <input type="file" name="foto"><br><br>

        <button type="submit">Salvar</button>
        <a href="{{ route('diarios.index') }}">Voltar</a>
    </form>

</body>
</html>