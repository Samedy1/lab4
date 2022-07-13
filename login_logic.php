<?php
    include_once "read_user_logic.php";

    session_start();
    $success = 0;
    foreach ($query as $row) {
        if ($row['email'] == $_POST['email'] && $row['password'] == $_POST['password']) {
            $success = 1;
            $_SESSION['userInfo'] = $row;
            break;
        }
    }

    if ($success) {
        echo "Login success";
        header('Location: read_product_page.php');
    } else {
        echo "Failed";
        echo "<script>";
        echo "window.history.back();";
        echo "</script>";
    }
?>