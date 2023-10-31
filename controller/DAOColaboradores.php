<?php
    require_once 'conecta.php';
    require_once '../model/colaborador.php';

    class DAOColaboradores {
        public function InsertColaborador(Colaboradores $c)
        {
            $sql = "INSERT INTO colaborador VALUES(default,?,?,?)";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindValue(1,$c -> getNome());
            $stmt->bindValue(2,$c -> getCargo());
            $stmt->bindValue(3,$c -> getSalario());
            $stmt->execute();

            header('Location: ../view/principal.php');
        }
    }

?>