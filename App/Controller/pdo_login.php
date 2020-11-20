<?php

require "../Model/connection.php";
require "../Model/Classes/user.php";

global $pdo;

if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $u = new User();

    if ($u->ValidarLogin($email, $password) == true) {
        session_start();

        $_SESSION['login'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header('Location: ../View/page-conta.php');
    } else {
        header('Location: ../View/page-login.php');
    }
} else {
}
