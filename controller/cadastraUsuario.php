<?php
    header('Content-Type: text/html; charset=utf-8');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require_once "conecta.php";

    if($email != "" and $senha != "")
    {
        $sql = "INSERT INTO usuario VALUES(default,'$email','$senha')";
        $command = FabricaConexao::Conexao()->prepare($sql);
        $command->execute();
        
        if($command->rowCount())
        {
            echo "<script language='javascript' type='text/javascript'> alert('Usuário cadastrado com sucesso!'); window.location.href='../view/index.php';</script>";
        }
        else
        {
            echo "<script language='javascript' type='text/javascript'> alert('Erro: Usuário não cadastrado com sucesso!'); window.location.href='../view/viewCadastro.php';</script>";
        }
    }
    else
    {
        echo "<script language='javascript' type='text/javascript'> alert('Campos vazios! Tente novamente!'); window.location.href='../view/viewCadastro.php';</script>";
    }
?>