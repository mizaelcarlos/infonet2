## As orientações abaixo deverão ser seguidas no projeto api-blog

### Vamos criar testes para testar o CRUD implementado no CategoriaController   
### Rode o comando abaixo:
<pre class="language-php">
  <code class="language-php">
	php artisan make:test CategoryControllerTest
  </code>
</pre>

### Será criado o seguinte arquivo na pasta teste/features/CategoriaControllerTest.php

### Vamos implementar o primeiro teste ,para testar o método index do CategoriaController

<pre class="language-php">
  <code class="language-php">
	namespace Tests\Feature;

	use Illuminate\Foundation\Testing\RefreshDatabase;
	use Illuminate\Foundation\Testing\WithFaker;
	use Tests\TestCase;
	use App\Models\User;
	use App\Models\Categoria;

	class CategoriaControllerTest extends TestCase
	{
		use RefreshDatabase;

		public function test_index()
		{
			// Cria um usuário e gera o token
			$usuario = User::factory()->create();
			$token = $usuario->createToken('Test Token')->plainTextToken;

			// Realiza a requisição GET para o index com o Bearer token
			$response = $this->getJson('/api/categorias', [
				'Authorization' => 'Bearer ' . $token,
			]);

			// Verifica se a resposta tem status 200
			$response->assertStatus(200);

		}
	}
  </code>
</pre>


### Rode o comando abaixo para rodar os testes

<pre class="language-php">
  <code class="language-php">
  php artisan test
  
  </code>
</pre>

### Deverá ser mostrado algo semelhante a tela abaixo















