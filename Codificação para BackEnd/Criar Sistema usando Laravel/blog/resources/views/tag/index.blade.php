
@extends('layouts.app')

@section('content')

<h1>Lista de tags</h1>
<table class="table">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Opções</th>
    </thead>
    <tbody>
    @foreach($tags as $tag)
        <tr>
            <td scope="row">{{ $tag->id }}</td>
            <td>{{ $tag->nome }}</td>
            <td>
                <div class="row">
                    <a href="{{ route('tag.show',$tag->id) }}"><img src="{{ asset('storage/icones/show.png') }}" alt=""></a>
                    <a href="{{ route('tag.edit',$tag->id) }}"><img src="{{ asset('storage/icones/edit.png') }}" alt=""></a>
                    <form action="{{route('tag.destroy', $tag->id)}}" method="post">
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
