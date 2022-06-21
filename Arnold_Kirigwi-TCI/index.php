<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LODUOR</title>
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
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: white;
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
  <li style="float:right"><a  target="_self" class="active" href="xml.ph"> View xml Address</a></li>
  <li style="float:right"><a target="_self" class="active" href="json.php"> View json Address</a></li>
</ul>
        </div>
    </div>
    <div class="open" id="open">

    </div>

    <div>
   <a  style="background-color:white; color:black;"href="city.php"> <button>Add an Address</button></a>
</form>
    </div>
</body>
</html>