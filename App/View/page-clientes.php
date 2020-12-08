<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Clientes</title>
    <style type="text/css">
        input.id{
            display: none;
        }
    </style>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php'); ?>
        <div class="col-sm col-9">
            <a href="page-cad-cliente.php" class="btn-bg" role="button">Cadastrar Cliente</a>
            <div class="centralize">
                <table class="tabela-menu">
                    <?php
                    session_start();
                    require "../Model/connection.php";

                    global $pdo;

                    $sql = $pdo->prepare("SELECT * FROM `detalhes_cliente` WHERE `owner` = ?");
                    $sql->execute(array($_SESSION['userid']));
                    $name_bd = $sql->fetchAll();
                    
                        
                        foreach($name_bd as $key => $value){
                             echo '<form method="POST" action="../Controller/pdo_editar.php">
                                <tr>
                                    <th >'.$name = $value['nome'].'</th>
                                    
                                    <td>
                                        <input type="hidden" name="id" value='.$id_cliente = $value['id'].'>
                                        <button name="telaEditar"><i class="material-icons" style="color: darkgoldenrod">edit</i></button>
                                    </td>
                                    <td>
                                        <input type="hidden" name="id" value='.$id_cliente = $value['id'].'>
                                        <button class="btn-del" name="excluirClienteButton">
                                            <i class="material-icons" style="color: darkred">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </form>';
                        }   
                    ?>

                </table>
            </div>
        </div>
    </div>
</body>

</html>