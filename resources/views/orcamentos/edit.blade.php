<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamentos</title>
</head>
<body>
    <h1> Atualizar Orçamento</h1>

     <form action="{{ route('orcamentos.update', $orcamento->id) }}" method="post">
        @csrf
        @method("put")
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $orcamento->titulo }}" required>

        <label for="valorEstimado">Valor Estimado:</label>
        <input type="number" name="valorEstimado" id="valorEstimado" value="{{ $orcamento->valorEstimado }}" required>
        
        <label for="valorGasto">Valor Gasto:</label>
        <input type="number" name="valorGasto" id="valorGasto" value="{{ $orcamento->valorGasto }}" required>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao"  value="{{ $orcamento->descricao }}" required>

        <input type="submit" value="Enviar" >
    </form>

    <a href="{{ route('orcamentos.index') }}"> Voltar para lista</a>
</body>
</html>