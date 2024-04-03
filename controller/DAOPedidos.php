<?php

    require_once 'conecta.php';
    require_once '../model/pedido.php';

    class DAOPedidos {
        public function InsertPedido(Pedido $c)
        {
            $sql = "INSERT INTO pedidos VALUES(default,?,?,?,?,?)";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindValue(1,$c -> getFornecedor());
            $stmt->bindValue(2,$c -> getProduto());
            $stmt->bindValue(3,$c -> getQuantEstoque());
            $stmt->bindValue(4,$c -> getDataPedido());
            $stmt->bindValue(5,$c -> getTotal());
            $stmt->execute();

            header('Location: ../view/principal.php');
        }
    }

?>