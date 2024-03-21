
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
              <th scope="col">Quantidade De Modulos</th>
              <th scope="col">Quantidade De Aulas</th>
              <th scope="col">Titulo</th>
              <th scope="col">Descrição</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $curso->id }}</td>
              <td>{{ $curso->nome_curso }}</td>
              <td>{{ $curso->quantidade_modulos }}</td>
              <td>{{ $curso->quantidade_aulas }}</td>
              <td>{{ $curso->titulo  }}</td>
              <td>{{ $curso->descricao }}</td>
            </tr>
  
          </tbody>
  
        </table>
        <a href="/listar-cursos"><button type="button" class="btn btn-warning">Voltar</button></a>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


