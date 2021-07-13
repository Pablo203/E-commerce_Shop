<?php

$pass = "test_password";
echo 'Default password: <b>'. $pass. '</b>';
$hash = password_hash($pass, PASSWORD_DEFAULT);
echo '<br /> Hashed password: <b>'. $hash. '</b>';
/*
$hash = '$2y$12$pd70g9gadkN2omvNJpRDW.u42YCNLusaeCZWSTQmcR33Tk66BQUg.';
if(password_verify('test_register', $hash)) {
    echo '<br>pass good';
} else {
    echo '<br>you fucked up';
}
*/
?>