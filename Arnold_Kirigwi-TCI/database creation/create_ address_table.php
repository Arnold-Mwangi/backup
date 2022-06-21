<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "address_book";

// initiate connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// establish connection
if (!$conn) {
  die("Connection not estbalished: " . mysqli_connect_error());
}
// creating table
$sql = "CREATE TABLE Addresses (
id INT(6) NOT NULL AUTO_INCREMENT,
firstname VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
lastname VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
email VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL ,
street VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
zip_code VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
city VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP (),
PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

if (mysqli_query($conn, $sql)) {
  echo "Table Addresses created";
} else {
  echo " table address not created: " . mysqli_error($conn);
}

mysqli_close($conn);
?>