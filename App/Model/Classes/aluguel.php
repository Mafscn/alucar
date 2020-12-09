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

    public function EditClient($idCarro, $idConta, $hIni, $hFin)
    {
        global $pdo;

        $sql = $pdo->prepare("UPDATE `aluguel` SET `idCarro` = ?, `idConta` = ?, `horarioInicial` = ?, `horarioFinal` = ? WHERE `id` = ?");
        $sql->execute(array($idCarro, $idConta, $hIni, $hFin, $_SESSION['idAluguel']));

        return 1;
    }
}

?>