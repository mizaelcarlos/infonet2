## As orientações abaixo deverão ser seguidas no projeto api-blog

### Para criar um teste para o Model de Tag, rode o comando abaixo:

<pre class="language-php">
  <code class="language-php">
  php artisan make:test TagTest
  
  </code>
</pre>

### Vamos implementar um teste ,para testar o método create do do model Tag
### Crie o método abaixo com o seguinte conteúdo
<pre class="language-php">
  <code class="language-php">
	public function test_cadastro_tag(){

        $tag = Tag::create([
            'nome' => 'Noticias'
        ]);

        $this->assertDatabaseHas('tag',[
            'nome' => 'Noticias'
        ]);

        $this->assertEquals('Noticias',$tag->nome);
    }
  </code>
</pre>

### Vamos implementar um teste ,para testar o método update do model Tag
### Crie o método abaixo com o seguinte conteúdo
<pre class="language-php">
  <code class="language-php">
	public function test_atualizar_tag(){
        $tag = Tag::create([
            'nome' => 'Forun'
        ]);

        $tag->update([
            'nome' => 'Forum'
        ]);

        $this->assertDatabaseHas('tag',[
            'nome' => 'Forum'
        ]);

    }
  </code>
</pre>


### Vamos implementar um teste ,para testar o método delete do model Tag
### Crie o método abaixo com o seguinte conteúdo
<pre class="language-php">
  <code class="language-php">
	public function test_excluir_tag(){
        $tag = Tag::create([
            'nome' => 'Blog'
        ]);

        $this->assertDatabaseHas('tag',[
            'nome' => 'Blog'
        ]);

        $tag->delete();

        $this->assertDatabaseMissing('tag',[
            'nome' => 'Blog'
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















