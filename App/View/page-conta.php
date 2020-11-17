<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Conta</title>
</head>

<body>
    <div class="row align-up">
        <div class="d-none col-3">
            <?php include('widgets/menu-bar.php'); ?>
        </div>
        <div class="col-sm col-9">
            <div style="height: 24px;"></div>
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-11">
                        <label>Conta</label>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div style="height: 48px;"></div>
            <table class="tabela-ficha">
                <tr>
                    <th>Nome</th>
                    <td>"nome"</td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>"email"</td>
                </tr>
                <tr>
                    <th>Data de Nascimento</th>
                    <td>"data"</td>
                </tr>
                <tr>
                    <th>CPF</th>
                    <td>"cpf"</td>
                </tr>
            </table>
            <div style="height: 48px;"></div>
            <a href="page-alterar-dados.php" class="btn-bg" role="button">Alterar Dados</a>
            <a href="page-alterar-senha.php" class="btn-bg" role="button">Alterar Senha</a>
            <a href="page-login.php" class="btn-bg" role="button">Sair da Conta</a>
        </div>
    </div>
</body>

</html>