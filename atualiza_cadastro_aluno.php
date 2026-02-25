<?php
    // incluir o arquivo de conexâo com o BD
    include("database.php"); 

    // resgatar as infos do formulário
    $id_aluno = $_POST['id_aluno'];
    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $celular_aluno = $_POST['celular_aluno'];

    // Construir a String com as Informações do SQL
    $sql_atualizar = "UPDATE sge_alunos SET nome = '$nome_aluno', 
    email = '$email_aluno', celular = '$celular_aluno'
    WHERE sge_alunos.id = '$id_aluno'";

    // Teste
    $sql_teste = "INSERT INTO sge_funcionarios ( nome, email, celular) 
    VALUES ('$nome_aluno', '$email_aluno', '$celular_aluno')";

    if(mysqli_query($conexao,$sql_atualizar)){
        header("Location:listar_cadastros.php");
    }
    else{
        "Falha ao atualizar cadastro do aluno.";
    }

    ?>