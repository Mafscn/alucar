<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="row align-up">
        <div class="d-none col-3">
            <? include('widgets/menu-bar.php'); ?>
        </div>
        <div class="col-sm col-9">
            <div style="height: 24px;"></div>
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-aluguel.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <label>Cadastrar Veículo</label>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div style="height: 48px;"></div>
            <form autocomplete="off">
                <input type="text" class="form-campo" placeholder="Cliente">
                <div style="height: 16px;"></div>
                <input type="email" class="form-campo" placeholder="Veículo">
                <div style="height: 16px;"></div>
            </form>
            <div class="row">
                <div class="col-sm col-6 align-right">
                    <form autocomplete="off">
                        <input type="text" class="form-campo" placeholder="Data de Saída">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Horário de Saída">
                        <div style="height: 16px;"></div>
                    </form>
                </div>
                <div class="col-sm col-6 align-left">
                    <form autocomplete="off">
                        <input type="text" class="form-campo" placeholder="Data de Retorno">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Horário de Retorno">
                        <div style="height: 16px;"></div>
                    </form>
                </div>
            </div>
            <div style="height: 48px;"></div>
            <form>
                <a href="page-aluguel.php" class="btn-bg" role="button">Confirmar</a>
            </form>
        </div>
    </div>
</body>

</html>