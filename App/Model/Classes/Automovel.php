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

   public function create($model, $brand, $owner,$plaque,$year,$colour,$door,$trunk,$exchange,$occupants,$bench,$autonomy,$gas,$km,$airbag,$air,$hydraulic,$eletric)
   {
        global $pdo;
        // var_dump($model);
        // die;
        $sql = $pdo->prepare("INSERT INTO `veiculo` (`id`, `modelo`, `marca`, `preco`, `disponibilidade`, `owner`) VALUES (NULL, ?, ?, 100, 1, ? );");
        $sql->execute(array($model, $brand, $owner));

        $sql = $pdo->prepare("INSERT INTO `detalhesveiculo` (`id`, `idVeiculo`, `placa`, `ano`,`cor`,`portas`,`litroPortaMala`,`cambio`,`capacidade`,`banco`,`autonomia`,`combustivel`,`kilometragem`,`airbag`,`arCondicionado`,`direcaoHidraulica`,`travaEletrica`,`dataInspecao`) VALUES (null, LAST_INSERT_ID(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1, 1, 1, 1, NULL);");
        $sql->execute(array($plaque,$year,$colour,$door,$trunk,$exchange,$occupants,$bench,$autonomy,$gas,$km,$airbag,$air,$hydraulic,$eletric));
   }
   public function read(){

   }
   public function update(){

   }
   public function delete(){

   }
}
?>