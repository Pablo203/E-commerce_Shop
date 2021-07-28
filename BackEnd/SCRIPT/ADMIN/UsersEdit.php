<?php
include('../conn.php');

//print_r($_POST);
$EditedUser = $_POST['user-edit-user'];
$EditedEmail = $_POST['user-edit-email'];
$EditedRole = $_POST['user-edit-role'];

if(isset($_POST['user-edit-submit'])) {
    session_destroy();
    session_start();
    //print_r($_SESSION);
    $UserEmail = $_SESSION['user-id'];
    echo $query = "UPDATE users SET user_US = '$EditedUser', email_US = '$EditedEmail', role_US = $EditedRole
    WHERE email_US = '$UserEmail'";
    $result = mysqli_query($mysqli, $query);
    if($result == 1) {
        header('Location: ../../test-panel.php');
    }
} else if(isset($_POST['user-remove-submit'])) {
    session_destroy();
    session_start();
    //print_r($_SESSION);
    $UserEmail = $_SESSION['user-id'];
    echo $query = "DELETE FROM users WHERE email_US = '$UserEmail'";
    $result = mysqli_query($mysqli, $query);
    if($result == 1) {
        header('Location: ../../test-panel.php');
    }
}
?>