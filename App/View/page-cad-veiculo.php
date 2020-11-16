<!doctype html>
<html lang="pt-BR" class="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="auto">
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
                            <a href="page-veiculos.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-11">
                        <label>Cadastrar Veículo</label>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div style="height: 48px;"></div>
            <div class="row">
                <div class="col-sm col-6 align-right">
                    <form autocomplete="off">
                        <input type="text" class="form-campo" placeholder="Modelo">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Placa">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Cor">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Marca">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Ano">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Câmbio">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Ocupantes">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Portas">
                    </form>
                </div>
                <div class="col-sm col-6 align-left">
                    <form autocomplete="off">
                        <input type="text" class="form-campo" placeholder="L. do Porta-Malas">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Quilometragem">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Autonomia">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Data de Inspeção">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Banco">
                        <div style="height: 16px;"></div>
                        <input type="text" class="form-campo" placeholder="Combustível">
                        <div style="height: 16px;"></div>
                        <label>Ar-Condicionado</label>
                        <input type="checkbox" class="form-checkbox">
                        <div style="height: 16px;"></div>
                        <label>Trava Elétrica</label>
                        <input type="checkbox" class="form-checkbox">
                        <div style="height: 16px;"></div>
                        <label>Direção Hidráulica</label>
                        <input type="checkbox" class="form-checkbox">
                        <div style="height: 16px;"></div>
                        <label>Airbag</label>
                        <input type="checkbox" class="form-checkbox">
                    </form>
                </div>
            </div>
            <div style="height: 48px;"></div>
            <form autocomplete="off">
                <a href="page-veiculos.php" class="btn-bg" role="button">Confirmar</a>
            </form>
            <div style="height: 48px;"></div>
        </div>
    </div>
</body>

</html>