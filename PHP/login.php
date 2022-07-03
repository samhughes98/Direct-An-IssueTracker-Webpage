<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdetails";

$Fname = [];

$conn = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) { printf("Connect failed: %s\n", mysqli_connect_error());  exit(); }

if(isset($_POST['Submit_Login'])){
$Email_login = $_POST['email_login'];
$password_login = $_POST['password_login'];

    $sql = "SELECT * FROM `reg_details` WHERE Email = '$Email_login' AND Passwd = '$password_login' ";
    $sql2 = "SELECT Fname FROM `reg_Details` WHERE Email = '$Email_login'";
    $res2 = mysqli_query($conn, $sql2);
    array_push($Fname, $res2);

    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
      echo("Well done sam");
      header("location: dashboard.php");
      exit();
    } else {
      echo "<script language='javascript'>";
      echo 'alert("User Does not Exist");';
      echo 'window.location.replace("../index.html");';
      echo "</script>";
      

    }
}
?>