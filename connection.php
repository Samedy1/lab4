<?php
    require 'vendor/autoload.php';

    $pdo = new PDO('mysql:dbname=webLab4', 'root', '12345@user');
    $fluent = new \Envms\FluentPDO\Query($pdo);
?>