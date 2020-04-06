<?php
    include("../resources/connection.php"); 
    session_start();

    $CourseName = mysqli_real_escape_string($conn, $_POST['courseName']);
    $FirstName = mysqli_real_escape_string($conn, $_POST['first-name']);
    $LastName = mysqli_real_escape_string($conn, $_POST['last-name']);
    $Address1 = mysqli_real_escape_string($conn, $_POST['address_line1']);
    $Address2 = mysqli_real_escape_string($conn, $_POST['address_line2']);
    $City = mysqli_real_escape_string($conn, $_POST['address_city']);
    $State = mysqli_real_escape_string($conn, $_POST['address_state']);
    // $Country = mysqli_real_escape_string($conn, $_POST['address_country']);
    $Token = mysqli_real_escape_string($conn, $_POST['stripeToken']);
    $TokenType = mysqli_real_escape_string($conn, $_POST['stripeTokenType']);
    $stipeEmail = mysqli_real_escape_string($conn, $_POST['stripeEmail']);
    $Timestamp =  mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));


?>