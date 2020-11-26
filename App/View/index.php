<?php

session_start();

// Comparação nas variaveis de sessão, para checar se o usuário está logado ou não
if($_SESSION['login'] == false){
    // Caso não esteja logado, será redirecionado para a tela de login
    header('Location: page-login.php');
    die();
}else{
    // Caso esteja logado, terá acesso às telas do usuário
    header('Location: page-conta.php');
    die();
}
?>