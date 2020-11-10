<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Alucar</title>
</head>

<body style="padding-left: 0;">
    <div class="row">
        <div class="col-2">
            <?php include('menu-bar.php'); ?>
        </div>
        <div class="col-10">
            <div>
                <img style="height: 64px;" src="https://chapmanworld.com/wp-content/uploads/2015/02/pacman.png" alt="Imagem Perfil">
            </div>
            <div class="row">
                <div class="col-6">
                    <label>Nome</label><br>
                    <label>"nome"</label>
                    <br>
                    <label>E-mail</label><br>
                    <label>"email"</label>
                </div>
                <div class="col-6">
                    <label>Data de nascimento</label><br>
                    <label>"Data de nascimento"</label>
                    <br>
                    <label>CPF</label><br>
                    <label>"CPF"</label>
                </div>
            </div>
            <a href="page-alterar-dados.php" class="btn btn-grande" role="button">Alterar Dados</a>
            <a href="page-alterar-senha.php" class="btn btn-grande" role="button">Alterar Senha</a>
            <a href="#" class="btn btn-grande" role="button">Sair da Conta</a>
        </div>
    </div>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>