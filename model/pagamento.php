<?php
    class Pagamento {
        private $idPagamento;
        private $forma;
        private $prazo;

        public function setIdPagamento($idPagamento) {$this->idPagamento = $idPagamento; return $this;}
        public function setForma($forma) { $this->forma = $forma; return $this;}
        public function setPrazo($prazo) { $this->prazo = $prazo; return $this;}

        public function getIdPagamento() {return $this->idPagamento;}
        public function getForma() {return $this->forma;}
        public function getPrazo() {return $this->prazo;}
    }
?>