<?php
// Empréstimo.php (Classe que representa um empréstimo)
class Emprestimo {
    private $id;
    private $data_retirada;
    private $data_devolucao;
    private $data_membro_devolucao;
    private $multa;
    private $membro_cpf;
    const VALOR_MULTA = 3.00;

    // Construtor da classe
    public function __construct($id, $data_retirada, $data_devolucao, $data_membro_devolucao ,$multa, $membro_cpf) {
        $this->id = $id;
        $this->data_retirada = $data_retirada;
        $this->data_devolucao = $data_devolucao;
        $this->data_membro_devolucao = $data_membro_devolucao;
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

    public function getDataMembroDevolucao(){
        return $this->data_membro_devolucao;
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

    public function calcularMulta(){
        
        $data_devolucao = new DateTime($this->data_devolucao);
        $data_membro_devolucao = new DateTime($this->data_membro_devolucao);
        $diferenca_entre_datas = $data_devolucao->diff($data_membro_devolucao);
        $dias_em_atraso = $diferenca_entre_datas->days;
        $this->multa = $dias_em_atraso * self::VALOR_MULTA;
        return $this->multa;
    }
}
?>
