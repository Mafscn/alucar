<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="row">
        <div class="col-sm col-6">
            <? require("widgets/alucar-logo.php"); ?>
<<<<<<< HEAD
            <div style="height: 2rem;"></div>
            <form autocomplete="off" method="POST" action="../Controller/pdo_login.php">
                <input type="email" class="form-campo" placeholder="Email" name="email">
                <div style="height: 1rem;"></div>
                <input type="password" class="form-campo" placeholder="Password" name="password">
                <div style="height: 2rem;"></div>
                <input type="submit" class="btn-bg" role="button" name="entrar" value="Entrar">
                <div style="height: 2rem;"></div>
=======
            <form autocomplete="off">
                <input type="email" class="form-campo" placeholder="Email">
                <input type="password" class="form-campo" placeholder="Password">
                <a href="page-aluguel.php" class="btn-bg" role="button">Entrar</a>
                <br>
>>>>>>> 2ff2516b9925305c2375647b67cd088897ea5539
                <a href="page-cadastro.php" class="btn-sm" role="button">Criar uma Conta</a>
                <br>
                <a href="page-recuperar.php" class="btn-sm" role="button">Recuperar Conta</a>
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