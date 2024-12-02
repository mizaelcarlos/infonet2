Para trabalhar com herança de templates no laravel, faça os passos a seguir:

Crie uma pasta chamada layouts dentro de resources/views.
Após isso crie um arquivo chamado app.blade.php dentro da pasta layouts, com o seguinte conteúdo:


	```html

	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
	    <title>Document</title>
	</head>
	<body>
	    <h1 class="text-center">Bem vindo ao meu blog</h1>
	    <div class="container">
		@yield('content')
	    </div>
	    <footer>
		<p class="text-center">{{ date('Y') }} - Meu Blog</p>
	    </footer>
	</body>
	</html>


