<?php
class Pessoa{
    private $nome;
    private $idade;
    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        if($idade > 0){
            $this->idade = strval($idade);
            return $this;
        }
        else{
            echo 'Idade menor que 0';
        }
    }

    public static function  montaCabecalho(){
        $idade = 10;
        $calculo = 10;
        return '<h1>Página de listagem de Pessoa</h1>';
    }
}