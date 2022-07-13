<?php
    include_once "connection.php";
    include_once "read_user_logic.php";

    $signup_success = 1;
    foreach ($query as $row) {
        if($row['email'] == $_POST['email'] || $_POST['password'] != $_POST['confirming_password']) {
            echo "failed to sign up";
            $signup_success = 0;
            break;
        }
    }

    if ($signup_success == 1) {
        echo "Sign up successfully";
        $value = array(
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        );
        $query = $fluent->insertInto('users', $value)->execute();
        echo "<script>";
        echo "var w = window.open(\"signup_page.php\");
        w.close(); ";
        echo "</script>";
        header("Location: login_page.php", TRUE, 301);
    } else {
        echo "Falied to sign up";
    }
?>