<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/',[PostController::class,'index'])->name('post.index');
Route::get('post/cadastrar',[PostController::class,'create'])->name('post.create');
Route::post('post/salvar',[PostController::class,'store'])->name('post.store');
Route::delete('post/excluir/{id}',[PostController::class,'destroy'])->name('post.destroy');
Route::get('post/editar/{id}',[PostController::class,'edit'])->name('post.edit');
Route::put('post/atualizar/{id}',[PostController::class,'update'])->name('post.update');
Route::get('post/visualizar/{id}',[PostController::class,'show'])->name('post.show');
Route::post('comentario/salvar',[ComentarioController::class,'store'])->name('comentario.salvar');
