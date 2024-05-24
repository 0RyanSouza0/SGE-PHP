<?php
    include 'conexao.php';

    $id_aluno = $_POST['id_aluno'];
    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $telefone_aluno = $_POST['telefone_aluno'];

    $sql_update = "UPDATE aluno
    SET nome_aluno = '$nome_aluno',
    email_aluno = '$email_aluno',
    telefone_aluno = '$telefone_aluno'
    WHERE aluno.id_aluno = '$id_aluno'";
    // "UPDATE `sge_alunos` SET `nome_aluno` = 'richard1', `email_aluno` = 'ryanarnold@fatec.sp.gov.br1', `telefone_aluno` = '1195556688771' 
    // WHERE `sge_alunos`.`id_aluno` = 6";

if(mysqli_query($conexao, $sql_update)){
    header("location:listar_alunos.php");
}
else{
    echo "Você é brocha.";
}
