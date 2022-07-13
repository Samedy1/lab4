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
    <?php
        session_start();
        $_SESSION['productId'] = $_GET['id'];
    ?>

    <div class="container mt-5">
        <h2>Enter your product information</h2>
    </div>
    <div class="m-5" style="width: 70%;">
        <form action="update_product_logic.php">
            <div class="form-group">
                <label for="productname">Product Name</label>
                <input type="text" id="productname" name="productname" class="form-control" placeholder="Enter your product name" value="<?php echo $_GET['productname'] ?>" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" class="form-control" placeholder="Enter the product amount" value="<?php echo $_GET['amount'] ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step=any id="price" name="price" class="form-control" placeholder="Enter the product price" value="<?php echo $_GET['price'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>