<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'nine';

$conexao =new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao-> connect_erro){
    echo "erro";
}else{
   echo "conectado::::::";
    print_r('nome');
}
?>
