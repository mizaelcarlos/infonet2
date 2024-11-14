

No controller ProdutoController.php no diretório App/Http/Controllers

Vamos criar o método cadastrar 


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
			
			public function cadastrar(){

				return view('produto.cadastrar');
			}

		}


 
  </code>
</pre>

para que o método cadastrar reotorne a view 'produto.cadastrar' , teremos que criar uma pasta chamada produto dentro de resources/views ,
e dentro da pasta produto vamos ciar um arquivo chamado de cadastrar.blade.php com o seguinte conteúdo:

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
			<form action="{{ route('produto.store') }}" method="post">
				@csrf
				<label for="">Nome</label>    
				<input type="text" name="nome" id="nome">
				<label for="">Valor</label>
				<input type="text" name="valor" id="valor">
				<label for="">Descricao</label>
				<input type="text" name="descricao" id="descricao">
				<label for="">Data Validade</label>
				<input type="date" name="data_validade" id="data_validade">
				
				<button type="submit">Salvar</button>
			</form>
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
	Route::get('/produto/cadastrar',[ProdutoController::class,'cadastrar']);
  </code>
</pre>

Sempre ao criar  uma nova rota , deverá se removido cache das rotas , use  o comando a seguir

<pre class="language-php">
  <code class="language-php">
    php artisan route:cache
  </code>
</pre>

No controller ProdutoController.php no diretório App/Http/Controllers

Vamos criar o método store, ele irá receber os dados vindo do formulário e persistir o objeto do banco de dados na tabela Produto

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

			public function contato(){

				return view('produto.contato');
			}

			public function cadastrar(){

				return view('produto.cadastrar');
			}

			public function store(Request $request){
				$produto = Produto::create($request->all());

				return redirect()->route('produto.index');
			}

		}
 
  </code>
</pre>

Para que a  action do formulário do templa cadastrar.blade.php que aponta para essa rota route('produto.store') funcione , precisamos inserir a  rota
no arquivo routes/web.php

<pre class="language-php">
  <code class="language-php">
	
	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\ProdutoController;


	Route::get('/', function () {
		return view('welcome');
	});

	Route::get('/produto/listar',[ProdutoController::class,'index'])->name('produto.index');
	Route::get('/produto/cadastrar',[ProdutoController::class,'cadastrar']);
	Route::post('/produto/salvar',[ProdutoController::class,'store'])->name('produto.store');
  </code>
</pre>

Sempre ao criar  uma nova rota , deverá se removido cache das rotas , use  o comando a seguir

<pre class="language-php">
  <code class="language-php">
    php artisan route:cache
  </code>
</pre>