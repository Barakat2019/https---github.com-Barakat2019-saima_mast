<?php 
$username = "root";
$password = "";
$dbname = "id15215106_android";
$hostname = "localhost";

$con = mysqli_connect($hostname,$username,$password,$dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>

