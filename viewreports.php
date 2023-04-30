<!DOCTYPE html>
<?php include('view_scripts.php')?>
<html>

  <head>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body style="background:url('./rak.jpg.jpeg'); background-size:cover; opacity: 2 ; ">
    <div class="container" style="width: 1000px; margin-top:100px" ;>
      <div class="card">

        <img src='hospital_logo.jpg' class="card-img-top" width="50px" height="150px">

        <div class="card-body" style="background-color: #3498DB ; color: white; border-color: #06F2F8;">
          <div class="row">
            <div class="col-md-3">
              <a href="pharmacistpanel.php" class="btn btn-light">Click to go back</a>
            </div>
            <div class="col-md-6">
              <center><img src="hospital_logo.jpg " width="200PX"></center> <br>
              <center><b>
                  <h1> LIST OF PATIENT REPORTS </h1>
                </b></center>

            </div>

          </div>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">patient_no</th>
                <th scope="col">doctor_name</th>
                <th scope="col">diagnosis</th>
                <th scope="col">psyc_status</th>
                <th scope="col">chronic_disease</th>
                <th scope="col">medications</th>
                <th scope="col">advice</th>
                <th scope="col">date</th>

              </tr>
            </thead>
            <tbody>
              <?php
              view_report();
              ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>

  </html>