<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>
    <div class="row">
        <div class="col-sm col-6">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-login.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Cadastro</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <form autocomplete="off" action="../Controller/pdo_cadastro.php" method="POST">
                <input type="text" class="form-campo" placeholder="Nome" name="nome" autocomplete="off">
                <br>
                <input type="email" class="form-campo" placeholder="Email" name="email" autocomplete="off">
                <br>
                <input type="date" class="form-campo" placeholder="Data de Nascimento" name="nascimento" autocomplete="off">
                <br>
                <input type="text" class="form-campo" placeholder="CPF" name="cpf" autocomplete="off">
                <br>
                <input type="password" class="form-campo" placeholder="Senha" name="password" autocomplete="off">
                <br>
                <input type="submit" class="btn-bg" role="button" name="cadastrar" value="Cadastrar">
            </form>
        </div>
        <div class="d-none col-6">
            <div class="container-car-img">
                <img src="images/placeholder-car1.png" alt="carro">
            </div>
        </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['cadastrar']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['nascimento']) && isset($_POST['cpf']) && isset($_POST['password'])) {
    require_once("../Model/Classes/user.php");
    require_once("../Model/connection.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nascimento = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $password = $_POST['password'];

    $u = new User();

    $u->Cadastrar($nome, $email, $nascimento, $cpf, $password);

    header('Location: page-login.php');
    die();
}

?>