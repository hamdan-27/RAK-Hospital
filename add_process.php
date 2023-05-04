<?php
require('connection.php');

if (isset($_POST['doctor-submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $speciality = $_POST['speciality'];
    $password = $_POST['password'];

    $sql = "INSERT INTO doctor VALUES(NULL, '$name', '$email', '$address', '$speciality',
            md5('$password'))"; // md5 hash and encrypt the password

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script> alert('New Doctor Registered Succesfully'); </script>";
    } else {
        echo "<script> alert('Sorry, an error occured'); </script>";
    }
}

else if (isset($_POST['patient-submit'])) {

    $id = $_POST['patient_id'];
    $name = $_POST['patient_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $disease = $_POST['disease'];
    $password = $_POST['password'];

    $sql = "INSERT INTO patient VALUES(NULL,'$id','$name', '$email', '$phone', '$address', 
    '$dob', '$gender', '$disease', md5('$password'))";
    
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('New patient registered successfuly')</script>";
    } else {
        echo "<script>alert('Sorry an error occured')</script>";
    }
} 

else if (isset($_POST['pharma-submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $sql = "INSERT INTO pharmacist VALUES(NULL,'$name', '$email', '$address', md5('$password'))";
    
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('New pharmacist registered successfuly')</script>";
    } else {
        echo "<script>alert('Sorry an error occured')</script>";
    }
} 

else if (isset($_POST['orderdrug'])) {

    $drugname = $_POST['drug-name'];
    $qty = $_POST['quantity'];
    $address = $_POST['address'];
    $patient = $_POST['patient-name'];
    $todayDate = date("Y-m-d");
    $stat = "successful";

    $sql = "INSERT INTO orders 
    VALUES(NULL, '$drugname', '$qty', '$address', '$patient', '$todayDate', '$stat');";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($result) {
        echo "<head><title>Success</title></head>";
        echo "<script>
                alert('Order has been placed successfully. Thank you for shopping with us!');
            </script>
            <script>open('patient_panel.php');</script>";
    } else {
        echo "<script>alert('Could not place order.');</script>";
        echo "<script>open('patient_panel.php');</script>";
    }
}

else if (isset($_POST['add-drug'])) {
    require('login_process.php');

    $id = $_SESSION['id'];
    $drugname = $_POST['name'];
    $barcode = $_POST['code'];
    $insured = $_POST['ins'];
    $avail = $_POST['status'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $todayDate = date("Y-m-d");

    $sql = "INSERT INTO drug VALUES(NULL, $drugname, $barcode, $insured, $avail, $price, $qty);";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<head><title>Success</title></head>";
        echo "<script>
                alert('Drug has been added successfully. Thank you for shopping with us!');
            </script>";
        echo "<script>open('pharma_panel.php');</script>";
    } else {
        echo "<script>alert('Could not add drug.');</script>";
        // echo "<script>open('pharma_panel.php');</script>";
    }
}

else {
    echo "Fields required.";
}

?>
