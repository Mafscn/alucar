<?php

$localhost = "127.0.0.1";
$user = "root";
$database = "db_alucar";

try {
    $pdo = new PDO("mysql:dbname=" . $database . "; host=" . $localhost, $user);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo "ERRO! Detalhes: " . $ex->getMessage();
    exit;
}
