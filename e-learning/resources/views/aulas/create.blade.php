<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    

    <div class="container">
        <h1 style="text-align: center">Cadastrar Aula</h1>
        <form class="row g-3" action="{{ route('aula.store') }}" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Descrição da aula</label>
                <input type="text" class="form-control" id="inputAddress" name="descricao"required>
            </div>
            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Link aula no youtube</label>
                <input type="text" class="form-control" id="inputAddress" name="link"required>
            </div>
            <label for="modulos_id">Escolha o Modulo</label>
            <select id="modulos_id" name="modulos_id" class="form-control" required>
                @foreach ($modulos as $modulo)
                    <option value="{{ $modulo->id }}">{{ $modulo->titulo }}</option>
                @endforeach
            </select>
            <div class="col-12">
                <button class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
        <a href="{{ route('aula.index') }}"><button class="btn btn-primary mt-2">Voltar</button></a>
    </div>
</body>

</html>
