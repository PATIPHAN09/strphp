<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newchula";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>



 <?php
/* 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newchula";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
-->
*/
?> 