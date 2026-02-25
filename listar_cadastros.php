<?php
    // Incluir o arquivo de conexão com o BD
    include_once("database.php");
    include_once("header.php");

    // Construir a String em SQL
    $sql_listar = "SELECT * FROM sge_alunos";
    
    // Declarar uma variável para receber a consulta do BD
    $consulta_db = mysqli_query($conexao, $sql_listar);



?>

<div class="container mt-3">
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Nome: </th>
                <th>Email: </th>
                <th>Celular: </th>
                <th>Atualizar: </th>
                <th>Excluir: </th>
            </tr>
        </thead>
        <tbody>
            <?php while($dados_db = mysqli_fetch_array($consulta_db)){ ?> 
            <tr>
                <td><?php echo $dados_db['nome'];?></td>
                <td><?php echo $dados_db['email'];?></td>
                <td><?php echo $dados_db['celular'];?></td>
                <td><a href="form_atualiza_cadastro.php?id_aluno=<?php echo $dados_db['id'];?>"><img src="IMG/icons/icons8-update-60.png" alt="update"></a></td>                
                <td><a href="link aqui"><img src="IMG/icons/icons8-delete-60.png" alt="Excluir"></a></td>                
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>