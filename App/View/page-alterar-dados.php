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
                    <div class="col-10">Alterar Dados</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <form autocomplete="off">
                <input type="text" class="form-campo" placeholder="Nome">
                <input type="text" class="form-campo" placeholder="E-mail">
                <input type="text" class="form-campo" placeholder="Data de nascimento">
                <input type="text" class="form-campo" placeholder="CPF">
            </form>
            <a href="page-conta.php" class="btn-bg" role="button">Confirmar</a>
        </div>
    </div>
</body>

</html>