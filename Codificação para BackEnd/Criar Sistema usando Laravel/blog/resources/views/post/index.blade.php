
    @extends('layouts.app')

    @section('content')
    <h1>Listar Postagen</h1>
    <table>
        <th>Titulo</th>
        <th>Conteudo</th>
        <th>Opções</th>

     
            @foreach($posts as $post)
            <tr>
                <td>{{$post->titulo}}</td>
                <td>{{$post->conteudo}}</td>
                <td>
                    <form action="{{route('post.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
                <td><button><a href="{{ route('post.edit', $post->id) }}">Editar</a></button></td>
                <td><button><a href="{{ route('post.show', $post->id) }}">Visualizar</a></button></td>
            </tr>
            @endforeach
       
    </table>
    @endsection
