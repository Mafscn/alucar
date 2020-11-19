<?php

try {
    require_once "connection.php";

    if (isset($_POST['entrar'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = $pdo->prepare("SELECT * FROM `usuario` WHERE email = ? AND password = ?");
        $sql->execute(array($email, $password));
        $sessionInfo = $sql->fetchAll();

        if ($sessionInfo != null) {
            header("Location: ../View/page-conta.php");
        } else {
            header("Location: ../View/page-login.php");
        }
    }
} catch (Exception $e) {
    echo "Erro ao se conectar com o banco de dados. <br><br>Mais informações: " . $e;
}
