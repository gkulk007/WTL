<?php

// function openconn()
// include 'login.php';
// $hn='localhost';
// $db='patient11';
// $un='root';
// $pw="";
// $conn= mysqli_connect($hn,$un,$pw,$db); 

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "patient11");

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE,3307);





if (isset($_POST['submit'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['Treatment']) && !empty($_POST['doctor'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $Treatment = $_POST['Treatment'];
        $doctor = $_POST['doctor'];

        $query = "INSERT INTO patient11form (firstName,lastName,email,phone,Treatment,doctor) VALUES ('$firstName' , '$lastName' , '$email' , '$phone' , '$Treatment' , '$doctor' )";
        $run = mysqli_query($db, $query) or die(mysqli_error());
        if ($run) {
            // echo"Form Submitted Successfully";
          $alert="<script> alert('Form Submitted Successfully')</script>";
          echo $alert;
        } else {
            $alert="<script> alert('Form is not Submitted')</script>";
          echo $alert;
        }
        

    } else {
        $alert="<script> alert('All Fields are required')</script>";
          echo $alert;
    }
    
}


?>