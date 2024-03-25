<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Aulas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
   


    <div class="container">
        <h1 style="text-align: center">Lista de Aulas</h1>
        <a href="{{ route('aula.create') }}"><button type="button" class="btn btn-success mb-5">Cadastrar Aula</button></a>
        <a href="{{ route('modulos.index') }}"><button type="button" class="btn btn-warning mb-5">Voltar</button></a>
        <ul>
            @foreach ($aulas as $aula)
                <li>{{ $aula->descricao }}</li>

                <a href="{{ route('aula.show', $aula->id) }}"><button type="button"
                        class="btn btn-primary">Detalhes</button></a>
                <form action="{{ route('aula.destroy', $aula->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja excluir esta aula?')">Deletar</button>
                </form>
            @endforeach
        </ul>

    </div>
</body>

</html>
