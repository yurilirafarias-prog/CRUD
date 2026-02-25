<?php
    // incluir o arquivo de conexâo com o BD
    include("database.php"); 

    // resgatar as infos do formulário
    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $celular_aluno = $_POST['celular_aluno'];

    // Construir a String com as Informações do SQL
    $sql_inserir ="INSERT INTO sge_alunos (nome, email, celular) VALUES ('$nome_aluno','$email_aluno','$celular_aluno')";

    // Teste
    $sql_teste = "INSERT INTO sge_funcionarios ( nome, email, celular) VALUES ('$nome_aluno', '$email_aluno', '$celular_aluno')";

    if(mysqli_query($conexao,$sql_inserir)){
        header("Location:listar_cadastros.php");
    }
    else{
        "Falha ao cadastrar aluno.";
    }