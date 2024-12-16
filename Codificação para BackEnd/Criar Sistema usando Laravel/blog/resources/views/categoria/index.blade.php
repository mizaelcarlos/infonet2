
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
        <td>
            <a href="{{ route('categoria.show',$categoria->id) }}"><img src="{{ asset('storage/icones/show.png') }}" alt=""></a>
            <a href="{{ route('categoria.edit',$categoria->id) }}"><img src="{{ asset('storage/icones/edit.png') }}" alt=""></a>
            <form action="{{route('categoria.destroy', $categoria->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit"><img src="{{ asset('storage/icones/delete.png') }}" alt=""></button>
            </form> 
        </td>
    @endforeach
    </tbody>
</table>
@endsection