<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>
<body>
    <h1> Cadastrar Destino</h1>

    <form  action="{{ route('destinos.store') }}" method="post">
        @csrf
    <label for="name">Nome do Destino:</label>
    <input type="text" name="name" id="name" placeholder="Ex.: Paris" required>

    <label for="descricao">Descrição:</label>
    <input type="text" name="descricao" id="descricao" placeholder="Ex.: Capital da França, famosa pela Torre Eiffel e museus" required>

    <input type="submit" value="Enviar" >
    </form>

    <a href="{{ route('destinos.index') }}"> Voltar para lista</a>
</body>
</html>