<!DOCTYPE html> 
<html>
    <head>
        <title>Bug Tracker - Register</title> 
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../static/styles/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous"
        />
    <body>
    <?php
      define('RESTRICTED', true);
      include('login.php');
      session_start();
      $test_name = $_SESSION['Fnames'];

      $now = time(); // Checking the time now when home page starts.

      if ($now > $_SESSION['expire']) {
        session_destroy();
        header("location: ../index.php");
      }

      if (defined('RESTRICTED')) {
        if (!isset($_SESSION['Login_ID'])) {
          header('Location: ../index.php');
          exit();
        }
      } else {
        if (isset($_SESSION['Login_ID'])) {
          header('Location: dashboard.php');
          exit();
        }
      } ?>
      <div class="container-fluid">
        <div class="row">
        <div id="nav__div">
        <div class="col-1">
          <a href="../index.php">
            <img id="bug__logo" src="../static/images/bug_icon.png">
          </a>
        </div>
        <div class="col-6">
          <span>
            <p> Issue Tracking - Developed By Samuel Hughes </p>
          </span>
        </div>
        <div class="col-5" style="text-align:right">
          <ul>
            <li>
              <a href="../documentation.html">Documentation</a>
            </li>
            <li>
              <a href="../help_page.html">Help</a>
            </li>
            <li>
              <a href="../contact_page.html">Contact</a>
            </li>
            <li>
  
            </li>
          </ul>
        </div>
      </div>
      <div class="col-2"></div>
      <div class="col-8">
        <div id="dash_Box">      
          <h1 style="float:left; margin-left:7vw; margin-top:5vh; width:100%">Your account</h1> <form method="post"><button id="logoutBtn" class="btn btn-dark" type="submit" name="logOut">Log Out</button><form>
          <h3 style="float:left; margin-left:7vw; margin-top:5vh; width:100%">Name: <br> </h3>
          <h3 style="float:left; margin-left:7vw; margin-top:5vh; width:100%">Email:</h3>
          <a href="#"><h4 style="float:left; margin-left:7vw; margin-top:5vh; width:100%">Change Password</h4></a>
          <a href="#"><h4 style="float:left; margin-left:7vw; margin-top:5vh; width:100%">Privacy Settings</h4></a>
        </div>
      <div class="col-2"></div>

      <?php 
        if(isset($_POST['logOut'])){
          session_destroy();
          header("location: ../index.php");
        }
      ?>
   
      </div>
      </div>

      <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"
      ></script>
      <script src="../static/scripts/form_verification.js">
      </script>
    </body>
  </html>
  