<?php

require "../Model/connection.php";
require "../Model/Classes/user.php";

global $pdo;

// Recebe todos os argumentos para realizar a sessão do usuário
if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $u = new User();

    // Chamando o método da classe usuário, que valida se consta login ou não
    if ($u->ValidarLogin($email, $password) == true) {
        session_start();

        // Função que retorna os dados do usuário logado
        $userInfo = $u->GetUserData();

        foreach($userInfo as $key => $value){
            // Atribui os dados para as variáveis de sessão
            $_SESSION['login'] = true;
            $_SESSION['email'] = $value['email'];
            $_SESSION['password'] = $value['password'];
            $_SESSION['nome'] = $value['nome'];
            $_SESSION['cpf'] = $value['cpf'];
        }   
    } 

    // Ao fim da comparação, é enviado a página index que realizará o controle (se usuário conseguiu logar com sucesso ou não)
    header('Location: ../View/');

} else {
}
