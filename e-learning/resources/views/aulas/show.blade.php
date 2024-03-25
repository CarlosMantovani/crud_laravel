
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes Aula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

<div class="container">
  <h1 style="text-align: center">Detalhes Do Aula</h1>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Titulo da aula</th>
              <th scope="col">link</th>
              <th scope="col">Curso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $aula->id }}</td>
              <td>{{ $aula->descricao }}</td>
              <td><a href="{{ $aula->link }}" target="_blank">{{ $aula->link }}</a></td>
              <td>{{ $modulo->titulo }}</td>
            </tr>
  
          </tbody>
  
        </table>
        <a href="{{route('aula.index')}}"><button type="button" class="btn btn-warning">Voltar</button></a>
</div>
  </body>
</html>


