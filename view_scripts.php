<?php
require_once('connection.php');

function view_order()
{
  global $conn;
  $sql = "SELECT * FROM orders";
  $result = mysqli_query($conn, $sql);
  // $final = mysqli_num_rows($result);
  if ($result) {
    while ($row = mysqli_fetch_array($result)) {
      $id =  $row['id'];
      $name = $row['drug_name'];
      $quantity = $row['quantity'];
      $address = $row['address'];
      $patient = $row['patient'];
      $date = $row['date'];

      echo "<tr>       
      <td><input name='id' class='form-control' value='$id' readonly></td>
      <td>$patient</td>
      <td>$name</td>
      <td>$quantity</td>
      <td>$address</td>
      <td>$date</td>
      <td><input type='submit' name='delete-order' class='btn btn-danger' value='Delete'></td>
    </tr>";
    }
  } else {
    echo "<script>alert('The record cant be found')</script>";
    //echo "<script>window.open('patientpanel.php', '_self')</script>";
  }
}

function view_myorders() {
  global $conn;
  $var1 = '';
  $var1 = $_SESSION['name'];

  $sql = "SELECT * FROM orders WHERE patient = '$var1'";
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

function update_order() {
  global $conn;

  $sql = "SELECT * FROM orders;";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
      $name = $row['drug_name'];
      $qty = $row['quantity'];
      $address = $row['address'];
      $patient = $row['patient'];
      $date = $row['date'];
      $status = $row['status'];
      $reg_by = $row['registered_by'];

      echo "<tr>
              <form method='post' action=''>
                <td><input name='id' class='form-control' value='$id' readonly></td>
                <td><input name='name' class='form-control' value='$name'></td>
                <td><input name='qty' class='form-control' value='$qty'></td>
                <td><input name='address' class='form-control' value='$address'></td>
                <td><input name='patient' class='form-control' value='$patient'></td>
                <td><input name='date' class='form-control' value='$date'></td>
                <td><input name='status' class='form-control' value='$status'></td>
                <td><input name='reg_by' class='form-control' value='$reg_by'></td>
                <td><input type='submit' name='update-order' class='btn btn-primary' value='Update'></td>
              </form>
            </tr>";
    }
  } else {
    echo "<script>alert('No doctors found');</script>";
  }
}

function view_doctor()
{
  global $conn;
  $sql = "SELECT * FROM doctor";
  $result = mysqli_query($conn, $sql);
  // $final = mysqli_num_rows($result);
  if ($result) {
    while ($row = mysqli_fetch_array($result)) {
      $id =  $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $address = $row['address'];
      $speciality = $row['speciality'];

      echo "<tr>
      <td><input name='id' class='form-control' value='$id' readonly></td>
      <td>$name</td>
      <td>$email</td>
      <td>$address</td>
      <td>$speciality</td>
      <td><input type='submit' name='delete-doc' class='btn btn-danger' value='Delete'></td>
    </tr>";
    }
  } else {
    echo "<script>alert('The record cant be found')</script>";
    //echo "<script>window.open('patientpanel.php', '_self')</script>";
  }
}

function update_doctor() {
  global $conn;

  $sql = "SELECT * FROM doctor;";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $address = $row['address'];
      $spec = $row['speciality'];
      $password = $row['password'];

      echo "<tr>
              <form method='post' action=''>
                <td><input name='id' class='form-control' value='$id' readonly></td>
                <td><input name='name' class='form-control' value='$name'></td>
                <td><input name='email' class='form-control' value='$email'></td>
                <td><input name='address' class='form-control' value='$address'></td>
                <td><input name='speciality' class='form-control' value='$spec'></td>
                <td><input name='password' class='form-control' value='$password'></td>
                <td><input type='submit' name='update-doctor' class='btn btn-primary' value='Update'></td>
              </form>
            </tr>";
    }
  } else {
    echo "<script>alert('No doctors found');</script>";
  }
}

function view_patient()
{
  global $conn;
  $sql = "SELECT * FROM patient";
  $result = mysqli_query($conn, $sql);
  // $final = mysqli_num_rows($result);
  if ($result) {
    while ($row = mysqli_fetch_array($result)) {
      $id =  $row['patient_id'];
      $name = $row['patient_name'];
      $email = $row['email'];
      $phone = $row['phone'];
      $address = $row['address'];
      $dob = $row['dob'];
      $gender = $row['gender'];
      $disease = $row['disease'];

      echo "<tr>
      <td><input name='id' class='form-control' value='$id' readonly></td>
      <td>$name</td>
      <td>$email</td>
      <td>$phone</td>
      <td>$address</td>
      <td>$dob</td>
      <td>$gender</td>
      <td>$disease</td>
      <td><input type='submit' name='delete-pat' class='btn btn-danger' value='Delete'></td>
    </tr>";
    }
  } else {
    echo "<script>alert('The record cant be found')</script>";
    //echo "<script>window.open('patientpanel.php', '_self')</script>";
  }
}

