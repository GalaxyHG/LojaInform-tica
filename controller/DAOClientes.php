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

    public function Update(Clientes $c)
    {
        $sql = 'UPDATE clientes SET nome=?, cpf=?, tel=?, email=?, endereco=? WHERE idCliente = ?';
        $stmt = FabricaConexao::Conexao()->prepare($sql);

        $stmt->bindValue(1,$c -> getNome());
        $stmt->bindValue(2,$c -> getCPF());
        $stmt->bindValue(3,$c -> getTelefone());
        $stmt->bindValue(4,$c -> getEmail());
        $stmt->bindValue(5,$c -> getEndereco());
        $stmt->bindValue(6,$c -> getIdCliente());
        $stmt->execute();
    }

    public function Find($id)
    {
        $sql = "SELECT * FROM clientes WHERE idCliente = :id";
        $stmt = FabricaConexao::Conexao()->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function Delete($id)
    {
        $sql = "DELETE FROM clientes WHERE idCliente = :id";
        $stmt = FabricaConexao::Conexao()->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        header('Location: ../view/ListaClientes.php');
    }
}

?>