@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="text-align: center">Cadastrar Módulo</h1>
        <form class="row g-3" action="{{ route('modulos.store') }}" method="POST">
            @csrf
            <div class="col">
                <label for="inputAddress" class="form-label">Título do Módulo</label>
                <input type="text"
