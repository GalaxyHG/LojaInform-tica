<?php
require 'conecta.php';
if (isset($_POST['login']) && ($_POST['senha']) ) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
      
        $sql = "SELECT * FROM clientes where nome= :nome AND cpf= :cpf";
        $stmt = FabricaConexao::Conexao()->prepare($sql);
        $stmt->bindValue("nome",$login);
        $stmt->bindValue("cpf",$senha);
        $stmt->execute();
        if ($stmt->rowCount()>0) {
             session_start();
             $_SESSION['login_session'] = $login;
             header("Location: ../view/Principal.php");
        }else {
            header("Location: ../view/login.php");
        }  
      
    } else {
        header("Location: ../view/login.php");
    }   

?>