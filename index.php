<?php 

session_start();

if($_SESSION['login'] == false){
    header('Location: /App/View/page-login.php');
    die();
}else{
    header('Location: /App/View/page-login.php');
    die();
}