<?php
require('config.php');
$id = $_REQUEST['id'];
$sql = " DELETE FROM addresses WHERE id= $id";
$result = mysqli_query($conn, $sql) or die(mysqli_error());
header("location: view.php");


?>