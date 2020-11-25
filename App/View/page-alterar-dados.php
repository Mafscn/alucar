<?
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
    <title>Alterar Dados</title>
</head>

<body>
    <div class="row align-up">
        <? include('widgets/menu-bar.php'); ?>
        <div class="col-sm col-9">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-conta.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Alterar Dados</div><input class="btn-bg" type="submit" name="editar" value="Editar" onclick="(function(){
                        document.getElementById('nome').disabled = false;
                        document.getElementById('email').disabled = false;
                        document.getElementById('nascimento').disabled = false;
                        document.getElementById('cpf').disabled = false;
                        console.log('deu certo');
                    })()">
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <form autocomplete="off">
                <input type="text" class="form-campo" value="<?php echo $_SESSION['nome']; ?>" id="nome" disabled>
                <input type="text" class="form-campo" placeholder="E-mail" value="<?php echo $_SESSION['email']; ?>" id="email" disabled>
                <input type="text" class="form-campo" placeholder="Data de nascimento" value="#emconstrução" id="nascimento" disabled style="color: red !important;">
                <input type="text" class="form-campo" placeholder="CPF" value="<?php echo $_SESSION['cpf']; ?>" id="cpf" disabled>
            </form>
            <a href="page-conta.php" class="btn-bg" role="button">Confirmar</a>
        </div>
    </div>
</body>

</html>