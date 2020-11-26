<?php

require "../Model/connection.php";
require "../Model/Classes/user.php";

global $pdo;

// Recebe todos os argumentos para realizar o cadastro do usuário
if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['password'];
    $rand = rand(10000, 99999);

    $u = new User();

    $u->Cadastrar($rand, $nome, $email, $data, $cpf, $senha);

    header('Location: ../View/page-login.php');
}