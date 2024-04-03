<?php

class Pedido {
    private $idPedido;
    private $fornecedor;
    private $produto;
    private $quantEstoque;
    private $dataPedido;
    private $total;

    public function setIDPedido($idPedido){$this->idPedido = $idPedido;}
    public function setFornecedor($fornecedor){ $this->fornecedor = $fornecedor;}
    public function setProduto($produto){ $this->produto = $produto;}
    public function setQuantEstoque($quantEstoque){ $this->quantEstoque = $quantEstoque; }   
    public function setDataPedido($dataPedido){ $this->dataPedido = $dataPedido;}
    public function setTotal($total){$this->total = $total;}
    
    public function getIdPedido(){return $this->idPedido;}
    public function getFornecedor(){return $this->fornecedor;}
    public function getProduto(){return $this->produto;}    
    public function getQuantEstoque(){return $this->quantEstoque;}
    public function getDataPedido(){return $this->dataPedido;}  
    public function getTotal(){return $this->total;}    
}

?>