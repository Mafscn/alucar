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

        $sql = $pdo->prepare("SELECT * FROM `conta` WHERE `usuario` = ? AND `senha` = ?");
        $sql->execute(array($email, $password));
        $userInfo = $sql->fetchAll();

        if ($sql->rowCount() == 1) {

            foreach ($userInfo as $key => $value) {
                $this->id = $value['id'];
            }

            return true;
        } else {
            return false;
        }
    }

    // Método para cadastrar o novo usuário no banco de dados
    public function Cadastrar($nome, $email, $data, $cpf, $senha)
    {
        global $pdo;

        $tipo = 1;
        
        $sql = $pdo->prepare("INSERT INTO `detalhes_conta` (`idConta`, `nome`, `email`, `dataNasc`, `cpf`, `senha`) VALUES (NULL, ?, ?, ?, ?, ?);");
        $sql->execute(array( $nome, $email, $data, $cpf, $senha));
    
        $sql = $pdo->prepare("INSERT INTO `conta` (`id`, `tipo`, `usuario`, `senha`) VALUES (null, ?, ?, ?);");
        $sql->execute(array($tipo, $email, $senha));
    }

    public function GetUserData()
    {
        if ($this->id != null) {
            global $pdo;

            $sql = $pdo->prepare("SELECT * FROM `detalhes_conta` WHERE `idConta` = ?");
            $sql->execute(array($this->id));

            return $sql->fetchAll();
        }
    }

    public function ReturnID(){
        echo "\n\nID: " . $this->id . "\n\n";
    }
}
