<?php
require('connection.php');
require('view_scripts.php');
require("login_process.php");

if (!isset($_SESSION['loggedin'])) {
    //echo "logged out";
    header('Location: admin_login.php');
    exit();
}

if (isset($_POST['admin-appoint-submit'])) {

    $var1 = $_POST['patient'];
    $speciality = $_POST['speciality'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $symptoms = $_POST['symptoms'];
    $todayDate = date("Y-m-d");

    $tt = "SELECT * FROM `appointments`  WHERE doctor_name = '$doctor'  AND appointment_date = '$date' and appointment_time = '$time'";

    $result1 = mysqli_query($conn, $tt);
    if (mysqli_num_rows($result1) > 0) {
        echo "<script>alert('Sorry, the doctor isn't free at this time, please reappoint.')</script>";
        echo "<script>window.open('admin_make_appoint.php','_self')</script>";
    } else {
        $sql = "INSERT INTO `appointments` (`id`, `patient_name`, `doctor_speciality`, `doctor_name`, `appointment_date`, `appointment_time`, `symptoms`, `date_registered`) 
        VALUES (NULL, '$var1', '$speciality', '$doctor', '$date', '$time', '$symptoms', '$todayDate')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('New Appointment Registered Succesfully')</script>";
            echo "<script>window.open('admin_panel.php','_self')</script>";
        } else {
            echo "<script>alert('Sorry an error occurred')</script>";
            //echo "<script>window.open('adminpanel.php','_self')</script>";
            //header("Location:adminpanel.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Make Appointment - RAK Hospital</title>

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

<body style="background:url('assets/img/hero-bg.jpg'); background-size: auto; opacity: 1;">

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="mailto:admin@rakhospital.com">admin@rakhospital.com</a>
                <i class="bi bi-phone"></i> +971 50 414 2166
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">RAK Hospital</a></h1>
            <!-- image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets\img\figma\logo_rak_sideway.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="index.html#departments">Departments</a></li>
                    <li><a class="nav-link scrollto" href="index.html#doctors">Doctors</a></li>
                    <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="patient_login.php">Patient login</a></li>
                            <li><a href="doctor_login.php">Doctor login</a></li>
                            <li><a href="pharma_login.php">Pharmacist login</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Sign up</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="patient_register.php">Patient Sign up</a></li>
                            <li><a href="doctor_register.php">Doctor Sign up</a></li>
                            <li><a href="pharma_register.php">Pharmacist Sign up</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="contact.html">Contact us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="#" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
                Appointment</a>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Appointment</h2>
                    <ol>
                        <li><a href="admin_panel.php">Home</a></li>
                        <li>Appointment</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="inner-page">
            <div class="container" style="width: 400px; margin-top:30px" ;>
                <div class="card">
                    <img src="assets\img\figma\appoint.png" class="mx-auto" style="padding: 10px;" height="100px" width="100">
                    <div class="card-body">

                        <form action='' class="form-group" method="POST">
                            <label>Patient</label>
                            <select name="patient" class="form-control">
                                <option>Select Patient</option>
                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "medical_appointment";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM patient";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_num_rows($result);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['patient_name'] . "'>" . $row['patient_name'] . "</option>";
                                }
                                ?>
                            </select>
                            <br>

                            <label>Doctor Name</label>
                            <select name="doctor" class="form-control">
                                <option>Select Doctor</option>
                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "medical_appointment";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * From doctor";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_num_rows($result);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                                }
                                ?>
                            </select>
                            <br>

                            <label>Doctor Speciality</label>
                            <select name="speciality" class="form-control">
                                <option>Select Department</option>
                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "medical_appointment";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT Distinct(speciality) From doctor";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_num_rows($result);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['speciality'] . "'>" . $row['speciality'] . "</option>";
                                }
                                ?>
                            </select>
                            <br>

                            <label>Appointment Date</label>
                            <input type="date" name="date" class="form-control" placeholder="Select Date" required="">
                            <br>

                            <label>Appointment Time</label>
                            <input type="time" name="time" class="form-control" placeholder="Select time" required="">
                            <br>

                            <label>Symptoms</label>
                            <input type="text" name="symptoms" class="form-control" placeholder="Specify how you feel" required=""><BR>
                            <br>

                            <center>
                                <input type="submit" name="admin-appoint-submit" class="btn btn-primary" value="Submit Appointment">
                            </center>

                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>RAK Hospital</h3>
                        <p>
                            Al Qusaidat <br>
                            Ras Al Khaimah, P O Box: 11393<br>
                            United Arab Emirates
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <p>
                            <br><br><br>
                            <strong>Phone:</strong> +971 50 414 2166<br>
                            <strong>Email:</strong> admin@rakhospital.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; 2023 Copyright <strong><span>Medical Appointment System</span></strong>. All Rights Reserved
                </div>

            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>