<?php

include('conn.php');

if(isset($_POST['login'])) {
    // Define user variables, connect and check in database user
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    print_r($_POST);
    $query = "SELECT * FROM users WHERE email_US = '$email'";
    $result = mysqli_query($mysqli, $query);
    // Check if there is one user names as in $user
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        //Get data from db to 
        $query = "SELECT user_US, pass_US, email_US, role_US, confirmed_US FROM users WHERE email_Us = '$email'";
        $result = mysqli_query($mysqli, $query);
        $info = mysqli_fetch_array($result);
        // Create sessions
        session_start();
        $_SESSION['user'] = $info['user_US'];
        $_SESSION['role'] = $info['role_US'];
        $_SESSION['email'] = $info['email_US'];
        //$_SESSION['pass'] = $info['pass_US'];
        //print_r($_SESSION);
        $hash = $info['pass_US'];
        $role = $info['role_US'];
        $confirmed =$info['confirmed_US'];
        if($confirmed == 1 AND password_verify($pass, $hash)) {
            //if verify successfull check:
            if($role == 1){
                //if user is an admin send him to admin-panel.php
                header('Location: ../admin-panel.php');
            } else { 
                //if user is normal user than send him to log-success.php
                header("Location: ../user-panel.php");
            }
        } elseif ($confirmed == 0 AND password_verify($pass, $hash)) {
            // if verify successfull than send user to log-success.php
            header("Location: ../verify-error.php");
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