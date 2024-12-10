
    @extends('layouts.app')

    @section('content') 
            <div class="container">
                <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/'.$post->foto) }}" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->titulo}}</h5>
                            <p class="card-text">{{$post->conteudo}}</p>
                            @foreach($post->comentarios as $comentario)
                                <p>{{ $comentario->texto }}</p>
                            @endforeach
                           
                            <form action="{{route('post.destroy', $post->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form> 
                            <button type="button" class="btn btn-success"><a href="{{ route('post.edit', $post->id) }}">Editar</a></button>
                            <button type="button" class="btn btn-success"><a href="{{ route('post.show', $post->id) }}">Visualizar</a></button>
                            <button type="button" data-toggle="modal" data-target="#modalExemplo{{ $post->id }}">
                                <img src="{{ asset('storage/icones/comentario.png') }}" alt="">
                            </button>

                            <div class="modal fade" id="modalExemplo{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Comentário</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('comentario.salvar') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                    
                                            <textarea name="texto" id="texto" rows="5" cols="60"></textarea>
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                |</div>
                @endforeach
            </div>
        </div>
    @endsection
