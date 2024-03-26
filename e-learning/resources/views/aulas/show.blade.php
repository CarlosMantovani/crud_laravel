@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="text-align: center">Detalhes da Aula</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título da Aula</th>
                    <th scope="col">Link</th>
                    <th scope="col">Módulo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $aula->id }}</td>
                    <td>{{ $aula->descricao }}</td>
                    <td><a href="{{ $aula->link }}" target="_blank">{{ $aula->link }}</a></td>
                    <td>{{ $modulo->titulo }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('aula.index') }}" class="btn btn-warning">Voltar</button></a>
    </div>
@endsection
