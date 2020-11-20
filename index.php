<?php 

require_once "./vendor/autoload.php";
require_once "./env.php";
require_once "./src/slimConfiguration.php";
require_once "./routes/index.php";

session_start();

if($_SESSION['login'] == false){
    header('Location: /alucar/App/View/page-login.php');
    die();
}else{
    header('Location: /alucar/App/View/page-conta.php');
    die();
}