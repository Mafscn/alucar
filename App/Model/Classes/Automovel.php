<?php
class Automovel
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

    public function create($model, $brand, $price, $owner, $plaque)
    {
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO `veiculo` (`id`, `modelo`, `marca`, `preco`, `disponibilidade`, `owner`,`placa`) VALUES (NULL, ?, ?, ?, 1, ?, ?);");
        $sql->execute(array($model, $brand, $price, $owner, $plaque));
    }
    public function read()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }

    public function SearchIDByName($nome)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT `id` FROM `veiculo` WHERE `modelo` = ?");
        $sql->execute(array($nome));
        $x = $sql->fetchAll();
        $y = null;

        foreach ($x as $key => $value) {
            $y = $value['id'];
        }

        return $y;
    }

    public function SearchNameByID($id)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT `modelo` FROM `veiculo` WHERE `id` = ?");
        $sql->execute(array($id));
        $info = $sql->fetchAll();
        $y = null;

        foreach ($info as $key => $value) {
            $y = $value['modelo'];
        }

        return $y;
    }

    public function SearchPlacaByID($id)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT `placa` FROM `veiculo` WHERE `id` = ?");
        $sql->execute(array($id));
        $info = $sql->fetchAll();
        $y = null;

        foreach ($info as $key => $value) {
            $y = $value['placa'];
        }

        return $y;
    }
}
