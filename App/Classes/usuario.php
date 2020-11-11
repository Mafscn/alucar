<?php

class Usuario{

    // Atributos da classe usuário
    public $id;
    public $nome;
    public $email;
    public $nascimento;
    public $cpf;
    public $senha;

    // Método construtor
    function __construct($id){
        $this -> id = $id;
    }

    // Função que retorna o ID
    public function GetID(){
        return $this -> id;
    }

    // Função que muda o ID do usuário
    public function SetID($novoID){
        $this -> id = $novoID;
    }

    // Função que retorna o Nome
    public function GetNome(){
        return $this -> nome;
    }

    // Função que muda o Nome do usuário
    public function SetNome($novoNome){
        $this -> id = $novoNome;
    }

    // Função que retorna o Email
    public function GetEmail(){
        return $this -> email;
    }

    // Função que muda o Email do usuário
    public function SetEmail($novoEmail){
        $this -> email = $novoEmail;
    }

    // Função que atualiza os atributos da classe usuário
    public function Refresh(){

    }

}