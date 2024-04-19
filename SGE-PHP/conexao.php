<?php
$servidor= "localhost:3307";
$usuario= "root";
$senha = "";
$dbname= "bdsge";

// try{
//     $conexao= new PDO("mysql:host=$servidor;
//     dbname=$bdname",$usuario,$senha);
//     return $conexao;
// }catch(PDOException $e){
//     echo '<p>'. $e->getMessage(). '</p>';
// }


$conexao =mysqli_connect($servidor,
$usuario,
$senha,
$dbname
);
?>