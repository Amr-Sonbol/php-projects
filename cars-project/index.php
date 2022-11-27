<?php
require "car.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$redcar= new car('black', 52, 20, 150);
$redcar->show();
$redcar= new car('gray', 68, 23, 250);
$redcar->show();
$redcar= new car('yellow', 80, 26, 200);
$redcar->show();
?>

    // <!-- <img class="car" src="/photos/black.png" style="top: 52%; width: 20%; animation-duration: calc(500s/20);" />
    // <img class="car" src="/photos/gray.png" style="top: 70%; width: 23%; animation-duration: calc(500s/10);" />
    // <img class="car" src="/photos/yellow.png" style="top: 86%; width: 26%; animation-duration: calc(500s/5);" /> -->
</body>
</html>