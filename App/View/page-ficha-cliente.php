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
        <?php 

        include('widgets/menu-bar.php'); 

        session_start();

        ?>
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
                        <td><?php echo $_SESSION['emailCliente']; ?></td>
                    </tr>
                    <tr>
                        <th>CPF</th>
                        <td><?php echo $_SESSION['cpfCliente']; ?></td>
                    </tr>
                    <tr>
                        <th>CNH</th>
                        <td><?php echo $_SESSION['cnhCliente']; ?></td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td><?php echo $_SESSION['dataCliente']; ?></td>
                    </tr>
                    <tr>
                        <th>Bairro</th>
                        <td><?php echo $_SESSION['bairroCliente']; ?></td>
                    </tr>
                    <tr>
                        <th>Logradouro</th>
                        <td><?php echo $_SESSION['logradouroCliente']; ?></td>
                    </tr>
                    <tr>
                        <th>Número</th>
                        <td><?php echo $_SESSION['numeroCliente']; ?></td>
                    </tr>
                    <tr>
                        <th>Complemento</th>
                        <td><?php echo $_SESSION['complementoCliente']; ?></td>
                    </tr>
                </table>
                <form action="../Controller/pdo_editar.php" method="post">
                    <a href="page-editar-cliente.php" class="btn-bg" role="button">Editar</a>
                    <input type="submit" name="excluirCliente" class="btn-bg btn-red" value="Excluir">
                </form>
            </div>
        </div>
    </div>
</body>

</html>