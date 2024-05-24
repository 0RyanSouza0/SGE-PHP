<?php
include 'conexao.php';
session_start();

if ($_POST){
    $login_sge=$_POST['login_sge'];
    $password_sge=$_POST['password_sge'];
 
}
// VALIDAÇAO PARA VERIFIFCAR CAMPOS DO FORM 
if(empty($login_sge)){
    $_SESSION['mensagem']="PREENCHA O CAMPO LOGIN ";
    header('Location: ./form_login_sge.php');
}
elseif(empty($password_sge)){
    $_SESSION['mensagem']="PREENCHA O CAMPO SENHA ";
    header('Location: ./form_login_sge.php');
}else{

    $sql_login= "SELECT * FROM login_sge WHERE login_sge ='$login_sge' AND password_sge = '$password_sge'";
 
    $consulta_login = mysqli_query($conexao, $sql_login);
    $dados_login = mysqli_fetch_array($consulta_login);

    if($dados_login['login_sge'] == $login_sge and $dados_login['password_sge']== $password_sge){
        $usuario= array("login"=> $dados_login['login_sge'],
        "senha"=>$dados_login['password_sge'],
        "perfil"=>$dados_login['profile_sge']);

        $_SESSION['usuario']=$usuario;

        header('Location:index.php');
    }
    else{
        $_SESSION['mensagem']="Login ou Senha invalidos";
        header("Location:form_login_sge.php");
    }
}
?>