<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Lista de Pessoas</title>
    </head>
    <body>
        <h1>Pessoas Cadastradas</h1>

        @if($pessoas->isEmpty())
            <p>Nenhuma pessoa cadastrada.</p>
        @else
            <table border="1" class="tabela-container">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pessoas as $pessoa)
                    <tr>
                        <td>{{ $pessoa->id }}</td>
                        <td>{{ $pessoa->nome }}</td>
                        <td>{{ $pessoa->cpf }}</td>
                        <td>{{ $pessoa->telefone }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('pessoa.create') }}">
            <button>Voltar ao Formulário</button>
        </a>
    </body>
</html>
