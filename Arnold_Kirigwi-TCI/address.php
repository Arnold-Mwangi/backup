<?php
  
   require('config.php');
      
    
    $sql = "SELECT * FROM city";
    $all_city = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Addresses</title>
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
input[type=text]{
    width:60%;
    padding:10px;
    border:1px solid black;
    resize:vertical;
    float:right;
}
label{
    padding: 12px 12px 12px 0;
    display:inline-block;
    width:20%
}
input[type=submit]{
    border: none;
    padding: 12px 20px;
    background-color: #04AA6D;
    color: white;
}

input[type=submit]:hover {
  background-color: #45a049;
  
}

.container {
  border-radius: 3px;
  background-color: #e2e2e2;
  padding: 10px;
  width:50%;
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
    <div class="container">
        <div class="form1">
            <form action="addAddress.php" method="POST">

            
            <div class="input">
                <label for="Fname"> Firstname</label>
                <input type="text" name="firstname" placeholder="Enter first name">
            </div>
            <div class="input">
                <label for="Fname"> Lastname</label>
                <input type="text" name="lastname" placeholder="Enter last name">
            </div>
            <div class="input">
                <label for="Fname"> Email</label>
                <input type="text" name="email" placeholder="Enter email">
            </div>
            <div class="input">
                <label for="Fname"> Street</label>
                <input type="text" name="street" placeholder="Enter street name">
            </div>
            <div class="input">
                <label for="Fname"> Zip_code</label>
                <input type="text" name="zip_code" placeholder="Enter zip code">
            </div>
            <div class="input">
            <label>Select a city</label>
        <select name="city">
            <?php 
               
                while ($city = mysqli_fetch_array(
                        $all_city,MYSQLI_ASSOC)):; 
            ?>
                <option name="city" value="<?php echo $city["city"];
                    
                ?>">
                    <?php echo $city["city"];
                       
                    ?>
                </option>
            <?php 
                endwhile; 
               
            ?>
        </select>
                
            </div>
            <div class="input">
  	              <button type="submit" class="btn" name="submit">Register

                  </button>
  	</div>
            </form>
        </div>
    </div>
</body>
</html>