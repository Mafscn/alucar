<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastrar Veiculo</title>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php'); ?>
        <div class="col-sm col-9">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-veiculos.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Cadastrar Veículo</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <div class="centralize">
                <form autocomplete="off" action="../Controller/pdo_cadastro.php" method="POST" name="cadVeiculo">
                    <div class="row align-up">
                        <div class="col-sm col-6 align-right">
                            <input type="text" name="plaque" class="form-campo" placeholder="Placa">
                            <input type="text" name="price" class="form-campo" placeholder="Valor diário">
                        </div>
                        <div class="col-sm col-6 align-left">
                            <input type="text" name="brand" class="form-campo" placeholder="Marca">
                            <input type="text" name="model" class="form-campo" placeholder="Modelo">
                        </div>
                    </div>
                    <input type="submit" class="btn-bg" role="button" value="Confirmar" name="cadastrar_automovel">
                </form>
        </div>
    </div>
</body>
</html>