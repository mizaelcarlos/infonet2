
    
@extends('layouts.app')

@section('content')

    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control form-control-lg">
        </div>
        
        <div class="mb-3">
            <label for="conteudo" class="form-label">Conteúdo</label>
            <textarea name="conteudo" id="conteudo" class="form-control form-control-lg" rows="5"></textarea>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input type="file" name="foto">
        </div>
        <button id="btnCadastrar" type="submit" class="btn btn-primary">Salvar</button>
    </form>
    @endsection
