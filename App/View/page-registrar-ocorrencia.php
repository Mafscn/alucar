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
                            <a href="page-ficha-aluguel.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-11">
                        <label>Registrar Ocorrência</label>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div style="height: 48px;"></div>
            <table class="tabela-ficha">
                <tr>
                    <th>Cliente</th>
                    <td>"cliente"</td>
                </tr>
                <tr>
                    <th>Veículo e Placa</th>
                    <td>"veiculo", "placa"</td>
                </tr>
            </table>
            <div style="height: 48px;"></div>
            <form class="signin-form">
                <input type="text" class="form-campo" placeholder="Tipo de Ocorrência">
                <div style="height: 48px;"></div>
                <input type="text" class="form-campo" placeholder="Detalhes da Ocorrência...">
                <div style="height: 48px;"></div>
                <a href="#" class="btn-bg" role="button">Confirmar</a>
            </form>
        </div>
    </div>
</body>

</html>