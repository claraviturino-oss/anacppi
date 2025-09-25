<?php 

$localhost = 'localhost'; 
$usuario = 'root';
$senha = '';
$database = 'todo_list'; 

$conn = mysqli_connect($localhost,$usuario,$senha, $database);

if($conn->connect_error){
    die('Deu erro na conexão'. $conn->connect_error);
}

# criacao de tarefas
if(isset($_POST['descricao'])){
    $descricao = $conn->real_escape_string($_POST['descricao']);
    $sqlInsert = "INSERT INTO tarefas (descricao) VALUES ('$descricao')"; 
}
# Exclusão de tarefas


$tarefas=[]; 
# Listar tarefas


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-list</title>
</head>
<body>

    <h1>TO-DO List</h1>
    <form action="todo-list2.php" method="POST">
        <input type="text" placeholder="Descrição da sua tarefa" name="descricao"/>
        <button type="submit">Adicionar</button> 
    </form>

    <h2>Suas tarefas</h2>
    <?php if(!empty($tarefas)):?>
    <h3>Suas tarefas</h3>
    <?php else:?>
    <h3>Não tem tarefas</h3>
    <?php endif;?>

</body>
</html>