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

        $sql = $pdo->prepare("SELECT `id` FROM `detalhes_cliente` WHERE `nome` = ?");
        $sql->execute(array($nome));
        $x = $sql->fetchAll();
        $y = null;

        foreach($x as $key => $value){
            $y = $value['id'];
        }

        return $y;
    }

    public function SearchNameByID($id){
        global $pdo;

        $sql = $pdo->prepare("SELECT `nome` FROM `detalhes_cliente` WHERE `id` = ?");
        $sql->execute(array($id));
        $info = $sql->fetchAll();
        $y = null;

        foreach($info as $key => $value){
            $y = $value['nome'];
        }

        return $y;
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