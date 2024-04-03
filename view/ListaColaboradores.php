<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
if ($_SESSION['login_session'] == null || $_SESSION['login_session'] == false) {
    header("Location: ../view/login.php");
}
?>

<?php
include_once '../controller/DAOColaboradores.php';
include_once '../controller/conecta.php';
$sql = 'SELECT idColaborador, nome, cpf, telefone, email, numDependentes FROM colaborador';
$stmt = FabricaConexao::Conexao()->prepare($sql);
$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_CLASS);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Lista Colaboradores</title>
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
    <div class="container py-9">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Número de Dependentes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($linhas as $linha) {
                    echo "<tr>";
                    echo "<td>" . $linha->idColaborador . "</td>";
                    echo "<td>" . $linha->nome . "</td>";
                    echo "<td>" . $linha->cpf . "</td>";
                    echo "<td>" . $linha->telefone . "</td>";
                    echo "<td>" . $linha->email . "</td>";
                    echo "<td>" . $linha->numDependentes . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>