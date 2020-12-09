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

   public function create($model, $brand, $price,$owner,$plaque)
   {
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO `veiculo` (`id`, `modelo`, `marca`, `preco`, `disponibilidade`, `owner`,`placa`) VALUES (NULL, ?, ?, ?, 1, ?, ?);");
        $sql->execute(array($model, $brand, $price,$owner,$plaque));
       
   }
   public function read(){

   }
   public function update(){

   }
   public function delete(){

   }
}
?>