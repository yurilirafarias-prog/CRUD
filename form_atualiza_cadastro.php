<?php
    // Incluir o arquivo de header
    include_once ("header.php");
    // Incluir o arquivo de conexão com BD
    include_once ("database.php");

    // recuperar a informação enviada via Get do link
    $id_aluno = $_GET['id_aluno'];

    // Construir um string em SQL para buscar a informação
    $sql_id = "SELECT * FROM sge_alunos WHERE sge_alunos.id = '$id_aluno'";

    // Declarar uma variavel para receber a consulta do BD
    $consulta_db_id = mysqli_query($conexao, $sql_id);

    // Converter o resultado em um array associativo
    $dados_db_id = mysqli_fetch_array($consulta_db_id);





    ?>


    <h1>Formulário de atualização do cadastro de alunos</h1>
    <form action="atualiza_cadastro_aluno.php" method="post">
        <input type="hidden" name="id_aluno" value = "<?php echo $dados_db_id['id'];?>">
    
        <label for="nome_aluno">Nome: </label>
        <input type="text" name="nome_aluno" id="nome_aluno" value = "<?php echo $dados_db_id['nome'];?>">
        <label for="email_aluno">E-mail:</label>
        <input type="text" name="email_aluno" id="email_aluno" value = "<?php echo $dados_db_id['email'];?>">
        <label for="celular_aluno">Celular:</label>
        <input type="text" name="celular_aluno" id="celular_aluno" value = "<?php echo $dados_db_id['celular'];?>">
        <input type="submit" value="Atualizar Cadastro do Aluno">

    </form>


    