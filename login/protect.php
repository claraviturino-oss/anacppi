<?php

if (!isset($_SESSION)){

    session_start();
}

if(!isset($_SESSION['id'])){

    die("erro.<p> <a href=\"index.php\">entrar</a></p>");
}

?>


