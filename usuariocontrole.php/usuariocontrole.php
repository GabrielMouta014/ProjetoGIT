<?php
    include_once("../modelo/usuario.php");
    include_once("../dao/usuariodao.php");

    class UsuarioControle{
        private $dao;

        function __construct(){
            $this->dao = new UsuarioDao();
    }

    function inserir(){
        $usuario = new Usuario();
        $usuario->nome = $_POST["nome"];
        $usuario->cpf = $_POST["cpf"];
        $usuario->data_nascimento = $_POST["data_nascimento"];
        $usuario->email = $_POST["cpf"];
        $usuario->senha = $_POST["senha"];
        $usuario->endereco = $_POST["endereco"];
        $usuario->telefone = $_POST["telefone"];



        $this->dao = new UsuarioDao();
        $this->dao->inserir($usuario);
    }
}

$controle = new UsuarioControle();
$acao = $_POST["acao"];
if($acao == "inserir"){
    $controle->inserir();
}else if ($acao == "pegarTodos"){
    $controle->pegarTodos();
}