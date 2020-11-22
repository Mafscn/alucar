<?php

class User
{

    private $id;

    function __construct()
    {
        $this->id = null;
    }

    // Método que diz se o usuário existe ou não
    public function ValidarLogin($email, $password)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM `usuario` WHERE `email` = ? AND `password` = ?");
        $sql->execute(array($email, $password));
        $userInfo = $sql->fetchAll();

        if ($sql->rowCount() == 1) {

            foreach ($userInfo as $key => $value) {
                $this->id = $value['id_usuario'];
            }

            return true;
        } else {
            return false;
        }
    }

    // Método para cadastrar o novo usuário no banco de dados
    public function Cadastrar($nome, $email, $nascimento, $cpf, $password)
    {
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `password`, `cpf`) VALUES (NULL, ?, ?, ?, ?);");
        $sql->execute(array($nome, $email, $password, $cpf));
    }

    public function GetUserData()
    {
        if ($this->id != null) {
            global $pdo;

            $sql = $pdo->prepare("SELECT * FROM `usuario` WHERE `id_usuario` = ?");
            $sql->execute(array($this->id));

            return $sql->fetchAll();
        }
    }
}
