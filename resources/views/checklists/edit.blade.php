<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist</title>
</head>
<body>
    <h1>Editar Item do Checklist</h1>

<form action="{{ route('checklists.update', $checklist->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Destino:</label><br>
    <select name="destino_id" required>
        @foreach ($destinos as $destino)
            <option value="{{ $destino->id }}"
                {{ $destino->id == $checklist->destino_id ? 'selected' : '' }}>
                {{ $destino->name }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Título:</label><br>
    <input type="text" 
           name="titulo" 
           value="{{ $checklist->titulo }}" 
           placeholder="Ex: Preparar documentos" 
           required>
    <br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao" 
              placeholder="Descreva o item..."
              required>{{ $checklist->descricao }}</textarea>
    <br><br>

    <label>Status:</label><br>
    <select name="concluido">
        <option value="0" {{ !$checklist->concluido ? 'selected' : '' }}>Pendente</option>
        <option value="1" {{ $checklist->concluido ? 'selected' : '' }}>Concluído</option>
    </select>
    <br><br>

    <button type="submit">Atualizar</button>
</form>

<br>
<a href="{{ route('checklists.index') }}">Voltar</a>

</body>
</html>