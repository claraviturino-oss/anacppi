<?php

require_once __DIR__ . '/../config/database.php';

class Tarefa{
    private $conn;
    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
    }
## Listar

public function listar(){
    $tarefas =[];
    $sql = "SELECT * FROM tarefas ORDER BY data_criacao DESC";
    $resultado = $this->conn->query( $sql );
    
if($resultado->num_rows>0){ //obtem o numero de linhas q tem na consulta
    while($row = $resultado->fetch_assoc()){ //pega a proxima linha 
        $tarefas[]=$row;
}
}
return $tarefas;

}

## Criar

public function criar($descricao){
$descricao = $this->conn->real_escape_string($descricao);
$sql = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";
return $this->conn->query( $sql );
}


# Exclusão de tarefas
public function excluir($id){
$id = intval($id);
$sql = "DELETE FROM tarefas WHERE id = $id";
return $this->conn->query( $sql );
}










}



?>