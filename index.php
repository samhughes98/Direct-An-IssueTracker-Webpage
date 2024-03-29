<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bug Tracker</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="static/styles/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
</head>

<body>
  <?php
  define('RESTRICTED', true);
  include('PHP/login.php');
  session_start();

  if (isset($_SESSION['Login_ID']) || isset($_SESSION['Admin_Login'])) {
    session_destroy();
  }
  ?>
  <div class="container-fluid">
    <div class="row">
      <div id="nav__div">
        <div class="col-1">
          <a href="index.php">
            <img id="bug__logo" src="static/images/bug_icon.png" />
          </a>
        </div>
        <div class="col-7">
          <span>
            <p> Issue Tracking - Developed By Samuel Hughes </p>
          </span>
        </div>
        <div class="col-4" style="text-align:right">
          <ul>
            <li>
              <a href="documentation.html">Documentation</a>
            </li>
            <li>
              <a href="help.html">Help</a>
            </li>
            <li>
              <a href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 justify-content-center">
        <span id="title__text">
          <h1 id="title__h1"><em style="font-weight: bold; font-size: 2em;">Direct</em> <br><br><br>a website for issue tracking</h1>
        </span>
        <form method="post" action="PHP/login.php">
          <div id="login__form">
            <div id="homepageForm">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control inputfield" aria-describedby="emailHelp" id="email_form" name="email_login" />
              </div>
              <br />
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control inputfield" id="password_form" name="password_login" />
              </div>
              <br />

              <button name="Submit_Login" type="submit" class="btn btn-dark" onClick="form_verification()" id="regBtn">
                Log In
              </button>
        </form>

        <a href="register.html">
          <button type="button" class="btn btn-dark" style="float:right;">
            Register
          </button>
        </a>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="static/scripts/form_verification.js">
  </script>
</body>

</html>