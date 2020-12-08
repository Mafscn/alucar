<?php

require "../Model/connection.php";
require "../Model/Classes/user.php";
require "../Model/Classes/client.php";

global $pdo;

// Recebe todos os argumentos para realizar o cadastro do usuário
if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['password'];

    $u = new User();

    $u->Cadastrar($nome, $email, $data, $cpf, $senha);

    header('Location: ../View/page-login.php');
    die();
}

if (isset($_POST['cadastrar_cliente'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $cpf = $_POST['cpf'];
    $cnh = $_POST['cnh'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    
    $u = new Client();

    $u->Cadastrar($nome, $email, $data, $cpf, $cnh, $logradouro, $bairro, $numero, $complemento);

    header('Location: ../View/page-clientes.php');
    die();
}