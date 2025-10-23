<?php
require_once __DIR__ . '/app/controllers/TarefaController.php';

$controller = new TarefaController(); 

$action = $_GET['action'] ?? 'index' ; 

switch ($action) {
    case 'criar':
        $controller->criar();
        break;
    case 'excluir':
        $controller->excluir();
        break;
    case 'editar':
        $controller->editar();
        break;
    case 'atualizar':
        $controller->atualizar();
        break;
    default:
        $controller->index();
        break;
}

?>