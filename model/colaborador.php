<?php

class Colaboradores {
    private $nome;
    private $cargo;
    private $salario;

    public function setNome($nome){$this->nome = $nome;}
    public function setCargo($cargo){$this->cargo = $cargo;}
    public function setSalario($salario){$this->salario = $salario;}
    
    public function getNome(){return $this->nome;}
    public function getCargo(){return $this->cargo;}
    public function getSalario(){return $this->salario;}
}

?>