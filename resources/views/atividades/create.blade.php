<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <h1> Cadastrar Atividade</h1>

    <form  action="{{ route('atividades.store') }}" method="post">
        @csrf
        <label for="titulo">Título da Atividade:</label>
        <input type="text" name="titulo" id="titulo" placeholder="Ex.: Passeio pelo centro histórico" required>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" placeholder="Ex.: Visita guiada com duração de 2 horas" required>

        <label for="data">Data:</label>
        <input type="date" name="data" id="data" required>

        <label for="local">Local:</label>
        <input type="text" name="local" id="local" placeholder="Ex.: Lisboa, Portugal" required>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="" disabled selected>Selecione o status</option>
            <option value="planejado">Planejado</option>
            <option value="confirmado">Confirmado</option>
            <option value="em_andamento">Em andamento</option>
            <option value="concluido">Concluído</option>
            <option value="cancelado">Cancelado</option>
        </select>

        <input type="submit" value="Enviar" >
    </form>

    <a href="{{ route('atividades.index') }}"> Voltar para lista</a>
</body>
</html>