function update_patient() {
  global $conn;

  $sql = "SELECT * FROM patient;";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id =  $row['patient_id'];
      $name = $row['patient_name'];
      $email = $row['email'];
      $phone = $row['phone'];
      $address = $row['address'];
      $dob = $row['dob'];
      $gender = $row['gender'];
      $disease = $row['disease'];
      $password = $row['password'];

      echo "<tr>
              <form method='post'>
                <td><input name='id' class='form-control' value='$id' readonly></td>
                <td><input name='name' class='form-control' value='$name'></td>
                <td><input name='email' class='form-control' value='$email'></td>
                <td><input name='phone' class='form-control' value='$phone'></td>
                <td><input name='address' class='form-control' value='$address'></td>
                <td><input name='dob' class='form-control' value='$dob'></td>
                <td><input name='gender' class='form-control' value='$gender'></td>
                <td><input name='disease' class='form-control' value='$disease'></td>
                <td><input name='password' class='form-control' value='$password'></td>
                <td><input type='submit' name='update-patient' class='btn btn-primary' value='Update'></td>
              </form>
            </tr>";
    }
  } else {
    echo "<script>alert('No patient found');</script>";
  }
}

function view_report()
{
  global $conn;
  $sql = "SELECT * FROM report";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    while ($row = mysqli_fetch_array($result)) {

      $id = $row['id'];
      $patient_name = $row['patient_name'];
      $doctor_name = $row['doctor_name'];
      $diagnosis = $row['diagnosis'];
      $psyc_status = $row['psyc_status'];
      $chronic_disease = $row['chronic_disease'];
      $medications = $row['medications'];
      $advice = $row['advice'];
      $date = $row['date'];

      echo "<tr>
      <td><input name='id' class='form-control' value='$id' readonly></td>
      <td>$patient_name</td>
      <td>$doctor_name</td>
      <td>$diagnosis</td>S
      <td>$psyc_status</td>   
      <td>$chronic_disease</td>   
      <td>$medications</td>   
      <td>$advice</td>   
      <td>$date</td>
      <td><input type='submit' name='delete-report' class='btn btn-danger' value='Delete'></td>
    </tr>";
    }
  } else {
    echo "<script>alert('The record cant be found')</script>";
    //echo "<script>window.open('patientpanel.php', '_self')</script>";
  }
}

function update_report() {
  global $conn;

  $sql = "SELECT * FROM report;";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
      $patient_name = $row['patient_name'];
      $doctor_name = $row['doctor_name'];
      $diagnosis = $row['diagnosis'];
      $psyc_status = $row['psyc_status'];
      $chronic_disease = $row['chronic_disease'];
      $medications = $row['medications'];
      $advice = $row['advice'];
      $date = $row['date'];

      echo "<tr>
              <form method='post'>
                <td><input name='id' class='form-control' value='$id' readonly></td>
                <td><input name='patient_name' class='form-control' value='$patient_name'></td>
                <td><input name='doctor_name' class='form-control' value='$doctor_name'></td>
                <td><input name='diagnosis' class='form-control' value='$diagnosis'></td>
                <td><input name='psyc_status' class='form-control' value='$psyc_status'></td>
                <td><input name='chronic_disease' class='form-control' value='$chronic_disease'></td>
                <td><input name='medications' class='form-control' value='$medications'></td>
                <td><input name='advice' class='form-control' value='$advice'></td>
                <td><input name='date' class='form-control' value='$date'></td>
                <td><input type='submit' name='update-report' class='btn btn-primary' value='Update'></td>
              </form>
            </tr>";
    }
  } else {
    echo "<script>alert('No patient found');</script>";
  }
}

function view_myreport()
{
  global $conn;
  $var1 = '';
  $var1 = $_SESSION['name'];
  $sql = "SELECT * FROM report WHERE patient_name = '$var1'";
  $result = mysqli_query($conn, $sql);
  // $final = mysqli_num_rows($result);
  if ($result) {
    while ($row = mysqli_fetch_array($result)) {

      $id = $row['id'];
      $patient_name = $row['patient_name'];
      $doctor_name = $row['doctor_name'];
      $diagnosis = $row['diagnosis'];
      $psyc_status = $row['psyc_status'];
      $chronic_disease = $row['chronic_disease'];
      $medications = $row['medications'];
      $advice = $row['advice'];
      $date = $row['date'];

      echo "<tr>
      <td>Dr. $doctor_name</td>
      <td>$diagnosis</td>S
      <td>$psyc_status</td>   
      <td>$chronic_disease</td>   
      <td>$medications</td>   
      <td>$advice</td>   
      <td>$date</td>
    </tr>";
    }
  } else {
    echo "<script>alert('The record cant be found')</script>";
    //echo "<script>window.open('patientpanel.php', '_self')</script>";
  }
}

