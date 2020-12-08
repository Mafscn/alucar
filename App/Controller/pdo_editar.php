<?php

session_start();

require "../Model/connection.php";
require "../Model/Classes/user.php";

global $pdo;
$u = new User();
$u->SetID($_SESSION['userid']);

// Recebe todos os argumentos para realizar o cadastro do usuário
if (isset($_POST['editar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataNasc = $_POST['dataNasc'];
    $cpf = $_POST['cpf'];

    if ($u->EditData($nome, $email, $dataNasc, $cpf) == 1) {
        foreach ($u->Refresh() as $key => $value) {
            // Atribui os dados para as variáveis de sessão
            $_SESSION['email'] = $value['email'];
            $_SESSION['nome'] = $value['nome'];
            $_SESSION['cpf'] = $value['cpf'];
            $_SESSION['dataNasc'] = $value['dataNasc'];
            $_SESSION['userid'] = $value['idConta'];
        }
        header("Location: ../View/page-conta.php");
        die();
    } else {
        echo "Erro ao realizar alteração";
    }
}
if(isset($_POST['editarSenha'])){

    $oSenha = $_POST['oSenha'];
    $nSenha1 = $_POST['nSenha1'];
    $nSenha2 = $_POST['nSenha2'];

    if($oSenha == $u->GetPassword() && $nSenha1 == $nSenha2){
        $u->EditPassword($nSenha1);
        echo "<script>
        alert('Senha alterada com sucesso!');
        window.location.replace('../View/page-conta.php');
        </script>";
    }else{
        echo "<script>
        alert('Senha incorreta!');
        window.location.replace('../View/page-conta.php');
        </script>";
    }
}
