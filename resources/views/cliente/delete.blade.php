<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Clientes </title>
</head>
<body>
    <h1>Formulário de Alteração de Clientes </h1>
    <form action="{{ route ('cliente.destroy', $cliente->id)}}" method="POST">
        @CSRF
        @method('DELETE')

        <label for="nome"> Informe o nome do Cliente</label>
    <input type="text" name="nome" id="nome"disabled><br/>
    <label for="telefone"> Informe o telefone do Cliente</label>
    <input type="text" name="telefone" id="telefone" value="{{$cliente->telefone}}" disabled><br/>
    <label for="email"> Informe o email do Cliente</label>
    <input type="email" name="email" id="email" disabled><br/>
    <button type="submit">Salvar</button>
    
    
</form>
</body>
</html>