<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Cadastre-se</title>
</head>
<body>
    <main class="my-5 px-5 d-flex justify-content-around">
        <div class="card h-100">
            <div class="card-body">
                <ol class="card-text">
                    <li> Sessões são uma forma simples de armazenar dados para usuários
                        individuais usando um ID de sessão único.
                    <li> IDs de sessão normalmente são enviados ao navegador através de cookies
                        de sessão e o ID é usado para recuperar dados da sessão existente.
                    <li> A ausência de um ID ou cookie de sessão permite que o PHP saiba
                        que deve criar uma nova sessão e gerar um novo ID de sessão
                    <li> 
                        <strong>Iniciar uma sessão:</strong>
                        Antes de poder trabalhar com sessões em PHP, você precisa iniciar uma sessão.
                        Para isso, use a função session_start() no início do seu script PHP.
                        Definir variáveis de sessão:
                        Uma vez que a sessão tenha sido iniciada, você pode definir variáveis de sessão
                        que serão armazenadas no servidor para uso posterior.
                        Para definir uma variável de sessão, use a sintaxe $_SESSION['variavel'] = valor.
                    <li><strong>Acessar variáveis de sessão:</strong>
                        Para acessar uma variável de sessão que você definiu anteriormente,
                        use a sintaxe $_SESSION['variavel']. Você pode fazer isso em qualquer
                        script PHP que tenha acesso à sessão.
                        com todos os dados de sessão depois que a sessão iniciar.
                    <li><strong>Destruir a sessão:</strong>
                        Quando o usuário fizer logout ou a sessão precisar ser
                        encerrada por qualquer motivo, você pode destruir a sessão usando a
                        função session_destroy(). Isso removerá todas as variáveis de sessão
                        armazenadas no servidor.
                </ol>
            </div>
        </div>
        <div class="container h-100 d-flex justify-content-center align-items-center flex-column">
            <h2>Cadastre-se</h2>
            <form class="card" method="post" action="../controller/cadastraUsuario.php">
                <div class="card-body container d-flex justify-content-around flex-column align-items-center">
                    <div class="mb-3 p-2">
                        <label for="exampleInputEmail1" class="form-label">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 p-2">
                        <label for="exampleInputEmail1" class="form-label">Senha:</label>
                        <input type="text" name="senha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="container d-flex justify-content-around flex-row pb-2">
                    <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>