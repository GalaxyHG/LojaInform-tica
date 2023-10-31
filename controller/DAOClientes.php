<?php

require_once 'conecta.php';
require_once '../model/cliente.php';

class DAOClientes {
    public function InsertCliente(Cliente $c)
    {
        $sql = "INSERT INTO clientes VALUES(default,?,?,?,?,?)";
        $stmt = FabricaConexao::Conexao()->prepare($sql);

        $stmt->bindValue(1,$c -> getNome());
        $stmt->bindValue(2,$c -> getCPF());
        $stmt->bindValue(3,$c -> getTelefone());
        $stmt->bindValue(4,$c -> getEmail());
        $stmt->bindValue(5,$c -> getEndereco());
        $stmt->execute();

        header('Location: ../view/principal.php');
    }
}

?>