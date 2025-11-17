<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <h1> Atualizar Atividade</h1>

     <form action="{{ route('atividades.update', $atividade->id) }}" method="post">
        @csrf
        @method("put")
        <label for="titulo">Título da Atividade:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $atividade->titulo }}" required>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao"  value="{{ $atividade->descricao }}" required>

        <label for="data">Data:</label>
        <input type="date" name="data" id="data" value="{{ $atividade->data }}" required>
        
        <label for="local">Local:</label>
        <input type="text" name="local" id="local" value="{{ $atividade->local }}" required>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="planejado" {{ $atividade->status === 'planejado' ? 'selected' : '' }}>
                Planejado
            </option>
            <option value="confirmado" {{ $atividade->status === 'confirmado' ? 'selected' : '' }}>
                Confirmado
            </option>
            <option value="em_andamento" {{ $atividade->status === 'em_andamento' ? 'selected' : '' }}>
                Em andamento
            </option>
            <option value="concluido" {{ $atividade->status === 'concluido' ? 'selected' : '' }}>
                Concluído
            </option>
            <option value="cancelado" {{ $atividade->status === 'cancelado' ? 'selected' : '' }}>
                Cancelado
            </option>
        </select>
        
        <input type="submit" value="Enviar" >
    </form>

    <a href="{{ route('atividades.index') }}"> Voltar para lista</a>
</body>
</html>