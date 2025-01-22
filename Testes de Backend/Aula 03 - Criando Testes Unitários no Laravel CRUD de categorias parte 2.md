## As orientações abaixo deverão ser seguidas no projeto api-blog

### Vamos implementar o segundo teste ,para testar o método store do CategoriaController, abra o arquivo teste/features/CategoriaControllerTest.php
### Crie o método abaixo com o seguinte conteúdo
<pre class="language-php">
  <code class="language-php">
	public function test_criando_uma_categoria()
    {
         // Cria um usuário e gera o token
        $usuario = User::factory()->create();
        $token = $usuario->createToken('Test Token')->plainTextToken;

        // Dados para criação de categoria
        $dados = [
            'nome' => 'Categoria Teste',
            'descricao' => 'Descrição da categoria teste'
        ];

        // Realiza a requisição POST com o token Bearer
         $response = $this->postJson('/api/categoria/salvar', $dados, [
            'Authorization' => 'Bearer ' . $token,
        ]);

         // Verifica se a resposta tem status 201 (Created)
         $response->assertStatus(201);

         // Verifica se a categoria foi criada
         $this->assertDatabaseHas('categoria', [
             'nome' => 'Categoria Teste',
             'descricao' => 'Descrição da Categoria Teste',
         ]);
    }
  </code>
</pre>

### Vamos implementar o terceiro teste ,para testar o método update do CategoriaController,  abra o arquivo teste/features/CategoriaControllerTest.php
### Crie o método abaixo com o seguinte conteúdo
<pre class="language-php">
  <code class="language-php">
	public function test_atualizando_categoria()
    {
        // Cria um usuário e gera o token Bearer
        $user = User::factory()->create();
        $token = $user->createToken('Test Token')->plainTextToken;

        // Cria uma categoria existente
        $categoria = Categoria::factory()->create([
            'nome' => 'Categoria Antiga',
            'descricao' => 'Descrição Antiga'
        ]);

        // Dados para atualizar a categoria
        $dadosAtualizados = [
            'nome' => 'Categoria Atualizada',
            'descricao' => 'Descrição Atualizada'
        ];

        // Realiza a requisição PUT para atualizar a categoria com o Bearer token
        $response = $this->putJson('/api/categoria/atualizar/' . $categoria->id, $dadosAtualizados, [
            'Authorization' => 'Bearer ' . $token,
        ]);

        // Verifica se a resposta tem status 200 OK
        $response->assertStatus(200);

        // Verifica se a categoria foi realmente atualizada no banco de dados
        $this->assertDatabaseHas('categoria', [
            'id' => $categoria->id,
            'nome' => 'Categoria Atualizada',
            'descricao' => 'Descrição Atualizada',
        ]);

        // Verifica se a resposta contém os dados atualizados
        $response->assertJsonFragment([
            'nome' => 'Categoria Atualizada',
            'descricao' => 'Descrição Atualizada',
        ]);
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

![image](https://github.com/user-attachments/assets/fcffa058-e8c7-4fa8-891d-5b55c4279697)














