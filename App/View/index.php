<?php

session_start();

if($_SESSION['login'] == false){
    header('Location: page-login.php');
    die();
}else{
    header('Location: page-conta.php');
    die();
}