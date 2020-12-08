<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastrar Funcionário</title>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php'); ?>
        <div class="col-sm col-9">
            <div class="container-cabecalho">
                <div class="row">
                    <div class="col-1">
                        <div class="container-btn-voltar">
                            <a href="page-funcionario.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Cadastrar Funcionário</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <form autocomplete="off" method="POST" action="../Controller/pdo_cadastro.php">
                <div class="centralize">
                    <input type="text" class="form-campo" placeholder="Nome" name="nome">
                    <input type="email" class="form-campo" placeholder="E-mail" name="email">
                    <div class="row">
                        <div class="col-sm col-6 align-right">
                            <input type="text" class="form-campo" placeholder="CPF" name="cpf">
                            <input type="date" class="form-campo" placeholder="Data de Nascimento" name="data">
                            <input type="text" class="form-campo" placeholder="Logradouro" name="logradouro">
                        </div>
                        <div class="col-sm col-6 align-left">
                            <input type="text" class="form-campo" placeholder="Bairro" name="bairro">
                            <input type="text" class="form-campo" placeholder="Número" name="numero">
                            <input type="text" class="form-campo" placeholder="Complemento" name="complemento">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn-bg" role="button" value="Confirmar" name="cadastrar_funcionario"></input>
            </form>
        </div>
    </div>
</body>

</html>