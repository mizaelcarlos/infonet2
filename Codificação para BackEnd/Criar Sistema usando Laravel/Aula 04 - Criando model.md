Criar primeiro model e migrate

<pre class="language-php">
  <code class="language-php">
    php artisan make:model Produto
  </code>
</pre>

Será criado uma classe chamada Produto.php no diretório app/Models

No model Produto.php , inserir o código abaixo:

protected $fillable = ['nome', 'valor', 'descricao', 'data_validade'];

Ele se refere aos campos prenchiveis, que serão utilizados no cadastro de um produto.


<pre class="language-php">
  <code class="language-php">
    namespace App\Models;
  
  use Illuminate\Database\Eloquent\Factories\HasFactory;
  use Illuminate\Database\Eloquent\Model;
  
  class Produto extends Model
  {
      protected $table = 'produto';

		protected $fillable = ['nome', 'valor', 'descricao', 'data_validade'];
  }

 
  </code>
</pre>

