Criar uma migration para criar uma tabela chamada categoria

<pre class="language-php">
  <code class="language-php">
    php artisan make:migration create_produto_table --create=produto
  </code>
</pre>

Será criado no diretório database/migrations com um nome semelhante a:

2024_07_25_134630_create_produto_table.php

Para inserir a coluna nome use a variáveil abaixo:

<pre class="language-php">
  <code class="language-php">
    public function up(): void
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->float('valor');
            $table->text('descricao')->nullable();
            $table->date('data_validade');
            $table->boolean('ativo')->nullable();
            $table->timestamps();
        });
    }
  </code>
</pre>

Criar uma migration para criar uma tabela chamada categoria

<pre class="language-php">
  <code class="language-php">
    php artisan make:migration create_categoria_table --create=categoria
  </code>
</pre>

Será criado no diretório database/migrations com um nome semelhante a:

2024_07_25_134630_create_categoria_table.php

Para inserir a coluna nome use a variáveil abaixo:

<pre class="language-php">
  <code class="language-php">
    public function up(): void
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });
    }
  </code>
</pre>

A documentação do laravel é muito extensa e podemos usar , então tudo que está relacionado a adicão novas colunas numa migration , pode ser acessar através da URL a seguir:

https://laravel.com/docs/11.x/migrations

para aplicar as alterações no banco de dados relacionado a migrate acima, rode o comando abaixo no terminal:

<pre class="language-php">
  <code class="language-php">
     php artisan migrate
  </code>
</pre>

Para alterar uma tabela no banco de dados, precisamos criar uma migration de alter table ,usando o comando abaixo

<pre class="language-php">
  <code class="language-php">
    php artisan make:migration alter_table_categoria
  </code>
</pre>

Utilize o código abaixo para inserir no método up, onde vamos inserir uma coluna chamada de descricao

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
				//
				Schema::table('categoria', function (Blueprint $table) {
					$table->string('descricao')->nullable();
				});
			}

			/**
			 * Reverse the migrations.
			 */
			public function down(): void
			{
				//
			}
		};

  </code>
</pre>

para aplicar as alterações no banco de dados relacionado a migrate acima, rode o comando abaixo no terminal:

<pre class="language-php">
  <code class="language-php">
     php artisan migrate
  </code>
</pre>

Para adiconar chave estrangeira na tabela produto crie uma nova migration e insira um código abaixo:

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
				Schema::table('produto', function (Blueprint $table) {
				   $table->unsignedBigInteger('categoria_id');
				   $table->foreign('categoria_id')
						->references('id')
						->on('categoria');
				});
			}

			/**
			 * Reverse the migrations.
			 */
			public function down(): void
			{
				//
			}
		};


  </code>
</pre>