<?php
    require_once 'conecta.php';
    require_once '../model/colaborador.php';

    class DAOColaboradores {
        public function InsertColaborador(Colaboradores $c)
        {
            $sql = "INSERT INTO colaborador VALUES(default,?,?,?,?,?)";
            $stmt = FabricaConexao::Conexao()->prepare($sql);
            $stmt->bindValue(1,$c -> getNome());
            $stmt->bindValue(2,$c -> getCPF());
            $stmt->bindValue(3,$c -> getTelefone());
            $stmt->bindValue(4,$c -> getEmail());
            $stmt->bindValue(5,$c -> getNumDependentes());
            $stmt->execute();

            header('Location: ../view/principal.php');
        }
    }

?>