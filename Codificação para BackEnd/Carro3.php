<?php

class Carro{
    public $marca;
    public $modelo;
    private $ano;

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
         $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
         $this->modelo = $modelo;
    }

    
    public function getAno(){
        return $this->ano;
    }

    public function setAno($ano_fornecido){
        if($ano_fornecido > 1885){
            $this->ano = $ano_fornecido;
        }
        else{
            return 'O ano informado é menor que 1885';
        }
    }
}