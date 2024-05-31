<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Pessoa Sepultada</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container theme">
        <h1>Excluir Pessoa Sepultada</h1>
    </div>
    <div class="container">
        <form action="{{ route('pessoa_sepultada.destroy', $pessoa->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <p>Tem certeza que deseja excluir {{ $pessoa->nome }}?</p>
            <button type="submit">Excluir</button>
        </form>
    </div>
</body>
</html>
