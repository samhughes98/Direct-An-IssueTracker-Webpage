<!DOCTYPE html>
<html>

<head>
  <title>Bug Tracker - Register</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../static/styles/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../static/scripts/sortable.js"></script>
  <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
  <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
  <?php
  define('RESTRICTED', true);
  include('login.php');
  session_start();

  if ($_SESSION['timeout'] + 10 * 60 < time()) {
    echo
    "<script type='javascript'>
          alert('Login session timed out!');    
        </script>";
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
  }

  ?>
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
              <a href="dashboard.php" style="margin-left:5vw;">Dashboard</a>
              <a href="submit_issue.php" style="display:inline;float:right;"><button class="btn btn-dark">Submit New Issue</button></a>
            </h1>



          </div>
          <div id="dash_Box">


            <?php
            $con = mysqli_connect("localhost", "root", "", "issuesdb");
            // Check connection
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($con, "SELECT * FROM issue_records");

            echo "<table id='dash_table' class='sortable'>
                      <tr style='height:5vh; width:10vw;';>
                      <th id='priority'>PRIORITY</th>
                      <th id='issue_num'>No.</th>
                      <th id='poster'>POSTER</th>
                      <th>TITLE</th>
                      <th id='issue_desc_title' class='sorttable_nosort'>ISSUE DESC</th>
                      <th class='sorttable_nosort'>Progress</th>
                      </tr>";

            echo "<form method='post'>";
            while ($row = mysqli_fetch_array($result)) {
              echo "<tr style='vertical-align:top; border-bottom: 1px solid black;'>";
              if ($row['Priority'] == 'Low') {
                echo "<td style='color: blue !important;text-align:center; padding-top: 1.5vh; padding-bottom:1vh'>" . $row['Priority'] . "</td>";
              }
              if ($row['Priority'] == 'Medium') {
                echo "<td style='color: yellow !important;text-align:center; padding-top: 1.5vh; padding-bottom:1vh'>" . $row['Priority'] . "</td>";
              }
              if ($row['Priority'] == 'High') {
                echo "<td style='color: orange !important;text-align:center; padding-top: 1.5vh; padding-bottom:1vh'>" . $row['Priority'] . "</td>";
              }
              if ($row['Priority'] == 'Urgent') {
                echo "<td style='color: red !important;text-align:center; padding-top: 1.5vh; padding-bottom:1vh'>" . $row['Priority'] . "</td>";
              }
              echo "<td style='text-align:center; padding-top: 1.5vh; padding-bottom:1vh'>" . $row['ID'] . "</td>";
              echo "<td style='text-align:center; padding-top: 1.5vh; padding-bottom:1vh'>" . $row['poster'] . "</td>";
              echo "<td style='text-align:center; padding-top: 1.5vh; padding-bottom:1vh'>" . $row['Title'] . "</td>";
              echo "<td style='padding-left:1.5vw; padding-top: 1.5vh; padding-bottom:1vh; max-width:40vw;  overflow-wrap: break-word;'>" . $row['issue_desc'] . "</td>";
              echo "<td style='padding-top: 1vh; padding-bottom:1vh; margin-right:4vw;max-width:0.5vw;'><button class='btn btn-dark' data-toggle='tooltip' data-placement='top' title='Mark as resolved'  style='width:2vw; margin-left:5.8vw;'><i class='fa-solid fa-circle-check'></i></button><button type='submit' class='btn btn-dark' data-toggle='tooltip' data-placement='top' title='Mark as to be deleted'  style='margin-left:0.5vw;' type='submit' name='Delete' value=" . $row['ID'] . "><i class='fa-solid fa-trash'></i></button>" . "</td>";
              echo "</tr>";
            }

            echo "</table>";
            echo "</form>";

            if (isset($_POST['Delete'])) {
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "userdetails";

              $Id_test1 = $_POST['Delete'];

              $conn = new mysqli($servername, $username, $password, $dbname);
              if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
              }

              $sql = "INSERT INTO `todo`(`ID`, `Comment`) VALUES  ('$Id_test1', 'IIII')";
              if ($conn->query($sql) === TRUE) {
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }

              $conn->close();
            }
            ?>
          </div>
        </div>
        <div class="col-1">
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../static/scripts/form_verification.js"> </script>
    <script src="../static/scripts/Issue_page.js"> </script>

    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
      });
    </script>


</body>
</head>

</html>