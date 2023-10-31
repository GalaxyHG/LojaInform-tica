<?php
header('Content-Type: text/html; charset=utf-8');
if(isset($_POST['login']) && ($_POST{'senha'})) 
{
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if($login == "aluno@gmail.com" && $senha == "123")
    {
        session_start();
        $_SESSION['login_session'] = $login;
        session_id();

        header("Location: ../view/principal.php");
    }
    else
    {
        header("Location: index.php");
    }
}
else
{
    echo "Valores Nulos";
}

?>