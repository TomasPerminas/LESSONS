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