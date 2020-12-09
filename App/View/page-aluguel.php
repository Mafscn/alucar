<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Aluguel</title>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php');
        session_start();
        ?>
        <div class="col-sm col-9">
            <a href="page-cad-aluguel.php" class="btn-bg" role="button">Cadastrar Aluguel</a>
            <div class="centralize">
                <table class="tabela-menu">
                    <?php
                    require "../Model/connection.php";
                    require "../Model/Classes/client.php";

                    $c = new Client();

                    global $pdo;

                    $sql = $pdo->prepare("SELECT * FROM `aluguel` WHERE `owner` = ?");
                    $sql->execute(array($_SESSION['userid']));
                    $info = $sql->fetchAll();

                    foreach ($info as $key => $value) {
                        $nomeCliente = $c->SearchNameByID($value['idConta']);
                        echo '
                        <form method="POST" action="../Controller/pdo_editar.php">
                        <tr>
                            <th>ID: ' . $value['id'] . '&nbsp &nbsp &nbsp &nbsp' . 'Cliente: '.$nomeCliente.'</th>
                            <td>'.$value['horarioFinal'].'</td>
                            <td>
                                <input type="hidden" name="id" value='.$id_aluguel = $value['id'].'>
                                <button name="editarAluguel">
                                    <i class="material-icons" style="color: darkgoldenrod">edit</i>
                                </button>
                            </td>
                            <td>
                                <input type="hidden" name="id" value='.$id_aluguel = $value['id'].'>
                                <button name="excluirAluguel" class="btn-del">
                                    <i class="material-icons" style="color: darkred">delete</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        </form>
                        ';
                    };
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>