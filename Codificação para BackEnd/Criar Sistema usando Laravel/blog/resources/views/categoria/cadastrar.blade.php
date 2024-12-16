
    
@extends('layouts.app')

@section('content')

<form action="{{ route('categoria.store') }}" method="post" id = "formCadastrarCategoria">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control form-control-lg">
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control form-control-lg">
        </div>
        <button id="btnCadastrar" type="submit" class="btn btn-primary">Salvar</button>
    </form>
    @endsection
