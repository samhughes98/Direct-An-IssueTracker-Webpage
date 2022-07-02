<!DOCTYPE html>
<html>
<head>
    <title>Bug Tracker - Register</title> 
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../static/styles/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <body>
        <div class="container-fluid">
            <div class="row">
              <div id="nav__div">
                <div class="col-1">
                    <a href="../index.html">
                        <img id="bug__logo" src="../static/images/bug_icon.png">
                      </a>
                </div>
                <div class="col-7">
                  <span><p> Issue Tracking - Developed By Samuel Hughes </p></span>
                </div>
                <div class="col-4" style="text-align:right">
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
                          <a href="submit_issue.php">Submit Issue</a>
                        </h1>
                    </div>
                    <div id="dash_Box">
                      <p style="text-align:center"></p>
                      <div id="form_div">
                      <form id="post_form">
                        <label for="poster">Name:</label>
                        <input name="poster" type="name">

                        <label for="Title">Issue Title:</label>
                        <input name="Title" type="name">

                        <label for="priority">Priority:</label>
                        <input list="priority" name="priority" id="dropdown">
                        <datalist id="priority">
                            <option value="Low">
                            <option value="Medium">
                            <option value="High">
                            <option value="Urgent">
                        </datalist>

                        <label for="Description" >Description:</label>
                        <textarea name="Description" type="textarea" id="description_area">
                        </textarea>

                        <button id="issueBtn" class="btn btn-dark">Submit Issue</button>
                        
                      </form>
</div>
                    </div>
                </div>
                <div class="col-1"></div>
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
</head>
</html>