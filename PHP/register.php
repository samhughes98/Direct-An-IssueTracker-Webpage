<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdetails";

$conn = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) { printf("Connect failed: %s\n", mysqli_connect_error());  exit(); }

if(isset($_POST['Submit'])){
$Fname = $_POST['name'];
$Email = $_POST['email'];
$passwd = $_POST['passwd'];
$ID_rand = rand(1000,9999);


  $sql = "INSERT INTO `reg_details`(`ID`, `Fname`, `Email`, `Passwd`) VALUES ('$ID_rand', '$Fname','$Email','$passwd')";
  if ($conn->query($sql) === TRUE) {    } else {echo "Error: " . $sql . "<br>" . $conn->error;}

  $conn->close();
}

header("location: ../index.php");
?>