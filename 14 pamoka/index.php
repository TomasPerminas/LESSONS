<?php
include "./controllers/WhiskeyController.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14 pamoka</title>
</head>

<body>
    <?php
    $whiskey = WhiskeyController::index();

    print_r($whiskey);
    ?>


</body>

</html>