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
    <title>Alterar Dados</title>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php'); ?>
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
                        document.getElementById('dataNasc').disabled = false;
                        document.getElementById('cpf').disabled = false;
                        console.log('deu certo');
                    })()">
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <form autocomplete="off" method="POST" action="../Controller/pdo_editar.php">
                <p style="font-size: large;">Nome de usuário</p>
                <input type="text" class="form-campo" value="<?php echo $_SESSION['nome']; ?>" id="nome" name="nome" disabled>
                <p style="font-size: large;">E-mail</p>
                <input type="email" class="form-campo" placeholder="E-mail" value="<?php echo $_SESSION['email']; ?>" id="email" name="email" disabled>
                <p style="font-size: large;">Data de nascimento</p>
                <input type="date" class="form-campo" placeholder="Data de nascimento" value="<?php echo $_SESSION['dataNasc']; ?>" id="dataNasc" name="dataNasc" disabled>
                <p style="font-size: large;">CPF</p>
                <input type="text" class="form-campo" placeholder="CPF" value="<?php echo $_SESSION['cpf']; ?>" id="cpf" name="cpf" disabled>
                <input type="submit" class="btn-bg" role="button" value="Confirmar" name="editar"></input>
            </form>
            
        </div>
    </div>
</body>

</html>