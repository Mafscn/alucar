<!doctype html>
<html lang="pt-BR" class="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="auto">
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
                            <a href="page-clientes.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-11">
                        <label>Editar Cliente</label>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div style="height: 48px;"></div>
            <form autocomplete="off">
                <div class="header-campo">Nome</div>
                <input type="text" class="form-campo" placeholder="Nome">
                <div style="height: 16px;"></div>

                <div class="header-campo">E-mail</div>
                <input type="email" class="form-campo" placeholder="E-mail">
                <div style="height: 16px;"></div>
            </form>
            <div class="row">
                <div class="col-sm col-6 align-right">
                    <form autocomplete="off">
                        <div class="header-campo" style="transform: translateX(5%);">CPF</div>
                        <input type="text" class="form-campo" placeholder="CPF">
                        <div style="height: 16px;"></div>

                        <div class="header-campo" style="transform: translateX(5%);">CNH</div>
                        <input type="text" class="form-campo" placeholder="CNH">
                        <div style="height: 16px;"></div>

                        <div class="header-campo" style="transform: translateX(5%);">Logradouro</div>
                        <input type="text" class="form-campo" placeholder="Logradouro">
                    </form>
                </div>
                <div class="col-sm col-6 align-left">
                    <form autocomplete="off">
                    <div class="header-campo" style="transform: translateX(-6%);">Número</div>
                        <input type="text" class="form-campo" placeholder="Número">
                        <div style="height: 16px;"></div>

                        <div class="header-campo" style="transform: translateX(-6%);">Complemento</div>
                        <input type="text" class="form-campo" placeholder="Complemento">
                        <div style="height: 16px;"></div>

                        <div class="header-campo" style="transform: translateX(-6%);">Bairro</div>
                        <input type="text" class="form-campo" placeholder="Bairro">
                    </form>
                </div>
            </div>
            <div style="height: 32px;"></div>
            <form>
                <a href="page-clientes.php" class="btn-bg" role="button">Confirmar</a>
            </form>
        </div>
    </div>
</body>

</html>