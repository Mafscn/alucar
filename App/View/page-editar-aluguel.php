<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Editar Aluguel</title>
</head>

<body>
    <div class="row align-up">
        <? include('widgets/menu-bar.php'); ?>
        <div class="col-sm col-9">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-ficha-aluguel.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Editar Aluguel</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <div class="centralize">
                <form autocomplete="off">
                    <div class="header-campo">Cliente</div>
                    <input type="text" class="form-campo" placeholder="Cliente">

                    <div class="header-campo">Veículo</div>
                    <input type="email" class="form-campo" placeholder="Veículo">
                </form>
                <div class="row">
                    <div class="col-sm col-6 align-right">
                        <form autocomplete="off">
                            <div class="header-campo" style="transform: translateX(8%);">Data de Saída</div>
                            <input type="text" class="form-campo" placeholder="Data de Saída">

                            <div class="header-campo" style="transform: translateX(8%);">Horário de Saída</div>
                            <input type="text" class="form-campo" placeholder="Horário de Saída">
                        </form>
                    </div>
                    <div class="col-sm col-6 align-left">
                        <form autocomplete="off">
                            <div class="header-campo" style="transform: translateX(-8%);">Data de Retorno</div>
                            <input type="text" class="form-campo" placeholder="Data de Retorno">

                            <div class="header-campo" style="transform: translateX(-8%);">Cliente</div>
                            <input type="text" class="form-campo" placeholder="Horário de Retorno">
                        </form>
                    </div>
                </div>
                <form>
                    <a href="page-aluguel.php" class="btn-bg" role="button">Confirmar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>