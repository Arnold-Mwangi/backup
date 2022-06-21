<?php
session_start();
// init var
$firstname ="";
$lastname ="";
$email = "";
$street="";
$zip_code= "";
$city="";
$emailError="";


include_once 'config.php';
if(isset($_POST['submit']))
{	 //receive inputs and validate
     $firstname =mysqli_real_escape_string($conn, $_POST['firstname']);
     
     $lastname =mysqli_real_escape_string($conn, $_POST['lastname']) ;
     
     $email = mysqli_real_escape_string($conn, $_POST['email']) ;
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
     $street = mysqli_real_escape_string($conn, $_POST['street']) ;
     
     $zip_code = mysqli_real_escape_string($conn, $_POST['zip_code']) ;
     
	 $city = mysqli_real_escape_string($conn, $_POST['city']) ;

    // check if email and zip code exixts
         
$validate="select * from addresses where (email='$email' or zip_code='$zip_code');";

$res=mysqli_query($conn,$validate);

if (mysqli_num_rows($res) > 0) {
  
  $row = mysqli_fetch_assoc($res);
  if($email==isset($row['email']))
  {
         echo("<script LANGUAGE='JavaScript'>
         window.alert('Email exists');
         window.location.href='address.php';
         </script>  ");
  }
if($zip_code==isset($row['zip_code']))
{
   echo ("<script LANGUAGE='JavaScript'>
   window.alert('Zip Code exists');
   window.location.href='address.php';
   </script>"); 
}
}
else{

     // insert details
     
        $sql = "INSERT INTO addresses (firstname, lastname, email, street, zip_code, city)
        VALUES ('$firstname', '$lastname', '$email', '$street', '$zip_code', '$city')";
        if(mysqli_query($conn, $sql)){
         
         echo  ("<script LANGUAGE='JavaScript'>
         window.alert('Succesfully Added  $firstname to Addresses');
         window.location.href='address.php';
         </script>");
     } else {
       echo "Error: " . $sql . " " . mysqli_error($conn);
     }
   }
     mysqli_close($conn);
        
       
     }


?>