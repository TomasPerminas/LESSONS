<?php
    session_start();

    if (!isset($_SESSION['whiskey'])) {
        $_SESSION['whiskey'] = [];
        }

    if (isset($_GET['whiskeyBrand'])) {
        $_SESSION['whiskey'][] =
        [
          'type' => $_GET['whiskeyType'],
          'brand' => $_GET['whiskeyBrand'],
          'location' => $_GET['whiskeyLocation'],
          'price' => $_GET['whiskeyPrice'],
        ];
        header('Location: ./index.php');
    die;
    }
    
?>

<!-- This is my header -->
<?php include './header.php' ?>;

<form action="" method="get">
    Type <input type="text" name="whiskeyType"><br>
    Brand <input type="text" name="whiskeyBrand"><br>
    Location <input type="text" name="whiskeyLocation"><br>
    Price <input type="text" name="whiskeyPrice"><br>

    <button type="submit">Send</button>
</form>

<table class="table">
    <tr>
        <th>Type</th>
        <th>Brand</th>
        <th>Location</th>
        <th>Price EUR</th>
    </tr>

    <?php
    foreach ($_SESSION['whiskey'] as $alcohol) {
        echo "<tr>";
        foreach ($alcohol as $entry) {
            echo "<td>" . $entry . "</td>";
        }
        echo "</tr>";
    }

    ?>
</table>

</body>

</html>