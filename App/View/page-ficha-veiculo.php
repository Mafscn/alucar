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
                            <a href="page-veiculos.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <label>Ficha Veículo</label>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div style="height: 48px;"></div>
            <div class="row">
                <div class="col-6">
                    <table class="tabela-ficha">
                        <tr>
                            <th>Cor</th>
                            <td>cor</td>
                        </tr>
                        <tr>
                            <th>Câmbio</th>
                            <td>cambio</td>
                        </tr>
                        <tr>
                            <th>Banco</th>
                            <td>banco</td>
                        </tr>
                        <tr>
                            <th>Combustível</th>
                            <td>combustivel</td>
                        </tr>
                        <tr>
                            <th>Ocupantes</th>
                            <td>ocupantes</td>
                        </tr>
                        <tr>
                            <th>Portas</th>
                            <td>portas</td>
                        </tr>
                        <tr>
                            <th>Autonomia</th>
                            <td>autonomia</td>
                        </tr>
                    </table>
                </div>
                <div class="col-6">
                    <table class="tabela-ficha">
                        <tr>
                            <th>Quilometragem</th>
                            <td>quilometragem</td>
                        </tr>
                        <tr>
                            <th>Porta-Malas (Litros)</th>
                            <td>l porta-malas</td>
                        </tr>
                        <tr>
                            <th>Data de Inspeção</th>
                            <td>data de inspeção</td>
                        </tr>
                        <tr>
                            <th>Ar-condicionado</th>
                            <td><i class="material-icons btn">check_circle_outline</i></td>
                        </tr>
                        <tr>
                            <th>Trava Elétrica</th>
                            <td><i class="material-icons btn">check_circle_outline</i></td>
                        </tr>
                        <tr>
                            <th>Direção Hidráulica</th>
                            <td><i class="material-icons btn">check_circle_outline</i></td>
                        </tr>
                        <tr>
                            <th>Airbag</th>
                            <td><i class="material-icons btn">check_circle_outline</i></td>
                        </tr>
                    </table>
                </div>
            </div>
            <form class="signin-form">
                <a href="page-editar-veiculo.php" class="btn-bg" role="button">Editar</a>
                <a href="#" class="btn-bg" role="button">Excluir</a>
            </form>
        </div>
    </div>
</body>

</html>