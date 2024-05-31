<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Pessoas Sepultadas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container theme">
        <h1>Formulário de Inserção de Pessoas Sepultadas</h1>
    </div>
    <div class="container">
        <form action="{{ route('pessoa_sepultada.store') }}" method="POST">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento">
            <label for="data_falecimento">Data de Falecimento:</label>
            <input type="date" name="data_falecimento" id="data_falecimento">
            <label for="local_sepulcro">Local do Sepulcro:</label>
            <input type="text" name="local_sepulcro" id="local_sepulcro">
            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>
