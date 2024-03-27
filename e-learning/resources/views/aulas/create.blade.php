@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="text-align: center">Cadastrar Aula</h1>
        <form class="row g-3" action="{{ route('aula.store') }}" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="descricao" class="form-label">Descrição da Aula</label>
                <input type="text" class="form-control" id="descricao" name="descricao" required>
            </div>
            <div class="col-md-6">
                <label for="link" class="form-label">Link da Aula no YouTube</label>
                <input type="text" class="form-control" id="link" name="link" required>
            </div>
            <div class="col-md-6">
                <label for="modulos_id" class="form-label">Escolha o Módulo</label>
                <select id="modulos_id" name="modulos_id" class="form-control" required>
                    @foreach ($modulos as $modulo)
                        <option value="{{ $modulo->id }}">{{ $modulo->titulo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <button class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
        <a href="{{ route('aula.index') }}" class="btn btn-primary mt-2">Voltar</button></a>
    </div>
@endsection
