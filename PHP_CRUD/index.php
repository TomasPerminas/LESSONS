<?php
include "./controllers/ShopController.php";
$edit = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['save'])) {
        ShopController::store();
        header("Location: ./index.php");
        die;
    }

    if (isset($_POST['edit'])) {
        $shop = ShopController::show();
        $edit = true;
    }

    if (isset($_POST['update'])) {
        $shop = ShopController::update();
        header("Location: ./index.php");
        die;
    }

    if (isset($_POST['destroy'])) {
        $shop = ShopController::destroy();
        header("Location: ./index.php");
        die;
    }
}
$shops = ShopController::index();

?>

<!-- This is my header -->
<?php include "./header.php" ?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" ><img src="./urmas.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <audio id="player" autoplay controls>
        <source src="./bazaar.mp3" type="audio/mp3">
    </audio>

    <form action="" method="post">
        <div class="row">
            <div class="col-md-1">
                <input class="form-control" type="hidden" name="id" value="<?= $edit ? $shop->id : "" ?>">
            </div>
            <div class="col-md-2">
                <input class="form-control" type="text" name="name" value="<?= $edit ? $shop->name : "" ?>" placeholder="Name of the shop">
            </div>
            <div class="col-md-3">
                <input class="form-control" type="text" name="sales_field" value="<?= $edit ? $shop->sales_field : "" ?>" placeholder="What are they selling?">
            </div>
            <div class="col-md-2">

                <label>Accepts cards?</label>
                <label>Yes
                    <input type="radio" name="accepts_cards" value="<?= $edit ? $shop->accepts_cards : "" ?>" />
                </label>
                <label>No
                    <input type="radio" name="accepts_cards" value="<?= $edit ? $shop->accepts_cards : "" ?>" />
                </label>

            </div>
            <div class="col-md-1">
                <input class="form-control" type="text" name="items_quantity" value="<?= $edit ? $shop->items_quantity : "" ?>" placeholder="QTY">
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
</nav>

<div class="container">
    </form>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Sales field</th>
            <th>Accepts cards</th>
            <th>QTY of items</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($shops as $shop) { ?>

            <tr>
                <?php foreach ($shop as $attribute) { ?>
                    <td> <?= $attribute ?> </td>
                <?php } ?>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $shop->id ?>">
                        <button type="submit" name="edit" class="btn btn-outline-secondary">EDIT</button>
                    </form>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $shop->id ?>">
                        <button type="submit" name="destroy" class="btn btn-outline-danger">DELETE</button>
                    </form>
                </td>
            </tr>

        <?php } ?>

    </table>
</div>

</body>

</html>