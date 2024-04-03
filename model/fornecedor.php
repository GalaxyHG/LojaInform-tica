<?php

class Fornecedores {
    private $idFornecedor;
    private $nome;
    private $cnpj;
    private $insc;
    private $contato;
    private $endereco;

    public function setIdFornecedor($idFornecedor) {$this->idFornecedor = $idFornecedor; return $this;}
    public function setNome($nome){$this->nome = $nome;}
    public function setCNPJ($cnpj){$this->cnpj = $cnpj;}
    public function setInsc($insc){$this->insc = $insc;}
    public function setContato($contato){$this->contato = $contato;}
    public function setEndereco($endereco){$this->endereco = $endereco;}

    public function getIdFornecedor() {return $this->idFornecedor;}
    public function getNome(){return $this->nome;}
    public function getCNPJ(){return $this->cnpj;}
    public function getInsc(){return $this->insc;}
    public function getContato(){return $this->contato;}
    public function getEndereco(){return $this->endereco;}
}

?>