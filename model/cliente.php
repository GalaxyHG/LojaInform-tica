<?php

class Cliente {
    private $nome;
    private $cpf;
    private $telefone;
    private $email;
    private $endereco;

    public function setNome($nome){$this->nome = $nome;}
    public function setCPF($cpf){$this->cpf = $cpf;}
    public function setTel($telefone){$this->telefone = $telefone;}
    public function setEmail($email){$this->email = $email;}
    public function setEndereco($endereco){$this->endereco = $endereco;}
    
    public function getNome(){return $this->nome;}
    public function getCPF(){return $this->cpf;}
    public function getTelefone(){return $this->telefone;}
    public function getEmail(){return $this->email;}
    public function getEndereco(){return $this->endereco;}
}

?>