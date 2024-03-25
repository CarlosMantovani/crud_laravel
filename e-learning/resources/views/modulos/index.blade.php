
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Modulos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

        @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif
    
    <div class="container">
      
      <h1 style="text-align: center">Lista de Modulos</h1>
      <a href="{{route('modulos.create')}}"><button type="button" class="btn btn-success mb-5">Cadastra Modulos</button></a>
      <a href="{{route('cursos.index')}}"><button type="button" class="btn btn-warning mb-5">Voltar</button></a>
      <a href="{{route('aula.create')}}"><button type="button" class="btn btn-success mb-5">Cadastra Aula</button></a>
      <ul>
        @foreach($modulos as $modulo)
          <li>{{ $modulo->titulo }}</li>
          
              <a href="{{ route('modulos.show', $modulo->id) }}"><button type="button" class="btn btn-primary">Detalhes</button></a>
              <form action="{{ route('modulos.destroy', $modulo->id) }}" method="POST" style="display: inline-block;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este Modulo? Ele apagara as aulas também!')">Deletar</button>
              </form>
             @endforeach
      </ul>

    </div>
  </body>
</html>