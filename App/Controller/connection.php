<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=db_alucar','root','');
}catch(Exception $e){
    echo "Erro ao se conectar com o banco. <br><br>Mais informações: ".$e;
}
