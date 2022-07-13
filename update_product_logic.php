<?php
    include_once "connection.php";

    session_start();
    $id = $_SESSION['productId'];
    $set = array(
        'name' => $_GET['productname'],
        'amount' => $_GET['amount'],
        'price' => $_GET['price']
    );

    $query = $fluent->update('products')->set($set)->where('id', $id)->execute();
    header('Location: read_product_page.php');


?>