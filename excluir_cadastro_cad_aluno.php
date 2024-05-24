<?php
    //Incluir o arquivo de conexão com o banco de dados
    include "conexao.php";

    //Resgatar o id via GET para realizar consulta por id
    $id_aluno = $_GET['id_aluno'];

    //construir uma String em SQL para realizar a exclusão por id
    $sql_excluir_id = "DELETE FROM aluno WHERE aluno.id_aluno = '$id_aluno'";

    if(mysqli_query($conexao, $sql_excluir_id)){
        header("location:listar_alunos.php");
    }
    else{
        echo "Você é brocha.";
    }
