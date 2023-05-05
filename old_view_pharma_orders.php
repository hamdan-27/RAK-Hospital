<!DOCTYPE html>
<?php
require('login_process.php');
function view_pharma_orders() {
    global $conn;
    $var1 = $_SESSION['id'];
  
    $sql = "SELECT * FROM orders WHERE registered_by = '$var1'";
    $result = mysqli_query($conn, $sql);
    $final = mysqli_num_rows($result);
    if ($final > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $drugname = $row['drug_name'];
        $qty = $row['quantity'];
        $address = $row['address'];
        $patient = $row['patient'];
        $date = $row['date'];
        $stat = $row['status'];
  
        echo "<tr>
                <form method='post'>
                  <td><input type='hidden' name='id' class='form-control' value='$id' readonly></td>
                  <td>$drugname</td>
                  <td>$qty</td>
                  <td>$address</td>
                  <td>$patient</td>
                  <td>$date</td>
                  <td>$stat</td>
                  <td><input type='submit' name='cancel-order' class='btn btn-danger' value='Cancel'></td>
                </form>
              </tr>";
      }
    } else {
      echo "<script>alert('No orders found');</script>";
    }
  }

?> <html>

  <head>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class="container">
      <div class="card">
        <!-- <img src='dd.jpg' class="card-img-top" width="50px" height="150px"> -->
          <div class="card-body" style="background-color: #1EBB6E ; color: white; border-color: #06F2F8;">
            <div class="row">
              <div class="col-md-3">
                <a href="pharma_panel.php" class="btn btn-light">< Back</a>
              </div>
              <div class="col-md-6">
                <!-- <center><img src="dd.jpg " width="200PX"></center> <br>
                <center><b> -->
                    <h1>Orders</h1>
                  </b></center>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Patient</th>
                  <th scope="col">Drug Name</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Delivery Address</th>
                  <th scope="col">Date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                view_pharma_orders();
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