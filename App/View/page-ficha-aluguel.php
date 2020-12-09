<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Ficha Aluguel</title>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php');
        session_start();
        ?>
        <div class="col-sm col-9">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-aluguel.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Ficha Aluguel</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <form action="../Controller/pdo_editar.php" method="POST">
                <div class="centralize">
                    <table class="tabela-ficha">
                        <tr>
                            <th>ID Cliente</th>
                            <td><?php echo $_SESSION['idContaAluguel']; ?></td>
                        </tr>
                        <tr>
                            <th>Veículo</th>
                            <td><?php echo $_SESSION['idCarroAluguel']; ?></td>
                        </tr>
                        <tr>
                            <th>Placa</th>
                            <td>"numero"</td>
                        </tr>
                        <tr>
                            <th>Saída</th>
                            <td><?php echo $_SESSION['horarioInicialAluguel']; ?></td>
                        </tr>
                        <tr>
                            <th>Retorno</th>
                            <td><?php echo $_SESSION['horarioFinalAluguel']; ?></td>
                        </tr>
                    </table>
                    <a href="page-editar-aluguel.php" class="btn-bg" role="button">Editar</a>
                    <a href="page-registrar-ocorrencia.php" class="btn-bg" role="button">Registrar Ocorrência</a>
                    <input type="submit" class="btn-bg btn-red" name="excluirAluguel" role="button" value="Excluir"></input>
                </div>
            </form>
        </div>
    </div>
</body>

</html>