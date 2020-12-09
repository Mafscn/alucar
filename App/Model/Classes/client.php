<?php
class Client
{

    private $id;

    function __construct()
    {
        $this->id = null;
    }

    public function SetID($x)
    {
        $this->id = $x;
    }

    public function GetID()
    {
        return $this->id;
    }

    public function Cadastrar($nome, $email, $data, $cpf, $cnh, $logradouro, $bairro, $numero, $complemento, $owner)
    {
            global $pdo;

            $sql = $pdo->prepare("INSERT INTO `detalhes_cliente` (`id`, `nome`, `email`, `cpf`, `cnh`, `data_nasc`, `logradouro`, `bairro`, `numero`, `complemento`, `owner`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
            $sql->execute(array($nome, $email, $cpf, $cnh, $data, $logradouro, $bairro, $numero, $complemento, $owner));

    }

    public function EditClient($nome, $email, $cpf, $cnh, $data, $logradouro, $bairro, $numero, $complemento)
    {

        global $pdo;


        $sql = $pdo->prepare("UPDATE `detalhes_cliente` SET `nome` = ?, `email` = ?, `cpf` = ?, `cnh` = ?, `data_nasc` = ?, `logradouro` = ?, `bairro` = ?, `numero` = ?, `complemento` = ? WHERE `id` = ?");
        $sql->execute(array($nome, $email, $cpf, $cnh, $data, $logradouro, $bairro, $numero, $complemento, $_SESSION['idCliente']));

        return 1;
    }

    public function SearchIDByName($nome){
        global $pdo;

        $sql = $pdo->prepare("SELECT `id` FROM `detalhe_cliente` WHERE `nome` = ?");
        $sql->execute(array($nome));
        $x = $sql->fetchAll();

        foreach($x as $key => $value){
            
        }
    }
}

class Funcionario{

    private $id;

    function __construct()
    {
        $this->id = null;
    }

    public function SetID($x)
    {
        $this->id = $x;
    }

    public function GetID()
    {
        return $this->id;
    }

    public function Cadastrar($nome, $email, $data, $cpf, $logradouro, $bairro, $numero, $complemento, $owner)
    {
            global $pdo;

            $sql = $pdo->prepare("INSERT INTO `detalhes_funcionario` (`nome`, `email`, `cpf`, `data_nasc`, `logradouro`, `bairro`, `numero`, `complemento`, `owner`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
            $sql->execute(array($nome, $email, $cpf, $data, $logradouro, $bairro, $numero, $complemento, $owner));

    }

    public function EditFuncionario($nome, $email, $data, $cpf, $logradouro, $bairro, $numero, $complemento)
    {

        global $pdo;


        $sql = $pdo->prepare("UPDATE `detalhes_funcionario` SET `nome` = ?, `email` = ?, `cpf` = ?, `data_nasc` = ?, `logradouro` = ?, `bairro` = ?, `numero` = ?, `complemento` = ? WHERE `id` = ?");
        $sql->execute(array($nome, $email, $cpf, $data, $logradouro, $bairro, $numero, $complemento, $_SESSION['idFuncionario']));

        return 1;
    }
}
?>