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
    <?php include './templates/navbar.php';?>
    <div class="align-tabela">
        <table>
            <thead class="align-name"> 
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Atualizar</th>
                    <th>Excluir</th>
                
                </tr>
            </thead>
            <tbody  class="align-itens">
            <?php while($listar = mysqli_fetch_array($resultado)) { ?>
                <tr >
                    <td class="nome"><?=$listar[1] ?> </td>
                    <td class="email"><?=$listar[2] ?></td>
                    <td class="telefone"><?=$listar[3] ?></td>
                    <td> <a href="form_atualizar_cad_aluno.php?id_aluno=<?php echo $listar['id_aluno']?>"> <i class="fa-solid fa-pen"></i></a</td>
                    <td><a href="excluir_cadastro_cad_aluno.php?id_aluno=<?php echo $listar['id_aluno']?>"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
    <?php include './templates/footer.php';?>

    <script src="https://kit.fontawesome.com/1c065add65.js" crossorigin="anonymous"></script>
        
</body>
</html>