function view_appointment()
{
  global $conn;

  $sql = "SELECT * FROM appointments;";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id =  $row['id'];
      $pat_name =  $row['patient_name'];
      $spec = $row['doctor_speciality'];
      $doc_name = $row['doctor_name'];
      $date = $row['appointment_date'];
      $time = $row['appointment_time'];
      $symp = $row['symptoms'];
      $dateReg = $row['date_registered'];
      
      echo "<tr>
        <form method='post'>
          <td><input name='id' class='form-control' value='$id' readonly></td> 
          <td>$pat_name</td>
          <td>$doc_name, $spec</td>
          <td>$date</td>  
          <td>$time</td>
          <td>$symp</td>
          <td>$dateReg</td>
          <td><input type='submit' name='delete-appoint' class='btn btn-danger' value='Delete'></td> 
       </form>
      </tr>";
    }
  } else {
    echo "<script>alert('The record cant be found')</script>";
    //echo "<script>window.open('patient_panel.php', '_self')</script>";
  }
}

function view_myappointment()
{
  global $conn;
  
  $var1 = '';
  $var1 = $_SESSION['name'];

  $sql = "SELECT * FROM appointments WHERE patient_name = '$var1';";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id =  $row['id'];
      $pat_name =  $row['patient_name'];
      $spec = $row['doctor_speciality'];
      $doc_name = $row['doctor_name'];
      $date = $row['appointment_date'];
      $time = $row['appointment_time'];
      $symp = $row['symptoms'];
      $dateReg = $row['date_registered'];
      
      echo "<tr>
        <form method='post'>
          <td><input type='hidden' name='id' class='form-control' value='$id' readonly></td> 
          <td>$pat_name</td>
          <td>$doc_name</td>
          <td>$date</td>  
          <td>$time</td>
          <td>$symp</td>
          <td><input type='submit' name='delete'  class='btn btn-danger' value='Cancel'></td> 
       </form>
      </tr>";
    }
  } else {
    echo "<script>alert('The record cant be found')</script>";
    //echo "<script>window.open('patient_panel.php', '_self')</script>";
  }
}

function view_docappointment()
{
  global $conn;
  $var1 = '';
  $var1 = $_SESSION['name'];
  $sql = "SELECT * FROM appointments WHERE doctor_name = '$var1'";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id =  $row['id'];
      $pat_name =  $row['patient_name'];
      $spec = $row['doctor_speciality'];
      $doc = $row['doctor_name'];
      $date = $row['appointment_date'];
      $time = $row['appointment_time'];
      $symp = $row['symptoms'];
      
      echo "<tr>
        <form method='post'>
          <td><input type='hidden' name='id' class='form-control' value='$id' readonly></td>  
          <td>$pat_name</td>
          <td>$doc</td>
          <td>$date</td>  
          <td>$time</td>
          <td>$symp</td>
          <td><input type='submit' name='doc-delete' class='btn btn-danger' value='Cancel'></td> 
       </form>
      </tr>";
    }
  } else {
    echo "<script>alert('The record cant be found')</script>";
    //echo "<script>window.open('patientpanel.php', '_self')</script>";
  }
}

function update_appointment() {
  global $conn;

  $sql = "SELECT * FROM appointments;";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id =  $row['id'];
      $pat_name =  $row['patient_name'];
      $spec = $row['doctor_speciality'];
      $doc_name = $row['doctor_name'];
      $date = $row['appointment_date'];
      $time = $row['appointment_time'];
      $symp = $row['symptoms'];
      $dateReg = $row['date_registered'];

      echo "<tr>
              <form method='post'>
                <td><input name='id' class='form-control' value='$id' readonly></td>
                <td><input name='patient_name' class='form-control' value='$pat_name'></td>
                <td><input name='doctor_name' class='form-control' value='$doc_name'></td>
                <td><input name='doctor_speciality' class='form-control' value='$spec'></td>
                <td><input name='date' class='form-control' value='$date'></td>
                <td><input name='time' class='form-control' value='$time'></td>
                <td><input name='symptoms' class='form-control' value='$symp'></td>
                <td>$dateReg</td>
                <td><input type='submit' name='update-appoint' class='btn btn-primary' value='Update'></td>
              </form>
            </tr>";
    }
  } else {
    echo "<script>alert('No appointments found');</script>";
  }
}

