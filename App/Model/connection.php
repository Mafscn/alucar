<?php

$localhost = "127.0.0.1";
$user = "root";
$password = "Conecta123%";
$database = "alucar";

try {
    $pdo = new PDO("mysql:dbname=" . $database . "; host=" . $localhost, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo "ERRO! Detalhes: " . $ex->getMessage();
    exit;
}