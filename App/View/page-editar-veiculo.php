<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Editar Veículo</title>
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
                    <div class="col-10">Editar Veículo</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <div class="centralize">
                <div class="row align-up">
                    <div class="col-sm col-6 align-right">
                        <form autocomplete="off">
                            <div class="header-campo" style="transform: translateX(5%);">Modelo</div>
                            <input type="text" class="form-campo" placeholder="Modelo">

                            <div class="header-campo" style="transform: translateX(5%);">Placa</div>
                            <input type="text" class="form-campo" placeholder="Placa">

                            <div class="header-campo" style="transform: translateX(5%);">Cor</div>
                            <input type="text" class="form-campo" placeholder="Cor">

                            <div class="header-campo" style="transform: translateX(5%);">Marca</div>
                            <input type="text" class="form-campo" placeholder="Marca">

                            <div class="header-campo" style="transform: translateX(5%);">Ano</div>
                            <input type="text" class="form-campo" placeholder="Ano">
                            <div class="header-campo" style="transform: translateX(5%);">Câmbio</div>
                            <input type="text" class="form-campo" placeholder="Câmbio">

                            <div class="header-campo" style="transform: translateX(5%);">Ocupantes</div>
                            <input type="text" class="form-campo" placeholder="Ocupantes">

                            <div class="header-campo" style="transform: translateX(5%);">Portas</div>
                            <input type="text" class="form-campo" placeholder="Portas">
                        </form>
                    </div>
                    <div class="col-sm col-6 align-left">
                        <form autocomplete="off">
                            <div class="header-campo" style="transform: translateX(-6%);">L. do Porta-Malas</div>
                            <input type="text" class="form-campo" placeholder="L. do Porta-Malas">

                            <div class="header-campo" style="transform: translateX(-6%);">Quilometragem</div>
                            <input type="text" class="form-campo" placeholder="Quilometragem">

                            <div class="header-campo" style="transform: translateX(-6%);">Autonomia</div>
                            <input type="text" class="form-campo" placeholder="Autonomia">

                            <div class="header-campo" style="transform: translateX(-6%);">Data de Inspeção</div>
                            <input type="text" class="form-campo" placeholder="Data de Inspeção">

                            <div class="header-campo" style="transform: translateX(-6%);">Banco</div>
                            <input type="text" class="form-campo" placeholder="Banco">

                            <div class="header-campo" style="transform: translateX(-6%);">Combustível</div>
                            <input type="text" class="form-campo" placeholder="Combustível">
                            <br><br>

                            <input type="checkbox">
                            <div class="side-header-campo">Ar-Condicionado</div>
                            <br><br>

                            <input type="checkbox">
                            <div class="side-header-campo">Trava Elétrica</div>
                            <br><br>

                            <input type="checkbox">
                            <div class="side-header-campo">Direção Hidráulica</div>
                            <br><br>

                            <input type="checkbox">
                            <div class="side-header-campo">Airbag</div>
                        </form>
                    </div>
                </div>
                <form autocomplete="off">
                    <a href="page-veiculos.php" class="btn-bg" role="button">Confirmar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>