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

<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-1">
                <input class="form-control" type="hidden" name="id" value="<?= $edit ? $whiskey->id : "" ?>">
            </div>
            <div class="col-md-2">
                <input class="form-control" type="text" name="type" value="<?= $edit ? $whiskey->type : "" ?>" placeholder="Type of whiskey">
            </div>
            <div class="col-md-2">
                <input class="form-control" type="text" name="brand" value="<?= $edit ? $whiskey->brand : "" ?>" placeholder="Brand name">
            </div>
            <div class="col-md-3">
                <input class="form-control" type="text" name="location" value="<?= $edit ? $whiskey->location : "" ?>" placeholder="Location of origin">
            </div>
            <div class="col-md-1">
                <input class="form-control" type="text" name="price" value="<?= $edit ? $whiskey->price : "" ?>" placeholder="Price">
            </div>

            <div class="col-md-3">
<?php
    if ($edit) { ?>
        <button type="submit" name="update" class="btn btn-success">UPDATE</button>

<?php } else { ?>
        <button type="submit" name="save" class="btn btn-dark">SAVE</button>

<?php } ?>    
            </div>
        </div>
</div>


<div class="container">
    </form>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Brand</th>
            <th>Location</th>
            <th>Price EUR</th>
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
                <button type="submit" name= "edit" class="btn btn-outline-secondary">EDIT</button>
            </form>
            </td> 
            <td>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?=$whiskey->id?>">
                <button type="submit" name= "destroy" class="btn btn-outline-danger">DELETE</button>
            </form>
            </td>
        </tr>

        <?php } ?>

    </table>
</div>

</body>

</html>