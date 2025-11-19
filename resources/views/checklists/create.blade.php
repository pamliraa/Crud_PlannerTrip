<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist</title>
</head>
<body>
    <h1>Adicionar ao Checklist</h1>

<form action="{{ route('checklists.store') }}" method="POST">
    @csrf

    <label>Destino:</label><br>
    <select name="destino_id" required>
        <option value="">Selecione um destino</option>
        @foreach ($destinos as $destino)
            <option value="{{ $destino->id }}">{{ $destino->name }}</option>
        @endforeach
    </select>
    <br><br>

    <label>Título:</label><br>
    <input type="text" name="titulo"  placeholder="Ex: Preparar documentos" required>
    <br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao" placeholder="Ex: Verificar passaporte, imprimir passagens..."required></textarea>
    <br><br>

    <label>Status:</label><br>
    <select name="concluido">
        <option value="0">Pendente</option>
        <option value="1">Concluído</option>
    </select>
    <br><br>

    <button type="submit">Salvar</button>
</form>

<br>
<a href="{{ route('checklists.index') }}">Voltar</a>
</body>
</html>





