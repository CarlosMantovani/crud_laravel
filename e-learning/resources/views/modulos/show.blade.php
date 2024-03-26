@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="text-align: center">Detalhes do Módulo</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome do Módulo</th>
                    <th scope="col">Curso</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $modulo->id }}</td>
                    <td>{{ $modulo->titulo }}</td>
                    <td>{{ $curso->nome_curso }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('modulos.index') }}" class="btn btn-warning">Voltar</a>
    </div>
@endsection
