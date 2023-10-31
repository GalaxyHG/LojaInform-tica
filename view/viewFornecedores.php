<?php

header('Content-Type: text/html; charset=utf-8');
session_start();

include_once "../model/fornecedor.php";
include_once "../model/extendsFornecedores.php";
include_once '../controller/DAOFornecedores.php';

$produtoDAO = new DAOFornecedores();
$fornec = new fornecedoresa();

if (isset($_POST['cadastrar'])) 
{
    $fornec->setNome($_POST['nome']);
    $fornec->setCNPJ($_POST['cnpj']);
    $fornec->setTipo($_POST['tipo']);
    $produtoDAO->InsertFornecedor($fornec);
    header("Location:../view/ListaFornecedores.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Cadastre um Fornecedor</title>
</head>

<body>
    <div class="container-fluid mb-5 h-50">
        <div class="row d-flex align-items-center justify-content-center h-50 ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a href="" class="navbar-brand">Loja</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item"><a class="nav-link" href="ViewClientes.php">Cadastro Clientes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item"><a class="nav-link" href="ListaClientes.php">Lista Clientes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item"><a class="nav-link" href="viewProdutos.php">Cadastro Produtos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item"><a class="nav-link" href="ListaProdutos.php">Lista Produtos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item"><a class="nav-link" href="viewColaboradores.php">Cadastro Colaboradores</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item"><a class="nav-link" href="ListaColaboradores.php">Lista Colaboradores</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item"><a class="nav-link" href="viewFornecedores.php">Cadastro Fornecedores</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item"><a class="nav-link" href="ListaFornecedores.php">Lista Fornecedores</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            <li class="nav-item"><a class="nav-link" href="../controller/logout.php">Sair</a></li>
                        </ul>
                        <form action="" class="d-flex">
                            <label>Usuário: &nbsp
                                <?php
                                if ($_SESSION['login_session'] == null) {
                                    header("Location: ../view/index.php");
                                } else {
                                    echo $_SESSION['login_session'];
                                }
                                ?>
                            </label>

                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <main>
        <div class="container h-50 d-flex justify-content-center">
            <form method="post" action="">
                <div class="container d-flex justify-content-around flex-column">
                    <div class="mb-3 p-2">
                        <label for="exampleInputEmail1" class="form-label">Nome do Fornecedor:</label>
                        <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 p-2">
                        <label for="exampleInputEmail1" class="form-label">CNPJ:</label>
                        <input type="text" name="cnpj" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="container d-flex justify-content-around flex-row">
                    <div class="mb-3 p-2">
                        <label for="exampleInputEmail1" class="form-label">Tipo de Fornecimento:</label>
                        <input type="text" name="tipo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>                    
                </div>
                <div class="mb-3 p-2">
                        <div class="container d-flex justify-content-around flex-row">
                            <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
            </form>
        </div>
    </main>
</body>
</html>