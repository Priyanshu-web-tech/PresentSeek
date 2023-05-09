<?php
include_once("../../db_config.php");
$query = "SELECT DISTINCT branch FROM classes";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['branch'] . "'>" . $row['branch'] . "</option>";
}

?>
