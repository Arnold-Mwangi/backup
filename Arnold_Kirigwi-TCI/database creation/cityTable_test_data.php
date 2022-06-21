<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "address_book";

// initiate connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// checking  connection
if (!$conn) {
  die("Connection not established: " . mysqli_connect_error());
}

$sql = "INSERT INTO city (city)
VALUES ('Machakos');";
$sql .= "INSERT INTO addresses (city)
VALUES ('Kisumu');";
$sql .= "INSERT INTO addresses (city)
VALUES ('Mombasa')";


if (mysqli_multi_query($conn, $sql)) {
  echo "records inserted";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>