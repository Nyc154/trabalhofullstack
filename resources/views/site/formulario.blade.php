<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Formulário de Cadastro</title>
    </head>
        <body>


            <h1>Cadastro de Pessoa</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <p>{{ session('success') }}</p>
            @endif

            <form class="form-container" action="{{ route('pessoa.store') }}" method="POST">
                @csrf
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required>

                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" required>

                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" required>

                <button type="submit">Cadastrar</button>
            </form>

            <a href="{{ route('pessoa.index') }}">
                <button class="acessar">Ver Pessoas Cadastradas</button>
            </a>
        </body>
</html>
