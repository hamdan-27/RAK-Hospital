<?php 
require('connection.php');
require('login_process.php');

if(isset($_POST['doctor-update'])){
    $var1 ='';
    $var1 = $_SESSION['name'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$speciality = $_POST['speciality'];
	$password = $_POST['password'];
	

    $sql= "UPDATE `doctor` SET `name` = '$name', `email` = '$email', `address` = '$address', `speciality` = '$speciality', `password` = '$password' WHERE `doctor`.`name` = '$var1' ";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        echo "<script>alert('Details Updated Succesfully. Please login again')</script>";
        echo "<script>window.open('doctor_login.php','_self')</script>";
    } else {
        
        echo "<script>alert('Sorry an error occurred')</script>";
        //echo "<script>window.open('adminpanel.php','_self')</script>";
    }
} 

if(isset($_POST['patient-update'])){
    $var1 ='';
    $var1 = $_SESSION['name'];
    $name = $_POST['patient_name'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$disease = $_POST['disease'];
	$password = $_POST['password'];
	

    $sql= "UPDATE `patient` 
    SET `patient_name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address', `dob` = '$dob', `gender` = '$gender', `disease` = '$disease', `password` = md5('$password') 
    WHERE `patient`.`patient_name` = '$var1' ";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        echo "<script>alert('Details Updated Succesfully. Please login again')</script>";
        echo "<script>window.open('patient_login.php','_self')</script>";
    } else {
        
        echo "<script>alert('Sorry an error occurred')</script>";
        //echo "<script>window.open('adminpanel.php','_self')</script>";
    }
} 

if(isset($_POST['pharma-update'])){
    $var1 ='';
    $var1 = $_SESSION['name'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	

    $sql= "UPDATE `pharmacist` 
    SET `name` = '$name', `email` = '$email', `store_address` = '$address', `password` = md5('$password') 
    WHERE `pharmacist`.`name` = '$var1' ";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        echo "<script>alert('Details Updated Succesfully. Please login again')</script>";
        echo "<script>window.open('pharma_login.php','_self')</script>";
    } else {
        
        echo "<script>alert('Sorry an error occurred')</script>";
        //echo "<script>window.open('adminpanel.php','_self')</script>";
    }
} 

else {
    echo "fields required";
}

?>