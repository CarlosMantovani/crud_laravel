
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
  <h1 style="text-align: center">Detalhes Do Curso</h1>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome do Curso</th>
              <th scope="col">Titulo</th>
              <th scope="col">Descrição</th>
              <th scope="col">Quantidade de Cursos</th>
              <th scope="col">Quantidade de Modulos</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $curso->id }}</td>
              <td>{{ $curso->nome_curso }}</td>
              <td>{{ $curso->titulo  }}</td>
              <td>{{ $curso->descricao }}</td>
              <td>{{ $quantidadeModulos}}</td>
              <td>{{ $quantidadeAulas }}</td>
            </tr>
  
          </tbody>
  
        </table>
        <a href="{{route('cursos.index')}}"><button type="button" class="btn btn-warning">Voltar</button></a>
</div>
  </body>
</html>


