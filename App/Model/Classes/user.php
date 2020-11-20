<?php

class User
{

    public function ValidarLogin($email, $password)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM `usuario` WHERE `email` = ? AND `password` = ?");
        $sql->execute(array($email, $password));

        if ($sql->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }
}
