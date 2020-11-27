<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Ficha Cliente</title>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php'); ?>
        <div class="col-sm col-9">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-clientes.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Ficha Cliente</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <div class="centralize">
                <table class="tabela-ficha">
                    <tr>
                        <th>E-mail</th>
                        <td>email</td>
                    </tr>
                    <tr>
                        <th>CPF</th>
                        <td>cpf</td>
                    </tr>
                    <tr>
                        <th>CNH</th>
                        <td>cnh</td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td>Data de Nascimento</td>
                    </tr>
                    <tr>
                        <th>Bairro</th>
                        <td>bairro</td>
                    </tr>
                    <tr>
                        <th>Logradouro</th>
                        <td>logradouro</td>
                    </tr>
                    <tr>
                        <th>Número</th>
                        <td>numero</td>
                    </tr>
                    <tr>
                        <th>Complemento</th>
                        <td>complemento</td>
                    </tr>
                </table>
                <form>
                    <a href="page-editar-cliente.php" class="btn-bg" role="button">Editar</a>
                    <a href="#" class="btn-bg btn-red" role="button">Excluir</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>