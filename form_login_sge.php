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
    <img src="./img/fundo.jpg" alt="">
        <form action="valida_login_sge.php"  method="post">
            <label for="">Nome</label>
            <input type="text" name="login_sge" id="">
            <label for="">Senha</label>
            <input type="password" name="password_sge" id="">
            <input type="submit" value="LOGIN" class="btn">
        </form>
        <p><a href="#">Esqueceu a senha?</a></p>
        <p><a href="./cadastro.php">Cadastre-se</a></p>
        <!-- VALIDAR LOGIN -->
        <?php   
        // INICIAR SESSION
          session_start();
          if(isset($_SESSION['mensagem'])){
            $mensagem= $_SESSION['mensagem'];
            echo "<p>" .$mensagem. "</p>";

            unset($_SESSION['mensagem']);

          }
        ?>
  
    </div>
   
</body>
</html>