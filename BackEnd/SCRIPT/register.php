<?php

include('conn.php');

if(isset($_POST['register'])) {
    // Define variables from
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $query = "SELECT email_US FROM users WHERE email_Us = '$email'";
    $result = mysqli_query($mysqli, $query);
    $info = mysqli_fetch_array($result);
    // check if user with email already exist
    if($info) {
        // if user exist than send to register-error.php
        header('Location: ../register-error.php');
    } else {
        //if user does not exist than:
        // Create hash from given password
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        include('code-gen.php');
        //print_r($_POST);
        // Insert data to database
        $query = "INSERT INTO users (user_US, email_US, pass_US, VerCode_US) VALUES ('$user', '$email', '$hash', '$VerCode')";
        $result = mysqli_query($mysqli, $query);
        // Check if result is positive
        if ($result) {
            // If result is positive, than redirect to verify-site.php
            include('mail-verify.php');
            header("Location: ../verify-site.php");
        } else {
            // If result is negative, than redict to register-error.html
            header('Location: ../register-error.php');
        }
    }
 } else {
    print("There is problem with data in form");
}
$mysqli->close();
?>
