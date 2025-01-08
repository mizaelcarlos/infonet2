

@extends('layouts.app')

@section('content')

    <form action="{{ route('post.store') }}" method="post" id = "formCadastrarPost" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control form-control-lg">
        </div>

        <div class="mb-3">
            <select name="categoria_id" id="categoria_id" >
                @foreach($categorias as $categoria)
                <option value="{{ $categoria->id}}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="">Tag</label>
            @foreach ($tags as $tag)
                <input type="checkbox" name="tags[]" id="" value="{{ $tag->id }}">
                <label for="">{{ $tag->nome }}</label>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="conteudo" class="form-label">Conteúdo</label>
            <textarea name="conteudo" id="conteudo" class="form-control form-control-lg" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto">
        </div>
        <button id="btnCadastrar" type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <script>
        var titulo = document.getElementById('titulo').value;
        var foto = document.getElementById('foto')
        var formCadastrarPost = document.getElementById('formCadastrarPost')

        formCadastrarPost.addEventListener("submit", function(event) {

            if(!foto.files || !foto.files[0]){
                alert('Foto obrigatória!')
                event.preventDefault();
            }
        });


    </script>
    @endsection
