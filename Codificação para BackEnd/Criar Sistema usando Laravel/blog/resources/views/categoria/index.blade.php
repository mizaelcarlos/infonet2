
@extends('layouts.app')

@section('content') 

<h1>Lista de categorias</h1>
<table class="table">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Opções</th>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td scope="row">{{ $categoria->id }}</td>
            <td>{{ $categoria->nome }}</td>
            <td>{{ $categoria->descricao }}</td>
            <td>
                <div class="row">
                    <a href="{{ route('categoria.show',$categoria->id) }}"><img src="{{ asset('storage/icones/show.png') }}" alt=""></a>
                    <a href="{{ route('categoria.edit',$categoria->id) }}"><img src="{{ asset('storage/icones/edit.png') }}" alt=""></a>
                    <form action="{{route('categoria.destroy', $categoria->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><img src="{{ asset('storage/icones/delete.png') }}" alt=""></button>
                    </form> 
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection