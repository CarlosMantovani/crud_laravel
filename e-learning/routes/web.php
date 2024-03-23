<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Curso;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->group(function () {
    Route::resource('cursos', CursoController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
