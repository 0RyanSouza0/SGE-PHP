<?php 
include 'conexao.php';
$sql_listar = "SELECT * FROM aluno ";
$resultado = mysqli_query($conexao, $sql_listar);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listar_aluno.css">
    <title>Document</title>
</head>
<body>
    <!-- <?php  include './templates/navbar.php'; ?> -->

    <table>
        <thead> TABELA DE ALUNOS
            <tr>
                
                <th>Nome: </th>
                <th>Email: </th>
                <th>Telefone: </th>
                <th>Atualizar: </th>
                <th>Excluir: </th>
               
            </tr>
        </thead>
        <tbody>
        <?php while($listar = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <td><?=$listar[1] ?> </td>
                <td><?=$listar[2] ?></td>
                <td><?=$listar[3] ?></td>
                <td> <a href="update.php"> <i class="fa-solid fa-pen"></i></a</td>
                <td><a href="deletar.php"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
        
</body>
</html>