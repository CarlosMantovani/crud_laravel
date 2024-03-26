@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <h1 style="text-align: center">Lista de Módulos</h1>
        <div class="mb-5">
            <a href="{{ route('modulos.create') }}" class="btn btn-success">Cadastrar Módulos</a>
            <a href="{{ route('cursos.index') }}" class="btn btn-warning">Voltar</a>
            <a href="{{ route('aula.create') }}" class="btn btn-success">Cadastrar Aula</a>
        </div>
        <ul>
            @foreach ($modulos as $modulo)
                <li>{{ $modulo->titulo }}
                    <a href="{{ route('modulos.show', $modulo->id) }}" class="btn btn-primary">Detalhes</a>
                    <form action="{{ route('modulos.destroy', $modulo->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este Módulo? Ele apagará as aulas também!')">Deletar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
