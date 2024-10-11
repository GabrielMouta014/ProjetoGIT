<?php

include_once("../utilitarios/conexao.php");

class UsuarioDao{
    function inserir($usuario){
        $parametros = Array (
            ":nome" => $usuario->nome,
            ":cpf" => $usuario->cpf,
            ":data_nascimento" => $usuario->data_nascimento,
            ":email" => $usuario->email,
            ":senha" => $usuario->senha,
            ":endereco" => $usuario->endereco,
            ":telefone" => $usuario->telefone,
                    
        );
        $query = "insert into usuario (nome, cpf, data_nascimento, email, senha, endereco, telefone)
            values (:nome, :cpf, :data_nascimento, :email, :senha, :endereco, :telefone)";
            Conexao::executarComParametros($query, $parametros);
    }

}

//function cadastrar() {
 //   $.ajax({
//      url: "controle/usuariocontrole.php",
//      type: "POST",
 //     data: {
//        acao: "inserir",
//        nome: $("#nome").val(),
//        cpf: $("#cpf").val(),
//        data_nascimento: $("#data_nascimento").val(),
 //       email: $("#email").val(),
 //       senha: $("#senha").val(),
 //       endereco: $("#endereco").val(),
 //       telefone: $("#telefone").val(),
 //     },
      
//    });

//

