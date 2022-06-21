<?php
require('config.php');
$id = $_REQUEST['id'];
$sql="SELECT * FROM addresses WHERE id='".$id."'"; 
$result=mysqli_query($conn, $sql) OR die(mysqli_error());
$row=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: black;
}
</style>
</head>
<body>
<div>
        <div class="header">
            
<ul>
  <li><a target="_self" href="index.php">Home</a></li>
  <li><a target="_self" href="address.php">Add address</a></li>
  <li><a target="_self" href="city.php">Add city</a></li>
  <li><a target="_self" href="view.php">View Address</a></li>
  <li><a target="_self" href="view.php">Edit Address</a></li>
  <li><a  target="_self" href="view.php">Delete Address</a></li>
  <li style="float:right"><a  target="_self" class="active" href="xml.php"> View xml Address</a></li>
  <li style="float:right"><a target="_self" class="active" href="json.php"> View json Address</a></li>
</ul>
        </div>
    <h1>Address Record</h1>
    <?php
    $msg="";
    if(isset($_POST['new']) && $_POST['new'] == 1)
    {
        $id=$_REQUEST['id'];
        $firstname=$_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $email=$_REQUEST['email'];
        $street=$_REQUEST['street'];
        $zip_code=$_REQUEST['zip_code'];
        $city=$_REQUEST['city'];
        $edit=" update addresses set firstname='".$firstname."', lastname='".$lastname."', email='".$email."', street='".$street."', zip_code='".$zip_code."', city='".$city."' where id='".$id."'";
        
        mysqli_query($conn, $edit) OR die(mysqli_error());
        $msg=" $firstname Record Edited. <br/><br/><a href='view.php'> View updates</a>";
        echo'<h3 style="color:#112233;">' .$msg. '</h3>';


       
        
    }else{
        ?>
        <div>
            <form name="form"action="" method="POST">
            <input type="hidden" name= "editing" value="1">
            <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
            <p><input type="text" name="firstname" placeholder="Enter First Name" required value="<?php echo $row['firstname']; ?>"></p>
            <p><input type="text" name="lastname" placeholder="Enter First Name" required value="<?php echo $row['lastname']; ?>"></p>
            <p><input type="text" name="email" placeholder="Enter First Name" required value="<?php echo $row['email']; ?>"></p>
            <p><input type="text" name="street" placeholder="Enter First Name" required value="<?php echo $row['street']; ?>"></p>
            <p><input type="text" name="zip_code" placeholder="Enter First Name" required value="<?php echo $row['zip_code']; ?>"></p>
            <p><input type="text" name="city" placeholder="Enter First Name" required value="<?php echo $row['city']; ?>"></p>
            <p><input name="submit" type="submit" value="Update" /></p>
            </form>
            <?php } ?>
            <br /><br /><br /><br />
        </div>
    
   

   
</body>
</html>