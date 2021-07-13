<?php

include('conn.php');

if(isset($_POST['login'])) {
    // Define user variables, connect and check in database user
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //print_r($_POST);
    $query = "SELECT * FROM users WHERE user_US = '$user'";
    $result = mysqli_query($mysqli, $query);
    // Check if there is one user names as in $user
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        //Get data from db to 
        $query = "SELECT pass_US, user_US FROM users WHERE user_US = '$user'";
        $result = mysqli_query($mysqli, $query);
        $result = mysqli_query($mysqli, $query);
        $info = mysqli_fetch_array($result);
        // Create sessions
        session_start();
        $_SESSION['user'] = $info['user_US'];
        $_SESSION['pass'] = $info['pass_US'];
        print_r($_SESSION);
        $hash = $_SESSION['pass'];
        if(password_verify($pass, $hash)) {
            // if verify successfull than send user to log-success.php
            header("Location: ../log-success.php");
        } else {
            // if verify error than send user to log-error.php
            header('Location: ../log-error.php');
        }
    } else {
        // Display error if there is no user or data in db
        //echo 'There is no/more users called ' .'<b>'. $user .'</b> or the password is incorrect!';
        header('Location: ../log-error.php');
        // Create sessions
        // $_SESSION['error'] = "user doesn't exist or there is more users";
    }
} else {
    print("There is problem with data in form");
}

$mysqli->close();
?>