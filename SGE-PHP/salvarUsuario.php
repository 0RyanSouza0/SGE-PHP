<?php
include 'conexao.php';

if($_POST){
    $nome=trim($_POST['nome']);
    $telefone=trim($_POST['telefone']);
    $email=trim($_POST['email']);

    $sql = "
    INSERT INTO aluno (nome_aluno , email_aluno , telefone_aluno ) VALUES
    (   '$nome',
        '$email',
        '$telefone'
    )
    ";

    if(mysqli_query($conexao, $sql)){
        header("Location:listar_alunos.php");
    }
    else{
        echo 'Nao inserido';
    }
// $query = $conexao->prepare($sql);
// $query->execute();

// $sql2 = "UPDATE aluno SET ('')"

}

?>