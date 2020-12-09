<?php
session_start();

require "../Model/connection.php";
require "../Model/Classes/user.php";
require "../Model/Classes/client.php";
<<<<<<< HEAD
require "../Model/Classes/Automovel.php";
=======
require "../Model/Classes/aluguel.php";
>>>>>>> 3ade3b9577d47537e024665f0a6008dced302dbc

global $pdo;

// Recebe todos os argumentos para realizar o cadastro do usuário
if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['password'];

    $u = new User();

    $u->Cadastrar($nome, $email, $data, $cpf, $senha);

    header('Location: ../View/page-login.php');
    die();
}

if (isset($_POST['cadastrar_cliente'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $cpf = $_POST['cpf'];
    $cnh = $_POST['cnh'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $owner = $_SESSION['userid'];
    
    $u = new Client();

    $u->Cadastrar($nome, $email, $data, $cpf, $cnh, $logradouro, $bairro, $numero, $complemento, $owner);

    header('Location: ../View/page-clientes.php');
    die();
}

if (isset($_POST['cadastrar_funcionario'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $cpf = $_POST['cpf'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $owner = $_SESSION['userid'];
    
    $u = new Funcionario();

    $u->Cadastrar($nome, $email, $data, $cpf, $logradouro, $bairro, $numero, $complemento, $owner);

    header('Location: ../View/page-funcionario.php');
    die();
}

<<<<<<< HEAD
if (isset($_POST['cadastrar_automovel'])) {
    $model = $_POST['model'];
    $plaque = $_POST['plaque'];
    $colour = $_POST['colour'];
    $brand = $_POST['brand'];
    $year = $_POST['year'];
    $exchange = $_POST['exchange'];
    $occupants = $_POST['occupants'];
    $door = $_SESSION['door'];
    $trunk = $_SESSION['trunk'];
    $km = $_SESSION['km'];
    $autonomy = $_SESSION['autonomy'];
    $inspection = $_SESSION['inspection'];
    $bench = $_SESSION['bench'];
    $gas = $_SESSION['gas'];
    $air= $_SESSION['air'];
    $eletric = $_SESSION['eletric-lock'];
    $hydraulic = $_SESSION['hydraulic-steering'];
    $airbag = $_SESSION['airbag'];
    
    $auto = new Automovel();

    $auto->create($model, $brand, $owner,$plaque,$year,$colour,$door,$trunk,$exchange,$occupants,$bench,$autonomy,$gas,$km,$airbag,$air,$hydraulic,$eletric);
 
    header('Location: ../View/page-veiculos.php');
    die();
=======
if(isset($_POST['cadastrarAluguel'])){
    $dataSaida = $_POST['dateSaida'] . " " . $_POST['hourSaida'] . ":00";
    $dataRetorno = $_POST['dateRetorno'] . " " . $_POST['hourRetorno'] . ":00";
    $cliente = $_POST['cliente'];
    $veiculo = $_POST['veiculo'];
    $owner = $_SESSION['userid'];

    $a = new Aluguel();
    $c = new Client();

    $clienteID = $c->SearchIDByName($cliente);

    $a->Cadastrar($veiculo, $clienteID, $dataSaida, $dataRetorno, $owner);
    
    header("Location: ../View/page-aluguel.php");
>>>>>>> 3ade3b9577d47537e024665f0a6008dced302dbc
}