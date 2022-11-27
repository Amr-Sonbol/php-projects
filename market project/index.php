<?php
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <?php require 'bs.php';
    ?>
</head>

<body>

    <div class="container mt-5">

        <div class="row">

            <?php
            foreach ($products as $id => $details) {
            ?>

                <div class="card mx-3" style="width: 18rem;">
                    <img src="images/<?= $details['photo'] ?>" class="card-img-top" />
                    <div class="card-body">

                        <h5 class="card-title">
                            <?= $details['name'] ?>
                        </h5>

                        <p class="card-text">
                        <p><strong>Price: </strong><?= $details['price'] ?> EGP</p>
                        <p><strong>Stock: </strong><?= $details['stock'] ?> EGP</p>
                        </p>

                        <a href="details.php?sn=<?= $id ?>" class="btn btn-primary">Details</a>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>

    </div>

</body>

</html>