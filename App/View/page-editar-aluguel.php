<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Editar Aluguel</title>
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
                            <a href="page-ficha-aluguel.php">
                                <i class="material-icons btn-voltar" style="font-size: 3rem;">arrow_back</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">Editar Aluguel</div>
                    <div class="d-none col-1"></div>
                </div>
            </div>
            <form action="../Controller/pdo_editar.php" method="POST">
                <div class="centralize">
                    <div class="header-campo">Cliente</div>
                    <select name="cliente" class="form-campo">
                        <option selected><?php echo $_SESSION['nomeContaAluguel']; ?></option>
                        <?php

                        require_once "../Model/connection.php";

                        global $pdo;

                        $sql = $pdo->prepare("SELECT * FROM `detalhes_cliente` WHERE `owner` = ?");
                        $sql->execute(array($_SESSION['userid']));
                        $name_bd = $sql->fetchAll();

                        foreach ($name_bd as $key => $value) {
                            echo "<option>" . $value['nome'] . "</option>";
                        }
                        ?>
                    </select>

                    <div class="header-campo">Veículo</div>
                    <select name="veiculo" class="form-campo">
                        <option selected><?php echo $_SESSION['modeloCarroAluguel']; ?></option>
                        <?php

                        require_once "../Model/connection.php";

                        global $pdo;

                        $sql = $pdo->prepare("SELECT * FROM `veiculo` WHERE `owner` = ?");
                        $sql->execute(array($_SESSION['userid']));
                        $name_bd = $sql->fetchAll();

                        foreach ($name_bd as $key => $value) {
                            echo "<option>" . $value['modelo'] . "</option>";
                        }
                        ?>
                    </select>
                    <div class="row">
                        <div class="col-sm col-6 align-right">
                            <div class="header-campo" style="transform: translateX(8%);">Data de Saída</div>
                            <input type="text" class="form-campo" value="<?php echo $_SESSION['horarioInicialAluguel']; ?>" name="horarioInicialAluguel">
                        </div>
                        <div class="col-sm col-6 align-left">
                            <div class="header-campo" style="transform: translateX(-8%);">Data de Retorno</div>
                            <input type="text" class="form-campo" value="<?php echo $_SESSION['horarioFinalAluguel']; ?>" name="horarioFinalAluguel">
                        </div>
                    </div>
                    <input type="submit" name="editarAluguell" value="Confirmar" class="btn-bg">
                </div>
            </form>
        </div>
    </div>
</body>

</html>