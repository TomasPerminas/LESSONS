<?php
session_start();

if (!isset($_SESSION['person'])) {
    $_SESSION['person'] = [];
}

$_SESSION['person'][] =
    [
        'name' => $_GET['firstName'],
        'surname' => $_GET['lastName']
    ];

?>

<!-- This is my header -->
<?php include './header.php' ?>;

<form action="" method="get">
    Name <input type="text" name="firstName"><br>
    Surname <input type="text" name="lastName"><br>

    <button type="submit">Send</button>
</form>

<table class="table">
    <tr>
        <th>Name</th>
        <th>Surname</th>
    </tr>

    <?php
    foreach ($_SESSION['person'] as $human) {
        echo "<tr>";
        foreach ($human as $entry) {
            echo "<td>" . $entry . "</td>";
        }
        echo "</tr>";
    }

    ?>
</table>

</body>

</html>