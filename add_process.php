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
else {
    echo "Fields required.";
}
?>