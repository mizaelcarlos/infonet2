
@extends('layouts.app')

@section('content') 

<h1>Lista de categorias</h1>
<table>
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Opções</th>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)
        <td>{{ $categoria->id }}</td>
        <td>{{ $categoria->nome }}</td>
        <td>{{ $categoria->descricao }}</td>
        <td><a href="{{ route('categoria.show',$categoria->id) }}"><img src="{{ asset('storage/icones/show.png') }}" alt=""></a></td>
    @endforeach
    </tbody>
</table>
@endsection