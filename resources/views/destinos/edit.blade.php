<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>
<body>
    <h1> Cadastrar Destino</h1>

   <form id="destino-form" action="{{ route('destinos.update', $destino->id) }}" method="post">
        @csrf
        @method("put")
        <label for="name">Nome do Destino:</label>
        <input type="text" name="name" id="name"  value="{{ $destino->name }}" required>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao"  value="{{ $destino->descricao }}"required>

        <input type="submit" value="Enviar" >
    </form>

    <a href="{{ route('destinos.index') }}">← Voltar para lista</a>
</body>
</html>