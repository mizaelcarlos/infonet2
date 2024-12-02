
    @extends('layouts.app')

    @section('content') 
            @foreach($posts as $post)
            
            

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('storage/'.$post->foto)}}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">{{$post->titulo}}</h5>
                    <p class="card-text">{{$post->conteudo}}</p>
                    <form action="{{route('post.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form> 
                    <button><a href="{{ route('post.edit', $post->id) }}">Editar</a></button>
                    <button><a href="{{ route('post.show', $post->id) }}">Visualizar</a></button>

                </div>
            </div>
            @endforeach
       
 
    @endsection
