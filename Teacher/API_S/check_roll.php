<?php
include_once("../../db_config.php");
$class = $_GET['class'];
$roll = $_GET['roll'];

$sql = "SELECT 'RollNo' FROM `$class` WHERE `RollNo` = '$roll'";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) > 0) {
  echo json_encode(array("exists" => true));
} else {
  echo json_encode(array("exists" => false));
}

mysqli_close($con);

?>
