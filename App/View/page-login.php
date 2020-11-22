<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<<<<<<< HEAD

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./App/View/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./App/View/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">

=======
    <link rel="stylesheet" href="style.css">
>>>>>>> 1a6b44bc3d768a0f6b492bd4ba45ac27d4fdfefa
    <title>Login</title>
</head>

<body>
    <div class="row">
<<<<<<< HEAD
        <div class="col-sm-12 col-lg-6">
            <!-- Logo -->
            <div class="container-logo">
                <div class="row">
                    <div class="col-6">
                        <div class="container-img-logo">
                            <img class="img-fluid" src="./App/View/images/placeholder-logo.png"
                                style="border-radius: 50%; width: 110px;" alt="logo">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="container-alucar">
                            <h1>Alucar</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Campos -->
            <form class="signin-form">
                <div class="form-group">
                    <input type="email" class="form-control form-campo" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-campo" placeholder="Password">
                </div>
                <div class="form-group">
                    <a href="page-aluguel.php" class="btn btn-grande" role="button">Entrar</a>
                </div>
                <div class="form-group">
                    <a href="page-cadastro.php" class="btn btn-pequeno" role="button">Criar uma Conta</a>
                </div>
                <div class="form-group">
                    <a href="page-recuperar.php" class="btn btn-pequeno" role="button">Recuperar Conta</a>
                </div>
            </form>
        </div>

        <!-- imagem a esquerda -->
        <div class="col-lg-6">
            <div class="container-car-imgs">
                <img src="./App/View/images/placeholder-car1.png" alt="carro" style="width: 850px;">
=======
        <div class="col-sm col-6">
            <? require("widgets/alucar-logo.php"); ?>
            <form autocomplete="off" action="../Controller/pdo_login.php" method="POST">
                <input type="email" class="form-campo" placeholder="Email" name="email">
                <input type="password" class="form-campo" placeholder="Password" name="password">
                <input type="submit" class="btn-bg" role="button" name="entrar" value="Entrar">
                <br>
                <a href="page-cadastro.php" class="btn-sm" role="button">Criar uma Conta</a>
                <br>
                <a href="page-recuperar.php" class="btn-sm" role="button">Recuperar Conta</a>
            </form>
        </div>
        <div class="d-none col-6">
            <div class="container-car-img">
                <img src="images/placeholder-car1.png" alt="carro">
>>>>>>> 1a6b44bc3d768a0f6b492bd4ba45ac27d4fdfefa
            </div>
        </div>
    </div>
</body>

</html>