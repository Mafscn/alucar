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
        <? include('widgets/menu-bar.php'); ?>
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
                <div class="row align-up">
                    <div class="col-sm col-6 align-right">
                        <form autocomplete="off">
                            <input type="text" class="form-campo" placeholder="Modelo">
                            <input type="text" class="form-campo" placeholder="Placa">
                            <input type="text" class="form-campo" placeholder="Cor">
                            <input type="text" class="form-campo" placeholder="Marca">
                            <input type="text" class="form-campo" placeholder="Ano">
                            <input type="text" class="form-campo" placeholder="Câmbio">
                            <input type="text" class="form-campo" placeholder="Ocupantes">
                            <input type="text" class="form-campo" placeholder="Portas">
                        </form>
                    </div>
                    <div class="col-sm col-6 align-left">
                        <form autocomplete="off">
                            <input type="text" class="form-campo" placeholder="L. do Porta-Malas">
                            <input type="text" class="form-campo" placeholder="Quilometragem">
                            <input type="text" class="form-campo" placeholder="Autonomia">
                            <input type="text" class="form-campo" placeholder="Data de Inspeção">
                            <input type="text" class="form-campo" placeholder="Banco">
                            <input type="text" class="form-campo" placeholder="Combustível">
                            <div style="height: 16px;"></div>

                            <input type="checkbox" class="form-checkbox">
                            <div class="side-header-campo">Ar-Condicionado</div>
                            <div style="height: 16px;"></div>

                            <input type="checkbox" class="form-checkbox">
                            <div class="side-header-campo">Trava Elétrica</div>
                            <div style="height: 16px;"></div>

                            <input type="checkbox" class="form-checkbox">
                            <div class="side-header-campo">Direção Hidráulica</div>
                            <div style="height: 16px;"></div>

                            <input type="checkbox" class="form-checkbox">
                            <div class="side-header-campo">Airbag</div>
                        </form>
                    </div>
                </div>
                <form>
                    <a href="page-veiculos.php" class="btn-bg" role="button">Confirmar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>