Para criar o banco , basta abrir o programada HEIDISQL

Clicar no botão nova, para criar nova conexão

![image](https://github.com/user-attachments/assets/81a28799-be4f-4156-9e93-0ed23c55b1f4)

E passar as informações de usuário e senha do SGBD, depois clicar em abrir

![image](https://github.com/user-attachments/assets/009d1b47-516d-4189-ac36-19ce67682ce0)

Para criar o banco , utilize o comando SQL abaixo:

<pre class="language-php">
  <code class="language-php">
  CREATE DATABASE sistema_os;
  </code>
</pre>

Após isso , só clicar no play azul para executar o comando

![image](https://github.com/user-attachments/assets/ee5817f7-6131-4a34-b579-b99469d5eaf6)

Em seguida basta clicar com botão direito em cima da conexão e depois em atulizar

![image](https://github.com/user-attachments/assets/76700619-55a4-4270-b232-7205ef50eb50)

A partir daí, teremos um banco de dados chamado sistema_os para poder usar no nosso projeto  usando LARAVEL.

para fazer conexão do banco de dados com o projeto , edite as seguinte informações do arquivo .env abaixo:

Crie o banco de dados no mysql com o nome blog

<pre class="language-php">
  <code class="language-php">
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=sistema_os
    DB_USERNAME=root
    DB_PASSWORD=
  </code>
</pre>


lembrando que as configurações acima estão relacionadas ao SGBD MYSQL




