<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Registrar Ocorrência</title>
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
                    <div class="col-10">Registrar Ocorrência</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
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