<?php
    include_once "connection.php";

    $id = $_GET['id'];
    $query = $fluent->deleteFrom('products', $id)->execute();
    header("Location: read_product_page.php");
?>

