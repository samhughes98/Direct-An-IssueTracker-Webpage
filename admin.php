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

  if ($_SESSION['timeout'] + 10 * 60 < time()) {
    echo
    "<script type='javascript'>
          alert('Login session timed out!');    
        </script>";
  }

  if (defined('RESTRICTED')) {
    if (!isset($_SESSION['Admin_ID'])) {
      echo "<h1>You are not logged in</h1>";
      exit();
    }
  } else {
    if (isset($_SESSION['Admin_ID'])) {
      exit();
    }
  }

  ?>
  <div class="container-fluid">
    <div class="row">
      <div id="nav__div">
        <div class="col-1">
          <a href="index.php">
            <img id="bug__logo" src="./static/images/bug_icon.png">
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
              <a href="documentation.html">Documentation</a>
            </li>
            <li>
              <a href="help_page.html">Help</a>
            </li>
            <li>
              <a href="contact_page.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-10" id="dash_title">
          <div style="text-align:center;margin-top:5vh;">
            <h1 id="title_text">
              <a href="dashboard.php" style="margin-left:5vw;">Admin Dashboard</a>
              <a href="PHP/submit_issue.php" style="display:inline;float:right;"><button class="btn btn-dark">Submit New Issue</button></a>
            </h1>



          </div>
          <div id="dash_Box">
            <p style="text-align:center"></p>

            <?php
            $con = mysqli_connect("localhost", "root", "", "issuesdb");
            // Check connection
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($con, "SELECT * FROM issue_records");

            echo "<table id='dash_table'>
                      <tr style='height:5vh; width:10vw;';>
                      <th id='priority'>PRIORITY</th>
                      <th id='issue_num'>No.</th>
                      <th id='poster'>POSTER</th>
                      <th>TITLE</th>
                      <th id='issue_desc_title'>ISSUE DESC</th>
                      </tr>";

            while ($row = mysqli_fetch_array($result)) {
              echo "<tr style='vertical-align:top; border-bottom: 1px solid black;'>";
              echo "<td style='text-align:center;'>" . $row['Priority'] . "</td>";
              echo "<td style='text-align:center'>" . $row['ID'] . "</td>";
              echo "<td style='padding-left:1vw;'>" . $row['poster'] . "</td>";
              echo "<td style='padding-left:1vw;'>" . $row['Title'] . "</td>";
              echo "<td style='padding-left:1vw; max-width:40vw;  overflow-wrap: break-word;'>" . $row['issue_desc'] . "</td>";
              echo "</tr>";
            }
            echo "</table>";

            mysqli_close($con);
            ?>
          </div>
        </div>
        <div class="col-1">
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="static/scripts/form_verification.js">
    </script>
</body>

</html>