<?php
    include_once "connection.php";

    session_start();
    $userId = $_SESSION['userInfo']['id'];

    $products = $fluent->from('products')->where('user_id', $userId);
?>