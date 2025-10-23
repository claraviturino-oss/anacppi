<?php
require_once __DIR__ . '/../config/database.php';

class Tarefa{
    private $conn; 

    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar(); 
    }

    ## Listar 

    public function listarAtivas(){
        $tarefas = [];
        $sql = "SELECT * FROM tarefas ORDER BY data_criacao DESC"; 
        $resultado = $this->conn->query($sql); 

        if($resultado->num_rows >0){
            while($row = $resultado->fetch_assoc()){
                $tarefas[] = $row; 
            }
        }

        return $tarefas;
    }

    public function listar() {
    return []; 
    }

    ## Criar 

    public function criar($descricao){
        $descricao = $this->conn->real_escape_string($descricao); 
        $sql = "INSERT INTO tarefas (descricao) VALUES ('$descricao')"; 
        return $this->conn->query($sql); 
    }

    ## Exlcuir 

    public function excluir($id){
        $id = intval($id);
        $sql = "DELETE FROM tarefas WHERE id = $id"; 
        return $this->conn->query($sql); 
    }

    ## Editar
    public function editar($id, $descricao){
        $id = intval($id);
        $descricao = $this->conn->real_escape_string($descricao);
        $sql = "UPDATE tarefas SET descricao = '$descricao' WHERE id = $id";
        return $this->conn->query($sql);
    }

    ## Buscar por ID (para preencher o formulário de edição)
    public function buscarPorId($id){
        $id = intval($id);
        $sql = "SELECT * FROM tarefas WHERE id = $id";
        $resultado = $this->conn->query($sql);
        return $resultado->fetch_assoc();
    }

}

?>