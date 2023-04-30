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
	echo "<script>alert('Details Updated Succesfully')</script>";
	echo "<script>window.open('doctor_panel.php','_self')</script>";
} else {
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}
