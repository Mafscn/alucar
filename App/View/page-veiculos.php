<!doctype html>
<html lang="pt-BR" class="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Veículos</title>
</head>

<body class="auto">
    <div class="row align-up">
        <div class="d-none col-3">
            <?php include('widgets/menu-bar.php'); ?>
        </div>
        <div class="col-9">
            <a href="page-cad-veiculo.php" class="btn-bg" role="button">Cadastrar Veículo</a>
            <div style="height: 2rem;"></div>
            <table class="table table-sm table-light table-hover">
                <? 
                    for($i = 0; $i < 15; $i++) {
                        echo '
                        <tr>
                            <th>"Carro"</th>
                            <td>Ano</td>
                            <td>Placa</td>
                            <td>
                                <a href="page-ficha-veiculo.php">
                                    <i class="material-icons" style="color: darkgoldenrod">edit</i>
                                </a>
                            </td>
                            <td>
                                <button class="btn-del">
                                    <i class="material-icons" style="color: darkred">delete</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        ';
                    };
                ?>
            </table>
            <div style="height: 3rem"></div>
        </div>
    </div>
</body>

</html>