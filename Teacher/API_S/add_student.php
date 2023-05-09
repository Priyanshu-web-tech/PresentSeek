<?php
include_once("../../db_config.php");

if (isset($_POST['class']) && !empty($_POST['class'])) {

  $class = $_POST['class'];
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $sem = $_POST['sem'];

  $sq = "SELECT  MAX(`Total`) FROM $class;";
  $kp = mysqli_query($con, $sq);
  $ki = mysqli_fetch_array($kp);

  if (!empty($ki[0])) {
    $tot = $ki[0];
  } else {
    $tot = 0;
  }

  

  $query = "INSERT INTO `$class` (`RollNo`,`Names`,`Sem`,`Present`,`Total`) VALUES ( '$roll','$name','$sem',0,0)";

  mysqli_query($con, $query);

  $query2 = "UPDATE `$class` SET `Total`='$tot' WHERE `RollNO`='$roll';";
  mysqli_query($con, $query2);

  mysqli_close($con);
}
?>