<?php
require('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Addresses</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
        
            
<ul>
  <li><a target="_self" href="index.php">Home</a></li>
  <li><a target="_self" href="city.php">Add address</a></li>
  <li><a target="_self" href="view.php">View Address</a></li>
  <li><a target="_self" href="view.php">Edit Address</a></li>
  <li><a  target="_self" href="view.php">Delete Address</a></li>
  <li style="float:right"><a  target="_self" class="active" href="xml.php"> View xml Address</a></li>
  <li style="float:right"><a target="_self" class="active" href="json.php"> View json Address</a></li>
</ul>
        
    </div>
    <div class="open" id="open">

    </div>
    <div>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse; color:white;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>First Name</strong></th><th><strong>last Name</strong></th><th><strong>Email</strong></th><th><strong>street</strong></th><th><strong>Zip Code</strong></th><th><strong>City</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from addresses ORDER BY id desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
    <tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["firstname"]; ?></td> <td align="center"><?php echo $row["lastname"]; ?></td><td align="center"><?php echo $row["email"]; ?></td> <td align="center"><?php echo $row["street"]; ?></td> <td align="center"><?php echo $row["zip_code"]; ?></td> <td align="center"><?php echo $row["city"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
    <?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>