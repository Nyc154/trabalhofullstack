<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Página Inicial</title>
    </head>
        <body>
        <div class="container">
            <h1>Bem-vindo!</h1>
            <a href="{{ route('pessoa.create') }}">
                <button>Acessar Formulário</button>
            </a>
        </div>
    </body>
</html>
