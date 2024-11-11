1 - Crie uma classe chamada Produto com os seguintes atributos:

nome (público)
preco (privado)

Implemente métodos públicos para definir e obter o valor do atributo preco.

2 - Crie uma classe chamada Carro com os seguintes atributos:
marca (público)
modelo (público)
ano (privado)
Adicione um método público setAno($ano) que valide o valor de $ano (o valor deve ser maior que 1885) e um método getAno() para retornar o ano.

3 - Crie uma classe chamada ContaBancaria com os seguintes atributos:
titular (público)
saldo (privado, valor inicial de 0)
Adicione métodos:

depositar($valor) que adiciona o valor ao saldo.
sacar($valor) que subtrai o valor do saldo, se o saldo for suficiente.
getSaldo() para exibir o saldo atual.

4 - Implemente uma classe Pessoa com os seguintes atributos:

nome (público)
idade (privado)
Adicione métodos:

setIdade($idade) para definir a idade, verificando se o valor é maior que zero.
getIdade() para obter a idade.
Crie uma instância dessa classe, defina a idade e exiba o nome e a idade da pessoa.

5 - Crie uma classe Livro com:

Atributos titulo (público), autor (público) e preco (privado).
Métodos setPreco($preco) para definir o preço e getPreco() para retornar o valor.
Em seguida, crie uma instância, defina os valores e exiba as informações do livro.

6 - Implemente uma classe Funcionario com:

Atributos nome (público), salario (privado).
Métodos setSalario($salario) para definir o salário, getSalario() para retornar o salário e calculaBonus() que retorna o valor de 10% do salário.
Crie uma instância, defina valores e exiba o bônus calculado.

7 - Crie uma classe Aluno com:

Atributos nome (público), nota (privado).
Métodos setNota($nota) para definir a nota e getNota() para obter a nota.
Verifique se a nota é maior que 0 e menor ou igual a 10. Crie uma instância, defina valores válidos e exiba a nota.

8 - Implemente uma classe Cachorro com os seguintes atributos:

nome (público)
idade (privado)
Adicione métodos setIdade($idade) para definir a idade e latir() que exibe uma mensagem "Woof Woof Woof!".
