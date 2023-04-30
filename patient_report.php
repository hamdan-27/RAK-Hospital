<!DOCTYPE html>
<?php include('view_scripts.php') ?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    require("login_process.php");
    if (!isset($_SESSION['loggedin'])) {
        //echo "logged out";
        header('Location: patient_login.php');
        exit();
    } ?>
    <div class="container" style="width: 1000px; margin-top:100px" ;>
        <div class="card">


            <div class="card-body" style="background-color: #3498DB ; color: white; border-color: #06F2F8;">
                <div class="row">
                    <div class="col-md-3">
                        <a href="pharmacistpanel.php" class="btn btn-light">Click to go back</a>
                    </div>
                    <div class="col-md-6">
                        <center><img src="assets/img/report.png" width="50px"></center> <br>
                        <center><b>
                                <h1>Your Report</h1>
                            </b></center>

                    </div>

                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Diagnosis</th>
                            <th scope="col">Psyc Status</th>
                            <th scope="col">Chronic Disease</th>
                            <th scope="col">Medications</th>
                            <th scope="col">Advice</th>
                            <th scope="col">Date</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        view_myreport();
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