<?php

include('conn.php');

if(isset($_POST['register'])) {
    // Define variables from
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    // Create hash from given password
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    //print_r($_POST);

    // Insert data to database
    $query = "INSERT INTO users (user_US, email_US, pass_US, role_US, confirmed_US) VALUES ('$user','$email', '$hash', '0', '0')";
    $result = mysqli_query($mysqli, $query);
    // Check if result is positive
    if ($result == 1) {
        // If result is positive, than redirect to log.html
        header("Location: ../log.html");
    } else {
        // If result is negative, than redict to register-error.html
        header('Location: ../register-error.php');
    }
} else {
    print("There is problem with data in form");
}

$mysqli->close();
?>