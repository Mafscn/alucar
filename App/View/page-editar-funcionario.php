<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Editar Funcionário</title>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php');
        session_start();
        ?>
        <div class="col-sm col-9">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-ficha-funcionario.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Editar Funcionário</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <form action="../Controller/pdo_editar.php" method="POST">
                <div class="centralize">

                    <div class="header-campo">Nome</div>
                    <input type="text" class="form-campo" value="<?php echo $_SESSION['nomeFuncionario']; ?>" name="nomeF">

                    <div class="header-campo">E-mail</div>
                    <input type="email" class="form-campo" value="<?php echo $_SESSION['emailFuncionario']; ?>" name="emailF">

                    <div class="row">
                        <div class="col-sm col-6 align-right">

                            <div class="header-campo" style="transform: translateX(5%);">CPF</div>
                            <input type="text" class="form-campo" value="<?php echo $_SESSION['cpfFuncionario']; ?>" name="cpfF">

                            <div class="header-campo" style="transform: translateX(5%);">Data de Nascimento</div>
                            <input type="date" class="form-campo" value="<?php echo $_SESSION['dataFuncionario']; ?>" name="dataNascF">

                            <div class="header-campo" style="transform: translateX(5%);">Bairro</div>
                            <input type="text" class="form-campo" value="<?php echo $_SESSION['bairroFuncionario']; ?>" name="bairroF">

                        </div>
                        <div class="col-sm col-6 align-left">

                            <div class="header-campo" style="transform: translateX(-6%);">Logradouro</div>
                            <input type="text" class="form-campo" value="<?php echo $_SESSION['logradouroFuncionario']; ?>" name="logradouroF">

                            <div class="header-campo" style="transform: translateX(-6%);">Número</div>
                            <input type="text" class="form-campo" value="<?php echo $_SESSION['numeroFuncionario']; ?>" name="numeroF">

                            <div class="header-campo" style="transform: translateX(-6%);">Complemento</div>
                            <input type="text" class="form-campo" value="<?php echo $_SESSION['complementoFuncionario']; ?>" name="complementoF">

                        </div>
                    </div>

                    <input type="submit" class="btn-bg" role="button" value="Confirmar" name="editarFuncionario">

                </div>
            </form>
        </div>
    </div>
</body>

</html>