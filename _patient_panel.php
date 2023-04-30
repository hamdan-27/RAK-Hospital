<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Patient Page - RAK Hospital</title>

    <!-- Favicon -->
    <link href="assets\img\figma\logo_rak_hospital_sym.jpg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    //session_start();
    require("login_process.php");
    if (!isset($_SESSION['loggedin'])) {
        //echo "logged out";
        header('Location: patient_login.php');
        exit();
    }

    require('connection.php');
    $var1 = '';
    $var1 = $_SESSION['name'];
    if (isset($_POST['subreport'])) {
        $patient_no = $_POST['patient_no'];
        $diag = $_POST['diagnosis'];
        $psyc = $_POST['psyc_status'];
        $chronic = $_POST['chronic_disease'];
        $drugs = $_POST['medications'];
        $advice = $_POST['advice'];
        $todayDate = date("Y-m-d H:i:s");

        $sql = "INSERT INTO report VALUES(null, '$patient_no', '$var1', '$diag', '$psyc', '$chronic', '$drugs', '$advice', '$todayDate')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('New Record Registered Succesfully')</script>";
            echo "<script>window.open('doctor_panel.php','_self')</script>";
        } else {
            echo "<script>alert('Sorry an error occurs')</script>";
            //echo "<script>window.open('adminpanel.php','_self')</script>";
            //header("Location:adminpanel.php");
        }
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="assets\images\rak_logo.png" width="100px" alt="" align="left"></a>
            </div>

            <div class="col-md-5">
                <?php
                //session_start();
                //require('doctorvalidate.php'); 
                $var1 = '';
                $var1 = $_SESSION['name'];
                ?>

                <marquee>
                    <h1 align="right">Welcome <?php echo $var1 ?> </h1>
                </marquee>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <class="list-group-item active" style="background-color: #FF00FF; color: white; border-color: #06F2F8;">
                        <h3 align="center">Preferences</h3>
                        <a href="drugsearch.php" class="list-group-item">Search Drug</a>
                        <a href="patient_appoint.php" class="list-group-item">Make Appointments</a>
                </div>
                <hr>
                <div class="list-group">
                    <class="list-group-item active" style="background-color: #FF00FF; color: white; border-color: #06F2F8;">
                        <h3 align="center">Profile</h3>
                        <a href="doctor_appoint.php" class="list-group-item">My Appointments</a>
                        <a href="patient_order.php" class="list-group-item">My Drug Orders</a>
                        <a href="patient_report.php" class="list-group-item">My Report</a>
                        <a href="doctorupdate.php" class="list-group-item">Update My Profile</a>
                        <a href="logout.php" class="list-group-item action">Log Out</a>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body" style="background-color: #FF00FF; color: white; text-align: center;" ;>
                        <h5>Patient Consultation </h5>
                    </div>

                    <div class="card-body">
                        <form class="form-group" method="POST" enctype="multipart/form-data">

                            <label>Patient No</label>
                            <input type="text" name="pat_num" class="form-control" required>
                            <br>

                            <label>Diagnosis</label>
                            <input type="text" name="diagnosis" class="form-control" required><br>

                            <label>Psychological Status</label>
                            <input type="text" name="psychological" class="form-control" required>
                            <br>

                            <label>Chronic Disease Note</label>
                            <input type="text" name="chronic" class="form-control" required><br>

                            <label>Prescribed Medications</label>
                            <input type="text" name="drugs" class="form-control" required>
                            <br>

                            <label>Medical Advice</label>
                            <input type="text" name="advice" class="form-control" required><br>
                            <center><input type="submit" name="subreport" value="Submit Report" class="btn btn-secondary"></center>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $('#time').combodate({
                firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
                minuteStep: 1
            });
        });
    </script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>

            <script type="text/javascript">
                $(document).ready(function(){
                            Swal.fire({
                            title: 'Welcome Admin',
                            text: 'Enjoy your operations',
                            imageUrl: 'images/logo.jpg',
                            imageWidth: 200,
                            imageHeight: 100,
                            imageAlt: 'Custom image',
                            animation: false
                            })
                });
            </script> > -->
</body>

</html>
<!DOCTYPE html>