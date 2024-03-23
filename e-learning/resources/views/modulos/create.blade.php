
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <h1 style="text-align: center">Cadastrar Curso</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form class="row g-3" action="{{ route('modulos.store') }}" method="POST">
    @csrf
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">Titulo do Modulo</label>
      <input type="text" class="form-control" id="inputAddress" name="titulo"required >
    </div>

    <label for="curso_id">Escolha o Curso</label>
    <select id="curso_id" name="curso_id" class="form-control" required>
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}">{{ $curso->nome_curso }}</option>
        @endforeach
</select>
    <div class="col-12">
      <button class="btn btn-primary">Cadastrar</button>
    </div>
  </form>
  <a href="{{route('modulos.index')}}"><button class="btn btn-primary mt-2">Voltar</button></a> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
