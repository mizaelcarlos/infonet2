

@extends('layouts.app')

@section('content')

<form action="{{ route('tag.update',$tag->id) }}" method="post" id = "formCadastrarTag">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control form-control-lg" value=" {{ $tag->nome }}">
        </div>
        <button id="btnCadastrar" type="submit" class="btn btn-primary">Salvar</button>
    </form>
    @endsection
