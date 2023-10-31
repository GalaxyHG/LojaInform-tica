<?php
    class Produtos
    {
        private $nome;
        private $preco;
        private $quantidade;

        public function setNome($nome){$this->nome = $nome;}
        public function setPreco($preco){$this->preco = $preco;}
        public function setQuantidade($quantidade){$this->quantidade = $quantidade;}

        public function getNome(){return $this->nome;}
        public function getPreco(){return $this->preco;}
        public function getQuantidade(){return $this->quantidade;}
    }
?>