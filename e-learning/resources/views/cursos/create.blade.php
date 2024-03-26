@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Cadastrar Curso</h1>
        <form class="row g-3" action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <label for="inputAddress" class="form-label">Nome do Curso</label>
                <input type="text" class="form-control" id="inputAddress" name="nome" required>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="inputAddress2" name="titulo_curso" required>
            </div>
            <div class="col-12">
                <label for="inputZip" class="form-label">descricao</label>
                <input type="text" class="form-control" id="inputZip" name="desc" required>
            </div>
            <div class="col-12">
                <label for="imagem" class="form-label">Imagem do Curso</label>
                <input type="file" class="form-control" id="imagem" name="imagem">
            </div>
            <div class="col-12">
                <button class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
        <a href="{{ route('cursos.index') }}" class="btn btn-primary mt-2">Voltar</a>
    </div>
@endsection
