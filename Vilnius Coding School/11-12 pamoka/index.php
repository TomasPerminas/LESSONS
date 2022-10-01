<?php

$color = 'black';
if (isset($_GET['color'])) {
    $color = 'red';
};

?>

<body style="background-color:<?= $color ?>">

    <a href="./index.php">BLACK</a>
    <a href="./index.php?color=1">RED</a>

</body>

</html>