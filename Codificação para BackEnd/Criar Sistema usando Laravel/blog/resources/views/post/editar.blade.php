
@extends('layouts.app')

@section('content') 
    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control form-control-lg" value="{{ $post->titulo }}">
        </div>
        
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <select name="categoria_id" id="categoria_id" >
                @foreach($categorias as $categoria)
                <option value="{{ $categoria->id}}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="conteudo" class="form-label">Conteúdo</label>
            <textarea name="conteudo" id="conteudo" class="form-control form-control-lg" rows="5">{{ $post->conteudo }}</textarea>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input type="file" name="foto">
            <img src="{{ asset('storage/'.$post->foto)}}" alt="" style="width: 100px; heigth: 100px;">
        </div>
        <button id="btnCadastrar" type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
