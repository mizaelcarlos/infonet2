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


Agora todos os templates que usamos no nosso projeto vão herdar de app.blade.php

Exemplo, edite o template post/cadastrar.blade.php e coloque o seguinte conteudo

	```html
	    
	@extends('layouts.app')
	
	@section('content')
	
	    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
	        @csrf
	        <div class="mb-3">
	            <label for="titulo" class="form-label">Título</label>
	            <input type="text" name="titulo" id="titulo" class="form-control form-control-lg">
	        </div>
	        
	        <div class="mb-3">
	            <label for="conteudo" class="form-label">Conteúdo</label>
	            <textarea name="conteudo" id="conteudo" class="form-control form-control-lg" rows="5"></textarea>
	        </div>
	        
	        <div class="mb-3">
	            <label for="" class="form-label">Foto</label>
	            <input type="file" name="foto">
	        </div>
	        <button id="btnCadastrar" type="submit" class="btn btn-primary">Salvar</button>
	    </form>
	    @endsection

Faça a mesma coisa com os demais templates.

