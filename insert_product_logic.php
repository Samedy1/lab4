<?php
    include_once "connection.php";

    session_start();

    $userId = 1;
    $value = array(
        'user_id' => $_SESSION['userInfo']['id'],
        'name' => $_GET['productname'],
        'amount' => $_GET['amount'],
        'price' => $_GET['price']
    );

    $query = $fluent->insertInto('products', $value)->execute();
    header('Location: read_product_page.php');

?>