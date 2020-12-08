<?php

session_start();

require "../Model/connection.php";
require "../Model/Classes/user.php";
require "../Model/Classes/client.php";

global $pdo;
$u = new User();
$c = new Client();
$u->SetID($_SESSION['userid']);

// Recebe todos os argumentos para realizar o cadastro do usuário
if (isset($_POST['editar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataNasc = $_POST['dataNasc'];
    $cpf = $_POST['cpf'];

    if (strlen($email) > 6 && strlen($cpf) > 6) {

        if ($u->EditData($nome, $email, $dataNasc, $cpf) == 1) {
            foreach ($u->Refresh() as $key => $value) {
                // Atribui os dados para as variáveis de sessão
                $_SESSION['email'] = $value['email'];
                $_SESSION['nome'] = $value['nome'];
                $_SESSION['cpf'] = $value['cpf'];
                $_SESSION['dataNasc'] = $value['dataNasc'];
                $_SESSION['userid'] = $value['idConta'];
            }
            header("Location: ../View/page-conta.php");
            die();
        } else {
            echo "<script>
            alert('Erro ao realizar alteração!');
            window.location.replace('../View/page-conta.php');
            </script>";
        }
    } else{
        echo "<script>
            alert('Você deve informar os dados corretamente!');
            window.location.replace('../View/page-conta.php');
            </script>";
    }
}
if (isset($_POST['editarSenha'])) {

    $oSenha = $_POST['oSenha'];
    $nSenha1 = $_POST['nSenha1'];
    $nSenha2 = $_POST['nSenha2'];

    if ($oSenha == $u->GetPassword() && $nSenha1 == $nSenha2 && strlen($nSenha1) > 5) {
        $u->EditPassword($nSenha1);
        echo "<script>
        alert('Senha alterada com sucesso!');
        window.location.replace('../View/page-conta.php');
        </script>";
    }
    if (strlen($nSenha1 < 6)) {
        echo "<script>
        alert('A nova senha deve possuir ao menos 6 caracteres!');
        window.location.replace('../View/page-conta.php');
        </script>";
    } else {
        echo "<script>
        alert('Senha incorreta!');
        window.location.replace('../View/page-conta.php');
        </script>";
    }
}
if(isset($_POST['telaEditar'])){
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    
    global $pdo;

    $sql = $pdo->prepare("SELECT * FROM `detalhes_cliente` WHERE `id`='$id'");
    $sql->execute();
    $name_bd = $sql->fetchAll();

    foreach($name_bd as $key => $value){
        $_SESSION['idCliente'] = $id;
        $_SESSION['nomeCliente'] = $value['nome'];
        $_SESSION['emailCliente'] = $value['email'];
        $_SESSION['cpfCliente'] = $value['cpf'];
        $_SESSION['cnhCliente'] = $value['cnh'];
        $_SESSION['dataCliente'] = $value['data_nasc'];
        $_SESSION['logradouroCliente'] = $value['logradouro'];
        $_SESSION['bairroCliente'] = $value['bairro'];
        $_SESSION['numeroCliente'] = $value['numero'];
        $_SESSION['complementoCliente'] = $value['complemento'];
    }

      
    //echo $name, $email, $cpf, $data, $logradouro, $bairro, $numero, $complemento;

    header("location: ../View/page-ficha-cliente.php");
}

if(isset($_POST["editarCliente"])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $cnh = $_POST['cnh'];
    $data = $_POST['dataNasc'];
    $bairro = $_POST['bairro'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];

    $c->EditClient($nome, $email, $cpf, $cnh, $data, $logradouro, $bairro, $numero, $complemento);

    $_SESSION['nomeCliente'] = $nome;
    $_SESSION['emailCliente'] = $email;
    $_SESSION['cpfCliente'] = $cpf;
    $_SESSION['cnhCliente'] = $cnh;
    $_SESSION['dataCliente'] = $data;
    $_SESSION['logradouroCliente'] = $logradouro;
    $_SESSION['bairroCliente'] = $bairro;
    $_SESSION['numeroCliente'] = $numero;
    $_SESSION['complementoCliente'] = $complemento;

    header('Location: ../View/page-ficha-cliente.php');
}

if(isset($_POST['excluirCliente'])){
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    global $pdo;

    $sql = $pdo->prepare("DELETE FROM detalhes_cliente WHERE id = ?");
    $sql->execute(array($_SESSION['idCliente']));

    header('Location: ../View/page-clientes.php');
}

if(isset($_POST['excluirClienteButton'])){
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    $_SESSION['idCliente'] = $id;

    global $pdo;

    $sql = $pdo->prepare("DELETE FROM detalhes_cliente WHERE id = ?");
    $sql->execute(array($_SESSION['idCliente']));

    header('Location: ../View/page-clientes.php');
}