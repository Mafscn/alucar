<?php

session_start();

require "../Model/connection.php";
require "../Model/Classes/user.php";

global $pdo;

// Recebe todos os argumentos para realizar o cadastro do usuário
if (isset($_POST['editar'])) {
    $u = new User();
    $u->SetID($_SESSION['userid']);

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
    } else {
        echo "Erro ao realizar alteração";
    }
}
