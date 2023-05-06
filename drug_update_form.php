<?php
require('connection.php');
require('login_process.php');
// require('drug_pharma_update.php');
$var1 = '';
$var1 = $_SESSION['id'];

// if (isset($_POST['update-drug'])) {
//     $drugname = $row['name'];
//     $barcode = $row['barcode'];
//     $insured = $row['insured'];
//     $status = $row['status'];
//     $price = $row['price'];
//     $qty = $row['quantity'];
//     $reg_by = $row['registered_by'];
//     $date = $row['date'];
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Drug Details - RAK Hospital</title>

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
              <li><a href="admin_login.php">Admin login</a></li>
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

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
        Appointment</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Update Drug</h2>
          <ol>
            <li><a href="doctor_panel.php">Home</a></li>
            <li>Update Drug</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body" style="background-color: #bb00ff; color: white; text-align: center;">
                <h5>Update</h5>
              </div>
              <div class="card-body">
                <form class="form-group" action="update_scripts.php" method="POST" enctype="multipart/form-data">

                  <label>Drug Name</label>
                  <input type="text" name="drugname" class="form-control" value="<?php echo $drugname; ?>" required>
                  <br>

                  <label>Barcode</label>
                  <input type="text" name="barcode" class="form-control" value="<?php echo $barcode; ?>" required>
                  <br>

                  <label>Insured</label>
                  <input type="text" name="insured" class="form-control" value="<?php echo $insured; ?>" required>
                  <br>

                  <label>Status</label>
                  <input type="text" name="status" class="form-control" value="<?php echo $status; ?>" required>
                  <br>

                  <label>Price</label>
                  <input type="text" name="price" class="form-control" value="<?php echo $price; ?>" required>
                  <br>
                  
                  <label>Quantity</label>
                  <input type="text" name="password" class="form-control" value="<?php echo $qty; ?>" required>
                  <br><br>
                  <center><input type="submit" name="drug-update" value="Update Details" class="btn btn-warning"></center>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-1">

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