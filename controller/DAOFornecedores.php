<?php
    require_once 'conecta.php';
    require_once '../model/fornecedor.php';

    class DAOFornecedores {
        public function InsertFornecedor(Fornecedores $c)
        {
            $sql = "INSERT INTO fornecedor VALUES(default,?,?,?,?,?)";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindValue(1,$c -> getNome());
            $stmt->bindValue(2,$c -> getCNPJ());
            $stmt->bindValue(3,$c -> getInsc());
            $stmt->bindValue(4,$c -> getContato());
            $stmt->bindValue(3,$c -> getEndereco());
            $stmt->execute();

            header('Location: ../view/principal.php');
        }
    }

?>