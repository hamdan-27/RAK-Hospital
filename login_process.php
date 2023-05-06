<?php
session_start();
require('connection.php');

// DOCTOR LOGIN PROCESS START
if (isset($_POST['doctorlogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `doctor` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $final = mysqli_num_rows($result);

    if ($final > 0) {
        while ($row = mysqli_fetch_array($result)) { //used to fetch data from database
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            header("Location: doctor_panel.php");
        }
    } else {
        echo "<script> alert('Please enter your correct details'); </script>";
        echo "<script> open('doctor_login.php', '_self'); </script>";
    }
} // END DOCTOR LOGIN PROCESS

// PATIENT LOGIN PROCESS START
if (isset($_POST['patientlogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `patient` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $final = mysqli_num_rows($result);

    if ($final > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $row['patient_name'];
            $_SESSION['email'] = $row['email'];
            $session_name = $_SESSION['name'];
            header("Location: patient_panel.php");
        }
    } else {
        echo "<script> alert('Please enter your correct details'); </script>";
        echo "<script> open('patient_login.php', '_self'); </script>";
    }
} // END PATIENT LOGIN PROCESS

// PHARMACIST LOGIN PROCESS START
if (isset($_POST['pharmalogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `pharmacist` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $final = mysqli_num_rows($result);

    if ($final > 0) {
        while ($row = mysqli_fetch_array($result)) { //used to fetch data from database
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['id'] = $row['pharmacist_id'];
            $_SESSION['name'] = $row['name'];
            // $_SESSION['email'] = $row['email'];
            header("Location: pharma_panel.php");
        }
    } else {
        echo "<script> alert('Please enter your correct details'); </script>";
        echo "<script> open('pharma_login.php', '_self'); </script>";
    }
} // END PHARMACIST LOGIN PROCESS

// ADMIN LOGIN PROCESS START
if (isset($_POST['adminlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $final = mysqli_num_rows($result);

    if ($final > 0) {
        while ($row = mysqli_fetch_array($result)) { //used to fetch data from database
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $row['username'];
            // $_SESSION['email'] = $row['email'];
            header("Location: admin_panel.php");
        }
    } else {
        echo "<script> alert('Please enter your correct details'); </script>";
        echo "<script> open('admin_login.php', '_self'); </script>";
    }
} // END ADMIN LOGIN PROCESS
