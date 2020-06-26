<?php
//absolute path to the WordPress directory.
require_once(ABSPATH . 'wp-config.php');
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysqli_select_db($connection, DB_NAME);



$sql = "SELECT * from plugin_users";
if ($result = mysqli_query($connection, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
        echo '<table class="table table-bordered" style="width: 99%;margin-top: 32px;">';
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th scope="col">First name</th>';
        echo '<th scope="col">Last name</th>';
        echo '<th scope="col">Password</th>';
        echo '<th scope="col">Description</th>';
        echo '<th scope="col">Option</th>';
        echo "</tr>";
        echo "</thead>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['firstrname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['descriptions'] . "</td>";
            echo "<td>" . $row['Options'] . "</td>";
            echo "</tr>";
            echo "</tbody>";
            echo "</tbody>";
        }
        echo "</table>";
        echo '<a class="btn btn-primary" href="admin.php?page=PLUGIN_SUBMENU2" role="button">ADD</a>';
    }
}
