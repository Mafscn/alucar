<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Clientes</title>
</head>

<body>
    <div class="row align-up">
        <?php include('widgets/menu-bar.php'); ?>
        <div class="col-sm col-9">
            <a href="page-cad-funcionario.php" class="btn-bg" role="button">Cadastrar Funcionário</a>
            <div class="centralize">
                <table class="tabela-menu">
                <?php
                    session_start();
                    require "../Model/connection.php";

                    global $pdo;

                    $sql = $pdo->prepare("SELECT * FROM `detalhes_funcionario`");
                    $sql->execute();
                    $name_bd = $sql->fetchAll();
                    
                        
                        foreach($name_bd as $key => $value){
                             echo '<form method="POST" action="../Controller/pdo_editar.php">
                                <tr>
                                    <th >'.$name = $value['nome'].'</th>
                                    
                                    <td>
                                        <input type="hidden" name="id" value='.$id_funcionario = $value['id'].'>
                                        <button name="telaFuncionario"><i class="material-icons" style="color: darkgoldenrod">edit</i></button>
                                    </td>
                                    <td>
                                        <input type="hidden" name="id" value='.$id_funcionario = $value['id'].'>
                                        <button class="btn-del" name="excluirFuncionarioButton">
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