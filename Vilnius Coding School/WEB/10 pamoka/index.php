<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 pamoka</title>
</head>

<body>


    <!-- ========== 1 užduotis ========== -->

    <?php

    $firstName = "Keanu";
    $lastName = "Reeves";

    if (strlen($firstName) < strlen($lastName)) {
        echo "<h3>$firstName</h3>";
    } else {
        echo "<h3>$lastName</h3>";
    }

    ?>

    <!-- ========== 2 užduotis ========== -->

    <?php

    echo (strtoupper($firstName) . " " . strtolower($lastName));

    ?>

    <!-- ========== 3 užduotis ========== -->


    <?php

    $thirdString = (substr($firstName, 0, 1) . substr($lastName, 0, 1));
    echo "<h3>$thirdString</h3>";

    ?>

    <!-- ========== 4 užduotis ========== -->


    <?php


    $fourthString = (substr($firstName, -3) . substr($lastName, -3));
    echo "<h3>$fourthString</h3>";

    ?>


</body>

</html>