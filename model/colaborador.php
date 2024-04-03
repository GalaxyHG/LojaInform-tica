<?php

class Colaboradores {
    private $idColaborador;
    private $nome;
    private $cpf;
    private $telefone;
    private $email;
    private $numDependentes;

    public function setIdColaborador($idColaborador) {$this->idColaborador = $idColaborador; return $this;}
    public function setNome($nome){$this->nome = $nome;}
    public function setCPF($cpf){$this->cpf = $cpf;}
    public function setTelefone($telefone){$this->telefone = $telefone;}
    public function setEmail($email){$this->email = $email;}
    public function setNumDependentes($numDependentes){$this->numDependentes = $numDependentes;}
    
    public function getIdColaborador() {return $this->idColaborador;}
    public function getNome(){return $this->nome;}
    public function getCPF(){return $this->cpf;}
    public function getTelefone(){return $this->telefone;}
    public function getEmail(){return $this->email;}
    public function getNumDependentes(){return $this->numDependentes;}
}

?>