
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 style="text-align: center">Lista de Cursos</h1>
      <a href="/"><button type="button" class="btn btn-success mb-5">Cadastra Curso</button></a>
      <ul>
          @foreach($cursos as $curso)
              <li>{{ $curso->nome_curso }}</li>
              <a href="{{ route('mostrar-curso', ['id_do_curso' => $curso->id]) }}"><button type="button" class="btn btn-primary">Detalhes</button></a>
      
             <a href="{{ route('editar-curso', ['id_do_curso' => $curso->id]) }}"><button type="button" class="btn btn-secondary">Editar</button></a>
      
             <a href="{{ route('deletar-curso', ['id_do_curso' => $curso->id]) }}"><button type="button" class="btn btn-danger">Deletar</button></a>
             @endforeach
      </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>