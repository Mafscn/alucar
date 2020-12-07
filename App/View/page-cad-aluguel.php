<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastrar Aluguel</title>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php'); ?>
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
                    <div class="col-10">Cadastrar Aluguel</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <div class="centralize">
                <form autocomplete="off">
                    <input type="text" class="form-campo" placeholder="Cliente">
                    <input type="email" class="form-campo" placeholder="Veículo">
                </form>
                <div class="row">
                    <div class="col-sm col-6 align-right">
                        <form autocomplete="off">
                            <input type="text" class="form-campo" placeholder="Data de Saída" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input type="text" class="form-campo" placeholder="Horário de Saída" onfocus="(this.type='time')" onblur="(this.type='text')">
                        </form>
                    </div>
                    <div class="col-sm col-6 align-left">
                        <form autocomplete="off">
                            <input type="text" class="form-campo" placeholder="Data de Retorno" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input type="text" class="form-campo" placeholder="Horário de Retorno" onfocus="(this.type='time')" onblur="(this.type='text')">
                        </form>
                    </div>
                </div>
                <form>
                    <a href="page-aluguel.php" class="btn-bg" role="button">Confirmar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>