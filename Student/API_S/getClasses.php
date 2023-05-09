<?php
include_once("../../db_config.php");
    
$query = "SELECT class_name FROM classes";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)) {
    echo "<option value='".$row['class_name']."'>".$row['class_name']."</option>";
}
?>
