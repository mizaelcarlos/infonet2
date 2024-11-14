Criar uma migration para criar uma tabela

<pre class="language-php">
  <code class="language-php">
    php artisan make:migration create_categoria_table --create=categoria
  </code>
</pre>

Será criado no diretório database/migrations com um nome semelhante a:

2024_07_25_134630_create_produtos_table.php

Para inserir as colunas nome, valor e descrição , use as variáveis abaixo:

<pre class="language-php">
  <code class="language-php">
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('valor');
            $table->longText('descricao');
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


<pre class="language-php">
  <code class="language-php">
    php artisan key:generate
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

Para adiconar chave estrangeira e uma tabela crie uma nova migration e insira um código abaixo:

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