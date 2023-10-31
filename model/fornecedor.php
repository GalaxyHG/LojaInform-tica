<?php

class Fornecedores {
    private $nome;
    private $cnpj;
    private $tipo;

    public function setNome($nome){$this->nome = $nome;}
    public function setCNPJ($cnpj){$this->cnpj = $cnpj;}
    public function setTipo($tipo){$this->tipo = $tipo;}

    public function getNome(){return $this->nome;}
    public function getCNPJ(){return $this->cnpj;}
    public function getTipo(){return $this->tipo;}
}

?>