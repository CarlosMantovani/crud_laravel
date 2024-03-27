@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="text-align: center">Cadastrar Módulo</h1>
        <form class="row g-3" action="{{ route('modulos.store') }}" method="POST">
            @csrf
            <div class="col">
                <label for="inputAddress" class="form-label">Título do Módulo</label>
                <input type="text" class="form-control" id="inputAddress" name="titulo" required>
            </div>
            <div class="col">
                <label for="curso_id" class="form-label">Escolha o Curso</label>
                <select id="curso_id" name="curso_id" class="form-control" required>
                    @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->nome_curso }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
        <a href="{{ route('modulos.index') }}" class="btn btn-primary mt-2">Voltar</a>
    </div>
@endsection
