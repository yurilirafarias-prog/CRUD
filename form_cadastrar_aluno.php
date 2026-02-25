<?php require_once ("header.php");?>
    <h1>Formulário de cadastro de alunos</h1>
    <form action="cadastrar_aluno.php" method="post">
        <label for="nome_aluno">Nome: </label>
        <input type="text" name="nome_aluno" id="nome_aluno">
        <label for="email_aluno">E-mail:</label>
        <input type="text" name="email_aluno" id="email_aluno">
        <label for="celular_aluno">Celular:</label>
        <input type="text" name="celular_aluno" id="celular_aluno">
        <input type="submit" value="Cadastrar Aluno">
        
    </form>
<?php require_once ("footer.php");?>