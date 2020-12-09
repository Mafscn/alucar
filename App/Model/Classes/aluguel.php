<?php

class Aluguel{

    private $id;

    function __construct()  
    {
        $this->id = null;
    }

    public function SetID($x){
        $this->id = $x;
    }
    
    public function GetID(){
        return $this->id;
    }

    public function Cadastrar($carro, $conta, $horI, $horF, $owner){
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO `aluguel` (`idCarro`,`idConta`,`horarioInicial`,`horarioFinal`,`ocorrencia`, `owner`) VALUES (?,?,?,?,0,?)");
        $sql->execute(array($carro, $conta, $horI, $horF, $owner));

        return 1;
    }
}

?>