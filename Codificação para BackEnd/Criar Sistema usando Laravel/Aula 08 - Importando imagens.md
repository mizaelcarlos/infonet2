Para inserir imagens , vamos precisar adicionar uma nova coluna chamada foto na tabela de posts, onde vamos salvar nele o caminhi da imagem.

Para isso vamos criar uma nova migration, rodando esse comando no terminal:

php artisan make:migration adicionar_foto_posts_table --table=posts

Será criado um novo arquivo na pasta databases/migrations/ , edite o novo arquivo criado inserindo o código abaixo:


<pre class="language-php">
  <code class="language-php">

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::table('posts', function (Blueprint $table) {
                $table->string('foto')->nullable();
            });
        }
    
        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::table('posts', function (Blueprint $table) {
                //
            });
        }
    };
 
  </code>
</pre>

Após isso , rode o comando para aplicar a migration nova banco:


<pre class="language-php">
  <code class="language-php">
		php artisan migrate
  </code>
</pre>

Após isso , rode o seguinte comando abaixo, para criar um link simbólico para a pasta storage do projeto:

<pre class="language-php">
  <code class="language-php">
		php artisan storage:link
  </code>
</pre>

Após isso , vamos editar o nosso arquivo resources/views/post/cadastrar.blade.php inserind o input abaixo:

 <input type="file" name="foto">

Após isso , vamos alterar o nosso método store do arquivo App/PostController.php, colocando o conteúdo abaixo:

<pre class="language-php">
  <code class="language-php">

     public function store(Request $request)
     {
        $foto = $request->foto->store('fotos','public');
        // //Post::create($request->all());
        Post::create([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'foto' => $foto
        ]);
        return redirect()->route('post.index');
     }
 
  </code>
</pre>

Para exibir a foto no template basta chamar o objeto seguido do atributo foto dentro do comando asset, conforme abaixo:

    src="{{ asset('storage/'.$post->foto)}}"  

