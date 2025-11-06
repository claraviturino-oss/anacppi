<?php

 $host = "localhost"; 
 $usario = "root"; 
 $senha = ""; 
 $database = "login"; 


$mysqli = new mysqli(
    $host, $usario, $senha, $database); 

if($mysqli->connect_error){
    die("nao deu certo fazer a conexao");
}








?>