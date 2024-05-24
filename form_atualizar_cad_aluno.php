<?php
    
    //Incluir o arquivo conexao com o banco de dados
    include 'conexao.php';

    //Resgatar id passado via GET pelo link do listar alunos
    $id_aluno_update = $_GET['id_aluno'];

    //Declarar uma variável e inserir o comando em SQL para consulta por id

    $sql_id = "SELECT * FROM aluno WHERE aluno.id_aluno = '$id_aluno_update'";

    //Utiliza a função mysqli_query e armazena o resultado em uma variável
    $consulta_id = mysqli_query($conexao, $sql_id);

    //Converter o resultado da consulta em SQL para um array associativo
    $dados_aluno_id = mysqli_fetch_array($consulta_id);

?>

<div class="container">
    <form action="atualizar_cadastro_aluno.php" method="post">
        <input type="hidden" name="id_aluno" value="<?php echo $dados_aluno_id['id_aluno']?>">      
        <label for="nome_aluno">Nome completo</label>
        <input type="text" name="nome_aluno" id="nome_aluno" placeholder="Digite o Nome" value="<?php echo $dados_aluno_id['nome_aluno']?>">      
        <label for="email_aluno">E-mail</label>
        <input type="text" name="email_aluno" id="email_aluno" placeholder="Digite o E-mail" value="<?php echo $dados_aluno_id['email_aluno']?>">
        <label for="telefone_aluno">Celular</label>
        <input type="text" name="telefone_aluno" id="tel_aluno" placeholder="Digite o Telefone" value="<?php echo $dados_aluno_id['telefone_aluno']?>">
        <input type="submit" value="Atualizar Cadastro">
        <a href="index.php">Voltar ao Inicio</a>
    </form>
</div>

