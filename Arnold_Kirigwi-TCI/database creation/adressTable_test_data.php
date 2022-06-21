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

$sql = "INSERT INTO addresses (firstname, lastname, email, street, zip_code, city)
VALUES ('Arnoh', 'Mwangi', 'kirigwmwangi18@yahoo.com', 'Thika', '324', 'Nairobi');";
$sql .= "INSERT INTO addresses (firstname, lastname, email, street, zip_code, city)
VALUES ('Julius', 'Kimani', 'julius@gmail.com', 'Kiambu', '202', 'Nyeri');";
$sql .= "INSERT INTO addresses (firstname, lastname, email, street, zip_code, city)
VALUES ('Mary', 'Njeri', 'mary@gmail.com','Uhuru', '235', 'Muranga')";


if (mysqli_multi_query($conn, $sql)) {
  echo "records inserted";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>