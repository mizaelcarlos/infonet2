para criar um controller use o comando abaixo

<pre class="language-php">
  <code class="language-php">
    php artisan make:controller ProdutoController
  </code>
</pre>

Será criado uma classe chamada ProdutoController.php no diretório App/Http/Controllers

Vamos criar o método index 


<pre class="language-php">
  <code class="language-php">
		namespace App\Http\Controllers;

		use Illuminate\Http\Request;
		use App\Models\Produto;


		class ProdutoController extends Controller
		{
			//
			public function index(){

				return view('produto.index');
			}

		}


 
  </code>
</pre>

para que o método index reotorne a view 'produto.index' , teremos que criar uma pasta chamada produto dentro de resources/views ,
e dentro da pasta produto vamos ciar um arquivo chamado de index.blade.php com o seguinte conteúdo:

<pre class="language-php">
  <code class="language-php">
		```markdown
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
		</head>
		<body>
			<h1>Listagem de produtos</h1>
		</body>
		</html>
		```markdown
  </code>
</pre>

Para que esse  template fique acessível através de uma url a ser acessado no navegador, vamos criar uma rota nova no arquivo routes/web.php

<pre class="language-php">
  <code class="language-php">
	
	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\ProdutoController;


	Route::get('/', function () {
		return view('welcome');
	});

	Route::get('/produto/listar',[ProdutoController::class,'index'])->name('produto.index');
  </code>
</pre>
