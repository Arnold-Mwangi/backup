<?php
include_once 'config.php';
if(isset($_POST['submit']))
{	 
	 $city = $_POST['city'];
	 $sql = "INSERT INTO city (city)
	 VALUES ('$city')";
	 if (mysqli_query($conn, $sql)) {
		echo  ("<script LANGUAGE='JavaScript'>
        window.alert('Succesfully Added  $city to cities');
        window.location.href='city.php';
        </script>");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>