<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas Sepultadas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container theme">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('css/logo.png') }}" alt="Logo">
            </div>
            <div class="title">
                <h1 class="funeraria-title">Funerária Santa Luzia</h1>
                <p class="slogan">Sua morte, nossa alegria</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Pessoas Sepultadas</h2>
        <a href="{{ route('pessoa_sepultada.create') }}" class="btn">Inserir Pessoa Sepultada</a>
        <table>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Data de Falecimento</th>
                <th>Local do Sepulcro</th>
                <th>Ações</th>
            </tr>
            @foreach ($pessoas as $p)
            <tr>
                <td>{{ $p->nome }}</td>
                <td>{{ $p->data_nascimento }}</td>
                <td>{{ $p->data_falecimento }}</td>
                <td>{{ $p->local_sepulcro }}</td>
                <td>
                    <a href="{{ route('pessoa_sepultada.edit', $p->id) }}" class="btn btn-edit">Editar</a>
                    <a href="{{ route('pessoa_sepultada.delete', $p->id) }}" class="btn btn-delete">Excluir</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
