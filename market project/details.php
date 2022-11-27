<?php
require 'db.php';

$id = $_GET['sn'];

$product = $products[$id];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'bs.php';
    ?>
</head>

<body>

    <div class="container mt-5">

        <div class="row">

            <div class="col-4 border">
                <img class="img-fluid" src="images/<?= $product['photo'] ?>" />
            </div>

            <div class="col-8">
                <h3><?= $product['name'] ?></h3>
                <hr />

                <p><strong>Price: </strong><?= $product['price'] ?> EGP</p>
                <p><strong>Stock: </strong><?= $product['stock'] ?> EGP</p>

                <a href="index.php" class="btn btn-primary">Continue Shopping</a>
            </div>

        </div>
    </div>

</body>

</html>