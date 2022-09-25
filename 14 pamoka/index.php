<?php
include "./controllers/WhiskeyController.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>14 pamoka</title>
</head>

<body>
    <?php
    $whiskey = WhiskeyController::index();

    ?>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Brand</th>
            <th>Location</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($whiskey as $whiskey) { ?>

        <tr>
        <?php foreach ($whiskey as $attribute) { ?>
            <td> <?= $attribute ?> </td>
        <?php } ?>
            <td>
            <form action="" method="get">
                <button type="submit" class="btn btn-primary">EDIT</button>
            </form>
            </td> 
            <td>
            <form action="" method="get">
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
            </td>
        </tr>

        <?php } ?>

    </table>


</body>

</html>