Criar projeto laravel

<pre class="language-php">
  <code class="language-php">
  composer create-project laravel/laravel nome_projeto
  </code>
</pre>


Limpar cache  das rotas

<pre class="language-php">
  <code class="language-php">
    php artisan route:cache
  </code>
</pre>

Limpar cache das configurações

<pre class="language-php">
  <code class="language-php">
    php artisan config:cache
  </code>
</pre>

Iniciar servidor

<pre class="language-php">
  <code class="language-php">
  php artisan serve
  </code>
</pre>

Criar Controller

<pre class="language-php">
  <code class="language-php">
  php artisan make:controller MeuController --resource
  </code>
</pre>

Cria Model

<pre class="language-php">
  <code class="language-php">
  php artisan make:model MeuModel
  </code>
</pre>

Cria migration

<pre class="language-php">
  <code class="language-php">
  php artisan make:migration create_minhatabela_table table=minhatabela
  </code>
</pre>

Aplicar migrate no banco de dados

<pre class="language-php">
  <code class="language-php">
  php artisan migrate
  </code>
</pre>
