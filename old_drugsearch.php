<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--making page response-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Drug Search</title>
</head>

<body style="background:url('images/rak.jpg'); background-size:cover; opacity: 2 ; ">
    <div class="container" style="width: 400px; margin-top:30px" ;>
        <div class="card">
            <img src="images/pm3.jpg" class="card-img-top" height="200px">
            <div class="card-body">
                <center>
                    <h3> RAK Pharmacy Drug Search</h3>
                </center><br>
                <form class="form-group" action="drugsearchprocess.php" method="post">
                    <label>Drug Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter drug name" required=""><br>

                    <center>
                        <input type="submit" name="searchdrug" class="btn btn-primary" value="Search">
                    </center>

                </form>
            </div>
        </div>
    </div>
    <footer id="footer" class="midnight-blue">
        <div class="container" style="width: 500px; margin-top: 150px  ">
            <div class="row">
                <div class="col-sm-12">
                    <center> Medical Appointment System. &copy; <?= date('Y'); ?> .All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>