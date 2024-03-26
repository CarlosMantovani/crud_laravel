@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Lista de Cursos</h1>
        <a href="{{ route('cursos.create') }}" class="btn btn-success mb-5">Cadastrar Curso</a>
        <ul>
            @forelse ($cursos as $curso)
                <li>
                    {{ $curso->nome_curso }}
                    @if ($curso->imagem)
                    <img src="{{ url('storage/' . $curso->imagem) }}" alt="{{ $curso->nome_curso }}" style="width: 70px; height: 70px;border-radius:10px">
                    @else
                        <img src="{{ url('favicon.ico') }}" alt="{{ $curso->nome_curso }}">
                    @endif
                    <a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-primary">Detalhes</a>
                    <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este curso?')">Deletar</button>
                    </form>
                </li>
            @empty
                <p>Nenhum curso encontrado.</p>
            @endforelse
        </ul>
    </div>
@endsection
