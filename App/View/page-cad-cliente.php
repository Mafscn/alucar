<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastrar Cliente</title>
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
                    <div class="col-10">Cadastrar Cliente</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <div class="centralize">
                <form action="../Controller/pdo_cadastro.php" method="post">
                    <input type="text" class="form-campo" placeholder="Nome" name="nome">
                    <div class="row">
                        <div class="col-sm col-6 align-right">
                            <input type="email" class="form-campo" placeholder="E-mail" name="email">
                            <input type="text" class="form-campo" placeholder="CPF" name="cpf">
                            <input type="text" class="form-campo" placeholder="CNH" name="cnh">
                            <input type="date" class="form-campo" placeholder="Data de Nascimento" name="data">
                        </div>
                        <div class="col-sm col-6 align-left">
                            <input type="text" class="form-campo" placeholder="Logradouro" name="logradouro">
                            <input type="text" class="form-campo" placeholder="Bairro" name="bairro">
                            <input type="text" class="form-campo" placeholder="Número" name="numero">
                            <input type="text" class="form-campo" placeholder="Complemento" name="complemento">
                        </div>
                    </div>
                    <button class="btn-bg" style="border-style: none" name="cadastrar_cliente">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>