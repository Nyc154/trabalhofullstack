<?php

use App\Http\Controllers\PessoaController;

Route::get('/formulario', [PessoaController::class, 'create'])->name('pessoa.create');
Route::post('/formulario', [PessoaController::class, 'store'])->name('pessoa.store');
Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoa.index');

Route::get('/', function () {
    return view('site/inicio');
})->name('inicio');

Route::redirect('/inicio', '/');
