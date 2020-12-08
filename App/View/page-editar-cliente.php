<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Editar Cliente</title>
</head>

<body>
    <div class="row align-up">
        <?php 
        include('widgets/menu-bar.php'); 
        session_start();
        ?>
            <div class="col-sm col-9">
                <div class="container-cabecalho">
                    <div class="row">
                        <div class="col-1">
                            <div class="container-btn-voltar">
                                <a href="page-ficha-cliente.php">
                                    <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                                </a>
                            </div>
                        </div>
                        <div class="col-10">Editar Cliente</div>
                        <div class="d-none col-1"></div>
                    </div>
                </div>
                <div class="centralize">
                    <form autocomplete="off" method="post" action="../Controller/pdo_editar.php">
                        <div class="header-campo">Nome</div>
                        <input type="text" class="form-campo" placeholder="Nome" name="nome" value="<?php echo $_SESSION['nomeCliente']?>">
                        <div class="row">
                            <div class="col-sm col-6 align-right">
                                <div class="header-campo" style="transform: translateX(5%);">E-mail</div>
                                <input type="email" class="form-campo" placeholder="E-mail" name="email" value="<?php echo $_SESSION['emailCliente']?>">

                                <div class="header-campo" style="transform: translateX(5%);">CPF</div>
                                <input type="text" class="form-campo" placeholder="CPF" name="cpf" value="<?php echo $_SESSION['cpfCliente']?>">

                                <div class="header-campo" style="transform: translateX(5%);">CNH</div>
                                <input type="text" class="form-campo" placeholder="CNH" name="cnh" value="<?php echo $_SESSION['cnhCliente']?>">

                                <div class="header-campo" style="transform: translateX(5%);">Data de Nascimento</div>
                                <input type="text" class="form-campo" placeholder="Data de Nascimento" name="dataNasc" value="<?php echo $_SESSION['dataCliente']?>">  
                            </div>
                            <div class="col-sm col-6 align-left">
                                
                                <div class="header-campo" style="transform: translateX(-6%);">Bairro</div>
                                <input type="text" class="form-campo" placeholder="Bairro" name="bairro" value="<?php echo $_SESSION['bairroCliente']?>">

                                <div class="header-campo" style="transform: translateX(-6%);">Logradouro</div>
                                <input type="text" class="form-campo" placeholder="Logradouro" name="logradouro" value="<?php echo $_SESSION['logradouroCliente']?>">

                                <div class="header-campo" style="transform: translateX(-6%);">Número</div>
                                <input type="text" class="form-campo" placeholder="Número" name="numero" value="<?php echo $_SESSION['numeroCliente']?>">

                                <div class="header-campo" style="transform: translateX(-6%);">Complemento</div>
                                <input type="text" class="form-campo" placeholder="Complemento" name="complemento" value=" <?php echo $_SESSION['complementoCliente'] ?>">
                            </div>
                        </div>
                        <input type="submit" name="editarCliente" class="btn-bg" value="Confirmar">
                    </form>
                </div>
            </div>
        ?>
    </div>
</body>

</html>