<?php
$servername="localhost";
$username="root";
$password="";
//establishing connection
$conn = mysqli_connect($servername, $username, $password);
///check connection
if(!$conn){
    die("connection not establshed: " .mysqli_connect_error());

}

///create database
$sql = "CREATE DATABASE Address_book" ;
if(mysqli_query($conn, $sql)){
    echo"Db Address_book created";
}else{
    echo"Error creating Address_book db: " .mysqli_error($conn);

}

mysqli_close($conn);

?>