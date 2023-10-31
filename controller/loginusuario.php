<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require_once "conecta.php";

    if($email != "" and $senha != "")
    {
        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
        $command = FabricaConexao::Conexao()->prepare($sql);
        $command->execute();

        if($command->rowCount())
        {
            $_SESSION['login_session'] = $email;
            header("Location: ../view/principal.php");
        }
        else
        {
            echo "<script language='javascript' type='text/javascript'> alert('Os dados não conferem!'); window.location.href='../view/index.php';</script>";
        }

    }
?>