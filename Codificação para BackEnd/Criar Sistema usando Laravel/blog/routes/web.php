<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\CategoriaController;


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

Route::get('categorias/',[CategoriaController::class,'index'])->name('categoria.index');
Route::get('categorias/cadastrar',[CategoriaController::class,'create'])->name('categoria.cadastrar');
Route::post('categoria/salvar',[CategoriaController::class,'store'])->name('categoria.store');
Route::get('categoria/visualizar/{id}',[CategoriaController::class,'show'])->name('categoria.show');
Route::get('categoria/editar/{id}',[CategoriaController::class,'edit'])->name('categoria.edit');
Route::put('categoria/atualizar/{id}',[CategoriaController::class,'update'])->name('categoria.update');
Route::delete('categoria/excluir/{id}',[CategoriaController::class,'destroy'])->name('categoria.destroy');