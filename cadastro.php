<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro_aluno.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
</head>
<body>
  <div class="align-formulario">
    <img src="./img/fundocadastro.jpg" alt="">
        <form action="salvarUsuario.php" class="cadastro_aluno" method="post">
            <label for="">Nome</label>
            <input type="text" name="nome" id="">
            <label for="">Email</label>
            <input type="email" name="email" id="">
            <label for="">Telefone</label>
            <input type="tel" name="telefone" id="">
            <input type="submit" value="cadastrar aluno" class="btn">
        </form>
    </div>
  
</body>
</html>