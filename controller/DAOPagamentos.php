<?php
    require_once 'conecta.php';
    require_once '../model/pagamento.php';

    class DAOPagamentos {
        public function InsertPagamento(Pagamento $c)
        {
            $sql = "INSERT INTO pagamentos VALUES(default,?,?)";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindValue(1,$c -> getForma());
            $stmt->bindValue(2,$c -> getPrazo());
            $stmt->execute();

            header('Location: ../view/principal.php');
        }
    }

?>