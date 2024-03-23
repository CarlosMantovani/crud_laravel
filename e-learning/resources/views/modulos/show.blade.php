
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
<div class="container">
  <h1 style="text-align: center">Detalhes Do Modulo</h1>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome do Modulo</th>
              <th scope="col">Curso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $modulo->id }}</td>
              <td>{{ $modulo->titulo }}</td>
              <td>{{ $curso->nome_curso }}</td>
            </tr>
  
          </tbody>
  
        </table>
        <a href="{{route('modulos.index')}}"><button type="button" class="btn btn-warning">Voltar</button></a>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


