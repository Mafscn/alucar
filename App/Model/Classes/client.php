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

    public function Cadastrar($nome, $email, $data, $cpf, $cnh, $logradouro, $bairro, $numero, $complemento)
    {
            global $pdo;

            $tipo = 1;

            $sql = $pdo->prepare("INSERT INTO `detalhes_cliente` (`id`, `nome`, `email`, `cpf`, `cnh`, `data_nasc`, `logradouro`, `bairro`, `numero`, `complemento`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
            $sql->execute(array($nome, $email, $cpf, $cnh, $data, $logradouro, $bairro, $numero, $complemento));

    }

    public function EditClient($nome, $email, $cpf, $cnh, $data, $logradouro, $bairro, $numero, $complemento)
    {

        global $pdo;


        $sql = $pdo->prepare("UPDATE `detalhes_cliente` SET `nome` = ?, `email` = ?, `cpf` = ?, `cnh` = ?, `data_nasc` = ?, `logradouro` = ?, `bairro` = ?, `numero` = ?, `complemento` = ? WHERE `id` = ?");
        $sql->execute(array($nome, $email, $cpf, $cnh, $data, $logradouro, $bairro, $numero, $complemento, $_SESSION['idCliente']));

        return 1;
    }
}
?>