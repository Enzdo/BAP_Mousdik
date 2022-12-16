<?php


if (isset($_GET['id'])){
    require_once 'class/connection.php';
    $connection = new Connection();
    $connection->deletePiano($_GET['id']);

    header('Location: admin.php');
}

