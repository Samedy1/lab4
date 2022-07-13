<?php
    include_once "read_product_logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid m-4">
        <h2>Product List</h2>
    </div>
    <div class="container m-5">
        <a class="btn btn-primary" style="color: white;" href="insert_product_page.php">Add New Product</a>
    </div>
    <div class="table-responsive" style="width: 90%; margin: auto;">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Product Name</td>
                    <td>Amount</td>
                    <td>Price</td>
                    <td colspan="2"></td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($products as $row) {
                        echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['amount']."</td>";
                            echo "<td>".$row['price']."</td>";
                            echo "<td><a href='delete_product_page.php?id=$row[id]'>Delete</a></td>";
                            echo "<td><a href='update_product_page.php?productname=$row[name]&amount=$row[amount]&price=$row[price]&id=$row[id]'>Update</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>