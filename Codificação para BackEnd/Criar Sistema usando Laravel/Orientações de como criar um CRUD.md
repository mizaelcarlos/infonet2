Passo 1:

Começamos criando uma migration para criar a tabela que queremos que seja criada no banco de dados.

Vamos criar a migration para a tabela de cliente

<pre class="language-php">
  <code class="language-php">
    php artisan make:migration create_cliente_table --create=cliente
  </code>
</pre>

Será criado no diretório database/migrations com um nome semelhante a:

2024_07_25_134630_create_cliente_table.php

Edite o arquivo criado inserindo as colunas que vão compor a tabela

<pre class="language-php">
  <code class="language-php">
    public function up(): void
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nascimento');
			$table->string('foto');
            $table->timestamps();
        });
    }
  </code>
</pre>

Passo 2:

Próximo passo é criar o model para essa tabela cliente:

Para criar o model use o comando abaixo

<pre class="language-php">
  <code class="language-php">
    php artisan make:model Cliente
  </code>
</pre>

Será criado uma classe chamada Cliente.php no diretório app/Models

No model Cliente.php , inserir o código abaixo:

protected $fillable = ['nome', 'data_nascimento', 'foto''];

Ele se refere aos campos prenchiveis, que serão utilizados no cadastro de um cliente.

Passo 3: 

Agora vamos criar o nosso controller de cliente, para criar rode o comando abaixo no terminal:

<pre class="language-php">
  <code class="language-php">
    php artisan make:controller ClienteController --resource
  </code>
</pre>

Será criado uma classe chamada ClienteController.php no diretório App/Http/Controllers

Vamos editar o método index 


<pre class="language-php">
  <code class="language-php">
		namespace App\Http\Controllers;

		use Illuminate\Http\Request;
		use App\Models\Cliente;


		class ClienteController extends Controller
		{
			//
			public function index(){

				return view('cliente.index');
			}

		}


 
  </code>
</pre>

Passo 5:

para que o método index retorne a view 'cliente.index' , teremos que criar uma pasta chamada cliente dentro de resources/views ,
e dentro da pasta cliente vamos ciar um arquivo chamado de index.blade.php com o seguinte conteúdo:

		
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
		</head>
		<body>
			<h1>Listagem de clientes</h1>
		</body>
		</html>

Passo 6:

Para que esse  template fique acessível através de uma url a ser acessado no navegador, vamos criar uma rota nova no arquivo routes/web.php

<pre class="language-php">
  <code class="language-php">
	
	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\ClienteController;


	Route::get('/', function () {
		return view('welcome');
	});

	Route::get('/cliente/listar',[ClienteController::class,'index'])->name('cliente.index');
  </code>
</pre>

Passo 7:

No controller ClienteController.php no diretório App/Http/Controllers

Vamos editar o método create 


<pre class="language-php">
  <code class="language-php">
		namespace App\Http\Controllers;

		use Illuminate\Http\Request;
		use App\Models\Cliente;


		class ClienteController extends Controller
		{
			//
			public function index(){

				return view('cliente.index');
			}
			
			public function create(){

				return view('cliente.cadastrar');
			}

		}


 
  </code>
</pre>

Passo 8:

para que o método cadastrar reotorne a view 'cliente.cadastrar' , na pasta chamada cliente dentro de resources/views ,
vamos ciar um arquivo chamado de cadastrar.blade.php com o seguinte conteúdo:

		
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
		</head>
		<body>
			<form action="{{ route('cliente.store') }}" method="post">
				@csrf
				<label for="">Nome</label>    
				<input type="text" name="nome" id="nome">
				<label for=""<Data de Nascimento</label>
				<input type="date" name="data_nascimento" id="data_nascimento">
				<label for="">Foto</label>
				<input type="text" name="foto" id="foto">
				
				<button type="submit">Salvar</button>
			</form>
		</body>

Passo 9:

Para que esse  template fique acessível através de uma url a ser acessado no navegador, vamos criar uma rota nova no arquivo routes/web.php

<pre class="language-php">
  <code class="language-php">
	
	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\ClienteController;


	Route::get('/', function () {
		return view('welcome');
	});

	Route::get('/cliente/listar',[ClienteController::class,'index'])->name('cliente.index');
	Route::get('/cliente/cadastrar',[ClienteController::class,'cadastrar']);
  </code>
</pre>

Passo 10:

Sempre ao criar  uma nova rota , deverá se removido cache das rotas , use  o comando a seguir

<pre class="language-php">
  <code class="language-php">
    php artisan route:cache
  </code>
</pre>

Passo 11:

No controller ClienteController.php no diretório App/Http/Controllers

Vamos criar o método store, ele irá receber os dados vindo do formulário que está no template views/cliente/cadastrar.blade.php e persistir o objeto do banco de dados na tabela cliente

<pre class="language-php">
  <code class="language-php">
		namespace App\Http\Controllers;

		use Illuminate\Http\Request;
		use App\Models\Cliente;


		class ClienteController extends Controller
		{
			//
			public function index(){

				return view('cliente.index');
			}

			public function create(){

				return view('cliente.cadastrar');
			}

			public function store(Request $request){
				$cliente = Cliente::create($request->all());

				return redirect()->route('cliente.index');
			}

		}
 
  </code>
</pre>

Passo 12:

Para que a  action do formulário do template views/cliente/cadastrar.blade.php que aponta para essa rota route('cliente.store') funcione , precisamos inserir a  rota
no arquivo routes/web.php

<pre class="language-php">
  <code class="language-php">
	
	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\ClienteController;


	Route::get('/', function () {
		return view('welcome');
	});

	Route::get('/cliente/listar',[ClienteController::class,'index'])->name('cliente.index');
	Route::get('/cliente/cadastrar',[ClienteController::class,'cadastrar']);
	Route::post('/cliente/salvar',[ClienteController::class,'store'])->name('cliente.store');
  </code>
</pre>

Passo 13:
Sempre ao criar  uma nova rota , deverá se removido cache das rotas , use  o comando a seguir

<pre class="language-php">
  <code class="language-php">
    php artisan route:cache
  </code>
</pre>
