<?php
require_once("../Controller/pdo_login.php");
session_start();

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Conta</title>
</head>

<body>
    <div class="row align-up">
        <? include('widgets/menu-bar.php'); ?>
        <div class="col-sm col-9">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">Conta</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <table class="tabela-ficha">
                <tr>
                    <th>Nome</th>
                    <td><?php echo $_SESSION['nome']; ?></td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td><?php echo $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <th>Data de Nascimento</th>
                    <td>"data"</td>
                </tr>
                <tr>
                    <th>CPF</th>
                    <td><?php echo $_SESSION['cpf']; ?></td>
                </tr>
            </table>
            <a href="page-alterar-dados.php" class="btn-bg" role="button">Alterar Dados</a>
            <a href="page-alterar-senha.php" class="btn-bg" role="button">Alterar Senha</a>
            <form action="" method="POST">
                <input type="submit" action="" method="POST" class="btn-bg" role="button" name="loggout" value="Sair da conta">
            </form>
        </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['loggout'])) {
    session_destroy();
    header('Location: index.php');
    die();
}

?>