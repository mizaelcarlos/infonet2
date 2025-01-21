## As orientações abaixo deverão ser seguidas no projeto api-blog

### Faça uma cópia do arquivo .env e o arquivo .env copy renomeie para .env.testing   

### Limpe o cache das configurações 
<pre class="language-php">
  <code class="language-php">
  php artisan config:clear
  php artisan config:cache
  php artisan cache:clear
  </code>
</pre>

### Gere novas para o arquivo .env.testing usando o comando abaixo:

<pre class="language-php">
  <code class="language-php">
	php artisan key:generate --env=testing
  </code>
</pre>


### crie um novo banco de dados no mysql usando o Heidsql com o nome blog_teste
### Altere as configurações de conexão com o banco de dados no arquivo .env.teste, conforme a baixo
<pre class="language-php">
  <code class="language-php">
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=blog_teste
	DB_USERNAME=root
	DB_PASSWORD=
	DB_CHARSET=utf8
	DB_COLLATION=utf8_unicode_ci
  </code>
</pre>


### Limpe o cache das configurações 
<pre class="language-php">
  <code class="language-php">
  php artisan config:clear
  php artisan cache:clear
  </code>
</pre>