function view_drugs() {
  global $conn;
  // $var1 = '';
  // $var1 = $_SESSION['id'];

  $sql = "SELECT * FROM drug;";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
      $drugname = $row['name'];
      $barcode = $row['barcode'];
      $insured = $row['insured'];
      $status = $row['status'];
      $price = $row['price'];
      $qty = $row['quantity'];
      $reg_by = $row['registered_by'];
      $date = $row['date'];

      echo "<tr>
              <form method='post'>
                <td><input name='id' class='form-control' value='$id' readonly></td>
                <td>$drugname</td>
                <td>$barcode</td>
                <td>$insured</td>
                <td>$status</td>
                <td>$price</td>
                <td>$qty</td>
                <td>$reg_by</td>
                <td>$date</td>
                <td><input type='submit' name='delete-drug' class='btn btn-danger' value='Remove'></td>
              </form>
            </tr>";
    }
  } else {
    echo "<script>alert('No drugs found');</script>";
  }
}

function view_pharma_drugs() {
  global $conn;
  $var1 = '';
  $var1 = $_SESSION['id'];

  $sql = "SELECT * FROM drug WHERE registered_by = '$var1'";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
      $drugname = $row['name'];
      $barcode = $row['barcode'];
      $insured = $row['insured'];
      $status = $row['status'];
      $price = $row['price'];
      $qty = $row['quantity'];
      $reg_by = $row['registered_by'];
      $date = $row['date'];

      echo "<tr>
              <form method='post'>
                <td><input type='hidden' name='id' class='form-control' value='$id' readonly></td>
                <td>$drugname</td>
                <td>$barcode</td>
                <td>$insured</td>
                <td>$status</td>
                <td>$price</td>
                <td>$qty</td>
                <td>$date</td>
                <td><input type='submit' name='delete-drug' class='btn btn-danger' value='Remove'></td>
              </form>
            </tr>";
    }
  } else {
    echo "<script>alert('No drugs found');</script>";
  }
}

function update_drugs() {
  global $conn;

  $sql = "SELECT * FROM drug;";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
      $drugname = $row['name'];
      $barcode = $row['barcode'];
      $insured = $row['insured'];
      $status = $row['status'];
      $price = $row['price'];
      $qty = $row['quantity'];
      $reg_by = $row['registered_by'];
      $date = $row['date'];

      echo "<tr>
              <form method='post' action=''>
                <td><input name='id' class='form-control' value='$id' readonly></td>
                <td><input name='drugname' class='form-control' value='$drugname'></td>
                <td><input name='barcode' class='form-control' value='$barcode'></td>
                <td><input name='insured' class='form-control' value='$insured'></td>
                <td><input name='status' class='form-control' value='$status'></td>
                <td><input name='price' class='form-control' value='$price'></td>
                <td><input name='qty' class='form-control' value='$qty'></td>
                <td><input name='reg_by' class='form-control' value='$reg_by'></td>
                <td><input name='date' class='form-control' value='$date' readonly></td>
                <td><input type='submit' name='update-drug' class='btn btn-primary' value='Update'></td>
              </form>
            </tr>";
    }
  } else {
    echo "<script>alert('No drugs found');</script>";
  }
}

function view_pharma_drugs_update() {
  global $conn;
  $var1 = '';
  $var1 = $_SESSION['id'];

  $sql = "SELECT * FROM drug WHERE registered_by = '$var1'";
  $result = mysqli_query($conn, $sql);
  $final = mysqli_num_rows($result);
  if ($final > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['id'];
      $drugname = $row['name'];
      $barcode = $row['barcode'];
      $insured = $row['insured'];
      $status = $row['status'];
      $price = $row['price'];
      $qty = $row['quantity'];
      $reg_by = $row['registered_by'];
      $date = $row['date'];

      echo "<tr>
              <form method='post' action='update_scripts.php'>
                <td><input type='hidden' name='id' class='form-control' value='$id' readonly></td>
                <td><input name='drugname' class='form-control' value='$drugname'></td>
                <td><input name='barcode' class='form-control' value='$barcode'></td>
                <td><input name='insured' class='form-control' value='$insured'></td>
                <td><input name='status' class='form-control' value='$status'></td>
                <td><input name='price' class='form-control' value='$price'></td>
                <td><input name='qty' class='form-control' value='$qty'></td>
                <td><input name='date' class='form-control' value='$date' readonly></td>
                <td><input type='submit' name='update-drug' class='btn btn-primary' value='Update'></td>
              </form>
            </tr>";
    }
  } else {
    echo "<script>alert('No drugs found');</script>";
  }
}

?>