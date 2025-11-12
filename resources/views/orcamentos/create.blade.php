<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamento</title>
</head>
<body>
    <h1> Cadastrar Orçamento</h1>

    <form  action="{{ route('orcamentos.store') }}" method="post">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>

        <label for="valorEstimado">Valor Estimado:</label>
        <input type="number" name="valorEstimado" id="valorEstimado" required>
        
        <label for="valorGasto">Valor Gasto:</label>
        <input type="number" name="valorGasto" id="valorGasto" required>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" required>

        <label for="id_destino">Destino relacionado:</label>
        <select name="id_destino">
            <option value="">Selecione um destino</option>
            @foreach($destinos as $destino)
                <option value="{{ $destino->id }}">{{ $destino->nome }}</option>
            @endforeach
        </select>

        <input type="submit" value="Enviar" >
    </form>

    <a href="{{ route('orcamentos.index') }}"> Voltar para lista</a>
</body>
</html>