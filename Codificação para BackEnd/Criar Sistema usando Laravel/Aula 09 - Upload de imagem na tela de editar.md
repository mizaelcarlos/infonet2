Vamos alterar o nosso método update do arquivo App/Http/PostController.php, colocando o conteúdo abaixo:

<pre class="language-php">
  <code class="language-php">

     public function update(Request $request, string $id)
    {
        $foto = $request->foto->store('fotos','public');

        $post = Post::find($id);
        $post->update([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'foto' => $foto
        ]);
        return redirect()->route('post.index');   
    }
 
  </code>
</pre>

Após isso , altere o formulario do arquivo resources/views/post/editar.blade.php com o conteúdo abaixo, lembrando que ele está usando herança de templates.



    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control form-control-lg" value="{{ $post->titulo }}">
        </div>
        
        <div class="mb-3">
            <label for="conteudo" class="form-label">Conteúdo</label>
            <textarea name="conteudo" id="conteudo" class="form-control form-control-lg" rows="5">{{ $post->conteudo }}</textarea>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Foto</label>
            <input type="file" name="foto">
            <img src="{{ asset('storage/'.$post->foto)}}" alt="">
        </div>
        <button id="btnCadastrar" type="submit" class="btn btn-primary">Salvar</button>
    </form>@endsection
