@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="text-align: center">Lista de Aulas</h1>
        <a href="{{ route('aula.create') }}" class="btn btn-success mb-5">Cadastrar Aula</a>
        <a href="{{ route('modulos.index') }}" class="btn btn-warning mb-5">Voltar</a>
        <ul>
            @forelse ($aulas as $aula)
                <li>{{ $aula->descricao }}
                    <a href="{{ route('aula.show', $aula->id) }}" class="btn btn-primary">Detalhes</a>
                    <form action="{{ route('aula.destroy', $aula->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta aula?')">Deletar</button>
                    </form>
                </li>
            @empty
                <li>Nenhuma aula cadastrada.</li>
            @endforelse
        </ul>
    </div>
@endsection
