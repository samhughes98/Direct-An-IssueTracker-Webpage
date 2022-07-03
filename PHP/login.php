<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdetails";

$conn = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

if (isset($_POST['Submit_Login'])) {
  $Email_login = $_POST['email_login'];
  $password_login = $_POST['password_login'];

  $adminuser = "SELECT * FROM `adminlogin` WHERE username = '$Email_login' AND password = '$password_login'";
  $adminsqlEmail = mysqli_query($conn, $adminuser);


  $sql = "SELECT * FROM `reg_details` WHERE Email = '$Email_login' AND Passwd = '$password_login' ";
  $sql2 = "SELECT Fname FROM `reg_Details` WHERE Email = '$Email_login'";

  $sessions_login = "SELECT ID FROM `reg_Details` WHERE Email = '$Email_login'";
  $sessions_login_admin = "SELECT ID FROM `adminlogin` WHERE username = '$Email_login'";

  $res2 = mysqli_query($conn, $sql2);
  $res3 = mysqli_query($conn, $sessions_login);

  $resAdmin = mysqli_query($conn, $adminuser);
  $adminrows = mysqli_num_rows($resAdmin);

  $result = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($result);



  if ($rows == 1) {
    session_start();
    $_SESSION['Login_ID'] = $sessions_login;
    $_SESSION['email_login'] = $Email_login;

    $q = "SELECT Fname FROM `reg_Details` WHERE Email = '$Email_login'";
    $result1 = $conn->query($q);
    $row = $result1->fetch_assoc();
    $p[] = $row["Fname"];

    $_SESSION['Fnames'] = implode(" ", $p);

    $_SESSION['timeout'] = time();
    $_SESSION['expire'] = $_SESSION['timeout'] + (10 * 60);
    echo ("Well done sam");
    header("location: dashboard.php");
    exit();
  } elseif ($adminrows == 1) {
    session_start();
    $_SESSION['Admin_ID'] = $sessions_login_admin;
    $_SESSION['timeout'] = time();
    header("location: ../admin.php");
    exit();
  } else {
    echo "<script language='javascript'>";
    echo 'alert("User Does not Exist");';
    echo 'window.location.replace("../index.php");';
    echo "</script>";
  }
}
