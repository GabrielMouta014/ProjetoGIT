$.ajax({
    url: "controle/usuariocontrole.php",
    type: "POST",
    data: {
      acao: "inserir",
      nome: $("#nome").val(),
      cpf: $("#cpf").val(),
      data_nascimento: $("#data_nascimento").val(),
      email: $("#email").val(),
      senha: $("#senha").val(),
      endereco: $("#endereco").val(),
      telefone: $("#telefone").val(),
    },
    
  }); 