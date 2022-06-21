
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json view</title>
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
  <li><a target="_self" href="city.php">Add address</a></li>
  <li><a target="_self" href="view.php">View Address</a></li>
  <li><a target="_self" href="view.php">Edit Address</a></li>
  <li><a  target="_self" href="view.php">Delete Address</a></li>
  <li style="float:right"><a  target="_self" class="active" href="xml.php"> View xml Address</a></li>
  <li style="float:right"><a target="_self" class="active" href="json.php"> View json Address</a></li>
</ul>
        </div>
    </div>
    <div class="open" id="open">

    </div>
</body>
</html>
<?php
   require('config.php');
    //fetch table rows from mysql db
    $sql = "select * from addresses";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($conn);
?>