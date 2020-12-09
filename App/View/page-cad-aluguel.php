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
                    <div class="col-10">Cadastrar Aluguel</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <form action="../Controller/pdo_cadastro.php" method="POST">
                <div class="centralize">
                    <select name="cliente" class="form-campo">
                        <?php

                        require "../Model/connection.php";

                        global $pdo;

                        $sql = $pdo->prepare("SELECT * FROM `detalhes_cliente` WHERE `owner` = ?");
                        $sql->execute(array($_SESSION['userid']));
                        $name_bd = $sql->fetchAll();

                        foreach ($name_bd as $key => $value) {
                            echo "<option>" . $value['nome'] . "</option>";
                        }
                        ?>
                    </select>
                    <input type="email" class="form-campo" placeholder="Veículo" name="veiculo">
                    <div class="row">
                        <div class="col-sm col-6 align-right">
                            <input type="text" class="form-campo" placeholder="Data de Saída" onfocus="(this.type='date')" onblur="(this.type='text')" name="dateSaida">
                            <input type="text" class="form-campo" placeholder="Horário de Saída" onfocus="(this.type='time')" onblur="(this.type='text')" name="hourSaida">
                        </div>
                        <div class="col-sm col-6 align-left">
                            <input type="text" class="form-campo" placeholder="Data de Retorno" onfocus="(this.type='date')" onblur="(this.type='text')" name="dateRetorno">
                            <input type="text" class="form-campo" placeholder="Horário de Retorno" onfocus="(this.type='time')" onblur="(this.type='text')" name="hourRetorno">
                        </div>
                    </div>
                    <input type="submit" class="btn-bg" role="button" value="Confirmar" name="cadastrarAluguel">
                </div>
            </form>
        </div>
    </div>
</body>

</html>