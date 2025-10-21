<?php

require_once __DIR__ . '/app/controllers/tarefaController.php';

$controller = new TarefaController();

$action = $_GET['action'] ?? 'index';

switch ($action) {

case 'criar':
    $controller->criar();
    break;
case 'excluir':
    $controller->excluir();
    break;
default:
    $controller->index();
    break;
}


?>