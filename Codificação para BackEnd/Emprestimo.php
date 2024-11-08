<?php
// Empréstimo.php (Classe que representa um empréstimo)
class Emprestimo {
    public $id;
    private $data_retirada;
    private $data_devolucao;
    private $multa;
    private $membro_cpf;

    // Construtor da classe
    public function __construct($id, $data_retirada, $data_devolucao, $multa, $membro_cpf) {
        $this->id = $id;
        $this->data_retirada = $data_retirada;
        $this->data_devolucao = $data_devolucao;
        $this->multa = $multa;
        $this->membro_cpf = $membro_cpf;
    }

    // Métodos para acessar os dados do empréstimo
    public function getId() {
        return $this->id;
    }

    public function getDataRetirada() {
        return $this->data_retirada;
    }

    public function getDataDevolucao() {
        return $this->data_devolucao;
    }

    public function getMulta() {
        return $this->multa;
    }

    public function getMembroCpf() {
        return $this->membro_cpf;
    }

    // Método para exibir os dados do empréstimo
    public function exibirInformacoes() {
        echo "ID do Empréstimo: " . $this->id . "<br>";
        echo "Data de Retirada: " . $this->data_retirada . "<br>";
        echo "Data de Devolução: " . $this->data_devolucao . "<br>";
        echo "Multa (R$): " . $this->multa . "<br>";
        echo "CPF do Membro: " . $this->membro_cpf . "<br>";
    }
}
?>
