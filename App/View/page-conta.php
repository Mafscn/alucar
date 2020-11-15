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
        <div class="d-none col-3">
            <?php include('widgets/menu-bar.php'); ?>
        </div>
        <div class="col-9">
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
            <a href="page-alterar-dados.php" class="btn-bg" role="button">Alterar Dados</a>
            <a href="page-alterar-senha.php" class="btn-bg" role="button">Alterar Senha</a>
            <a href="page-login.php" class="btn-bg" role="button">Sair da Conta</a>
        </div>
    </div>
</body>

</html>