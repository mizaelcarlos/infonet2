
    
@extends('layouts.app')

@section('content')

    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="titulo" id="titulo">
        <label for="">Conteudo</label>
        <textarea name="conteudo" id="conteudo"></textarea>
        <button id = "btnCadastrar" type="submit">Salvar</button>
    </form>
    @endsection
