<?php
include "./controllers/WhiskeyController.php";
$edit = false;

    if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['save'])){
    WhiskeyController::store();
    header("Location: ./index.php");
    die;
    }

    if(isset($_POST['edit'])){
    $whiskey = WhiskeyController::show();
    $edit = true;
    }

    if(isset($_POST['update'])){
        $whiskey = WhiskeyController::update();
        header("Location: ./index.php");
        die;
    }

    if(isset($_POST['destroy'])){
        $whiskey = WhiskeyController::destroy();
        header("Location: ./index.php");
        die;
    }

}
$whiskies = WhiskeyController::index();

?>

<!-- This is my header -->
<?php include "./header.php" ?>

    <form action="" method="post">
        <input type="text" name="type" value="<?= $edit ? $whiskey->type : "" ?>" placeholder="Type of whiskey"><br>
        <input type="text" name="brand" value="<?= $edit ? $whiskey->brand : "" ?>" placeholder="Brand name"><br>
        <input type="text" name="location" value="<?= $edit ? $whiskey->location : "" ?>" placeholder="Location of origin"><br>
        <input type="text" name="price" value="<?= $edit ? $whiskey->price : "" ?>" placeholder="Price per bottle"><br>
        <input type="hidden" name="id" value="<?= $edit ? $whiskey->id : "" ?>">

<?php
    if ($edit) { ?>
        <button type="submit" name="update" class="btn btn-success">UPDATE</button>

<?php } else { ?>
        <button type="submit" name="save" class="btn btn-primary">SAVE</button>

<?php } ?>
    </form>

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
        <?php foreach ($whiskies as $whiskey) { ?>

        <tr>
        <?php foreach ($whiskey as $attribute) { ?>
            <td> <?= $attribute ?> </td>
        <?php } ?>
            <td>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?=$whiskey->id?>">
                <button type="submit" name= "edit" class="btn btn-primary">EDIT</button>
            </form>
            </td> 
            <td>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?=$whiskey->id?>">
                <button type="submit" name= "destroy" class="btn btn-danger">DELETE</button>
            </form>
            </td>
        </tr>

        <?php } ?>

    </table>


</body>

</html>