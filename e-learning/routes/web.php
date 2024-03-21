<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Curso;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('home');
});
Route::middleware('auth')->group(function () {

    Route::get('/cadastrar', [CursoController::class, 'create']);
    Route::post('/cadastrar', [CursoController::class, 'criarCurso'])->name('salvar-curso');
    Route::get('/listar-cursos', 'App\Http\Controllers\CursoController@listarCursos')->name('listar-cursos');
    Route::get('/mostrar-curso/{id_do_curso}','App\Http\Controllers\CursoController@mostrarDetalhes')->name('mostrar-curso');
    Route::get('/editar-curso/{id_do_curso}', [CursoController::class, 'editar'])->name('editar-curso');
    Route::put('/atualizar-curso/{id_do_curso}', [CursoController::class, 'atualizar'])->name('atualizar-curso');
    Route::get('/deletar-curso/{id_do_curso}',[CursoController::class,'deletar'])-> name('deletar-curso');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
