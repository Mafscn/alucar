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
                <form autocomplete="off" action="?act=create" method="POST" name="cadVeiculo">
                    <div class="row align-up">
                        <div class="col-sm col-6 align-right">
                            <input type="text" name="model" class="form-campo" placeholder="Modelo">
                            <input type="text" name="plaque" class="form-campo" placeholder="Placa">
                            <input type="text" name="colour" class="form-campo" placeholder="Cor">
                            <input type="text" name="brand" class="form-campo" placeholder="Marca">
                            <input type="text" name="year" class="form-campo" placeholder="Ano">
                            <input type="text" name="exchange" class="form-campo" placeholder="Câmbio">
                            <input type="text" name="occupants" class="form-campo" placeholder="Ocupantes">
                            <input type="text" name="door" class="form-campo" placeholder="Portas">
                        </div>
                        <div class="col-sm col-6 align-left">
                            <input type="text" name="trunk" class="form-campo" placeholder="L. do Porta-Malas">
                            <input type="text" name="km" class="form-campo" placeholder="Quilometragem">
                            <input type="text" name="autonomy" class="form-campo" placeholder="Autonomia">
                            <input type="text" name="inspection" class="form-campo" placeholder="Data de Inspeção" onblur="(this.type='text')" onfocus="(this.type='date')">
                            <input type="text" name="bench" class="form-campo" placeholder="Banco">
                            <input type="text" name="gas" class="form-campo" placeholder="Combustível">
                            <div style="height: 16px;"></div>

                            <input type="checkbox"  name="air" class="form-checkbox">
                            <div class="side-header-campo">Ar-Condicionado</div>
                            <div style="height: 16px;"></div>

                            <input type="checkbox" name="eletric-lock" class="form-checkbox">
                            <div class="side-header-campo">Trava Elétrica</div>
                            <div style="height: 16px;"></div>

                            <input type="checkbox" name="hydraulic-steering" class="form-checkbox">
                            <div class="side-header-campo">Direção Hidráulica</div>
                            <div style="height: 16px;"></div>

                            <input type="checkbox" name="airbag" class="form-checkbox">
                            <div class="side-header-campo">Airbag</div>
                        </div>
                    </div>
                    <input type="submit" class="btn-bg" role="button" value="Confirmar">
                </form>
        </div>
    </div>
</body>
</html>