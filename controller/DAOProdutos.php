<?php

    require_once 'conecta.php';
    require_once '../model/produto.php';

    class DAOProdutos {
        public function InsertProduto(Produtos $c)
        {
            $sql = "INSERT INTO produtos VALUES(default,?,?,?)";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindValue(1,$c -> getNome());
            $stmt->bindValue(2,$c -> getPreco());
            $stmt->bindValue(3,$c -> getQuantidade());
            $stmt->execute();

            header('Location: ../view/principal.php');
        }
    }

?>