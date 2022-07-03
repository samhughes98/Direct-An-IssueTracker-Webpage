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

if (isset($_POST['requestDelete'])){
$Id_delete = $_POST($row['ID']);

$sql = "INSERT INTO `todo`(`ID`) VALUES ('$ID_delete')";
if ($conn->query($sql) === TRUE) {    } else {echo "Error: " . $sql . "<br>" . $conn->error;}

}
$conn->close();
?>