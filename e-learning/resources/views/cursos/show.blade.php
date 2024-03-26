@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="text-align: center">Detalhes do Curso</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome do Curso</th>
                    <th scope="col">Título</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Quantidade de Módulos</th>
                    <th scope="col">Quantidade de Aulas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome_curso }}</td>
                    <td>{{ $curso->titulo }}</td>
                    <td>{{ $curso->descricao }}</td>
                    <td>{{ $quantidadeModulos }}</td>
                    <td>{{ $quantidadeAulas }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('cursos.index') }}" class="btn btn-warning">Voltar</a>
    </div>
@endsection
