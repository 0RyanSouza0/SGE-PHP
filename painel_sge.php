<?php
session_start();
// RECUPERA O ID do USUARIO
$usuario=$_SESSION['usuario'];

//VERIFICA O PERFIL DE ACESSO
if($usuario['perfil']!="admin"){?>

 
<!-- CONTEUDO HTML - ALUNO -->
<?php}
else{?>
<!--  CONTEUDO HTML - ADMIN -->
<p>Voce tem a permissão de acesso: </p><?php echo $usuario['peril']?>
<h4>Seja bem vindo<?php echo $usuario['login']?></h4>

<?php}?>


?>
