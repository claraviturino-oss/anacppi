<?php

 $host = "localhost"; 
 $usario = "root"; 
 $senha = ""; 
 $database = "login"; 


$conn = new mysqli(
    $host, $usario, $senha, $database); 

if($conn->connect_error){
    die("nao deu certo fazer a conexao");
}








?>