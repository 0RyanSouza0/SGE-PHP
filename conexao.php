<?php
$banco = "";
$senha = "";
$servidor = "localhost";
$usuario = "root";
try{
    $conexao= new PDO("mysql:host=$servidor;
    dbname=$banco",$usuario,$senha);
    return $conexao;
}catch(PDOException $e){
    echo '<p>'. $e->getMessage(). '</p>'
}

